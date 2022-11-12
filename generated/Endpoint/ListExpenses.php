<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class ListExpenses extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of your expenses. If accessing this endpoint as an Administrator, all expenses in the account will be returned. If accessing this endpoint as a Manager, all expenses for assigned teammates and managed projects will be returned. The expenses are returned sorted by the spent_at date, with the most recent expenses appearing first.

     *
     * @param array $queryParameters {
     *
     *     @var int $user_id only return expenses belonging to the user with the given ID
     *     @var int $client_id only return expenses belonging to the client with the given ID
     *     @var int $project_id only return expenses belonging to the project with the given ID
     *     @var bool $is_billed pass true to only return expenses that have been invoiced and false to return expenses that have not been invoiced
     *     @var string $updated_since only return expenses that have been updated since the given date and time
     *     @var string $from only return expenses with a spent_date on or after the given date
     *     @var string $to only return expenses with a spent_date on or before the given date
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 100)
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/expenses';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['user_id', 'client_id', 'project_id', 'is_billed', 'updated_since', 'from', 'to', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('user_id', ['int']);
        $optionsResolver->setAllowedTypes('client_id', ['int']);
        $optionsResolver->setAllowedTypes('project_id', ['int']);
        $optionsResolver->setAllowedTypes('is_billed', ['bool']);
        $optionsResolver->setNormalizer('is_billed', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));
        $optionsResolver->setAllowedTypes('updated_since', ['string']);
        $optionsResolver->setAllowedTypes('from', ['string']);
        $optionsResolver->setAllowedTypes('to', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Harvest\Api\Model\Expenses|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Expenses', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
}

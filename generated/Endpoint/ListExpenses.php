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
     * The response contains an object with a expenses property that contains an array of up to per_page expenses. Each entry in the array is a separate expense object. If no more expenses are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expenses.
     *
     * @param array{
     *    "user_id"?: int, //Only return expenses belonging to the user with the given ID.
     *    "client_id"?: int, //Only return expenses belonging to the client with the given ID.
     *    "project_id"?: int, //Only return expenses belonging to the project with the given ID.
     *    "is_billed"?: bool, //Pass true to only return expenses that have been invoiced and false to return expenses that have not been invoiced.
     *    "approval_status"?: string, //Only return expenses with the given approval status. Possible values: “unsubmitted”, “submitted”, or “approved”.
     *    "updated_since"?: string, //Only return expenses that have been updated since the given date and time.
     *    "from"?: string, //Only return expenses with a spent_date on or after the given date.
     *    "to"?: string, //Only return expenses with a spent_date on or before the given date.
     *    "page"?: int, //The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *    "per_page"?: int, //The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     * } $queryParameters
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
        $optionsResolver->setDefined(['user_id', 'client_id', 'project_id', 'is_billed', 'approval_status', 'updated_since', 'from', 'to', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('user_id', ['int']);
        $optionsResolver->addAllowedTypes('client_id', ['int']);
        $optionsResolver->addAllowedTypes('project_id', ['int']);
        $optionsResolver->addAllowedTypes('is_billed', ['bool']);
        $optionsResolver->setNormalizer('is_billed', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('approval_status', ['string']);
        $optionsResolver->addAllowedTypes('updated_since', ['string']);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('to', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Harvest\Api\Model\Expenses|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\Harvest\Api\Model\Expenses', 'json');
        }
        if (false !== mb_strpos(strtolower($contentType), 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\Harvest\Api\Model\Error', 'json');
        }
    }
}

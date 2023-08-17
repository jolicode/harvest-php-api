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

class ListTimeEntries extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of time entries. The time entries are returned sorted by spent_date date. At this time, the sort option can’t be customized.
     *
     * @param array $queryParameters {
     *
     * @var int    $user_id only return time entries belonging to the user with the given ID
     * @var int    $client_id only return time entries belonging to the client with the given ID
     * @var int    $project_id only return time entries belonging to the project with the given ID
     * @var int    $task_id only return time entries belonging to the task with the given ID
     * @var string $external_reference_id only return time entries with the given external_reference ID
     * @var bool   $is_billed pass true to only return time entries that have been invoiced and false to return time entries that have not been invoiced
     * @var bool   $is_running pass true to only return running time entries and false to return non-running time entries
     * @var string $updated_since Only return time entries that have been updated since the given date and time. Use the ISO 8601 Format.
     * @var string $from only return time entries with a spent_date on or after the given date
     * @var string $to only return time entries with a spent_date on or before the given date
     * @var int    $page The page number to use in pagination. For instance, if you make a list request and receive 2000 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @var int    $per_page The number of records to return per page. Can range between 1 and 2000. (Default: 2000)
     *             }
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
        return '/time_entries';
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
        $optionsResolver->setDefined(['user_id', 'client_id', 'project_id', 'task_id', 'external_reference_id', 'is_billed', 'is_running', 'updated_since', 'from', 'to', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('user_id', ['int']);
        $optionsResolver->addAllowedTypes('client_id', ['int']);
        $optionsResolver->addAllowedTypes('project_id', ['int']);
        $optionsResolver->addAllowedTypes('task_id', ['int']);
        $optionsResolver->addAllowedTypes('external_reference_id', ['string']);
        $optionsResolver->addAllowedTypes('is_billed', ['bool']);
        $optionsResolver->setNormalizer('is_billed', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('is_running', ['bool']);
        $optionsResolver->setNormalizer('is_running', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));
        $optionsResolver->addAllowedTypes('updated_since', ['string']);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('to', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Harvest\Api\Model\TimeEntries|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TimeEntries', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
}

<?php

namespace JoliCode\Harvest\Api\Endpoint;

class ListTimeEntries extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * Returns a list of your time entries. The time entries are returned sorted by spent_at date. At this time, the sort option can’t be customized.
    
    The response contains an object with a time_entries property that contains an array of up to per_page time entries. Each entry in the array is a separate time entry object. If no more time entries are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your time entries.
    *
    * @param array $queryParameters {
    *     @var int $user_id Only return time entries belonging to the user with the given ID.
    *     @var int $client_id Only return time entries belonging to the client with the given ID.
    *     @var int $project_id Only return time entries belonging to the project with the given ID.
    *     @var int $task_id Only return time entries belonging to the task with the given ID.
    *     @var string $external_reference_id Only return time entries with the given external_reference ID.
    *     @var bool $is_billed Pass true to only return time entries that have been invoiced and false to return time entries that have not been invoiced.
    *     @var bool $is_running Pass true to only return running time entries and false to return non-running time entries.
    *     @var string $updated_since Only return time entries that have been updated since the given date and time. Use the ISO 8601 Format.
    *     @var string $from Only return time entries with a spent_date on or after the given date.
    *     @var string $to Only return time entries with a spent_date on or before the given date.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/time_entries';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('user_id', 'client_id', 'project_id', 'task_id', 'external_reference_id', 'is_billed', 'is_running', 'updated_since', 'from', 'to', 'page', 'per_page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('user_id', array('int'));
        $optionsResolver->setAllowedTypes('client_id', array('int'));
        $optionsResolver->setAllowedTypes('project_id', array('int'));
        $optionsResolver->setAllowedTypes('task_id', array('int'));
        $optionsResolver->setAllowedTypes('external_reference_id', array('string'));
        $optionsResolver->setAllowedTypes('is_billed', array('bool'));
        $optionsResolver->setNormalizer('is_billed', \Closure::fromCallable(array(new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('is_running', array('bool'));
        $optionsResolver->setNormalizer('is_running', \Closure::fromCallable(array(new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('updated_since', array('string'));
        $optionsResolver->setAllowedTypes('from', array('string'));
        $optionsResolver->setAllowedTypes('to', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeEntries|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TimeEntries', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class ListExpenses extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    /**
    * Returns a list of your expenses. If accessing this endpoint as an Admin, all expenses in the account will be returned. The expenses are returned sorted by the spent_at date, with the most recent expenses appearing first.
    
    The response contains an object with a expenses property that contains an array of up to per_page expenses. Each entry in the array is a separate expense object. If no more expenses are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your expenses.
    *
    * @param array $queryParameters {
    *     @var int $user_id Only return expenses belonging to the user with the given ID.
    *     @var int $client_id Only return expenses belonging to the client with the given ID.
    *     @var int $project_id Only return expenses belonging to the project with the given ID.
    *     @var bool $is_billed Pass true to only return expenses that have been invoiced and false to return expenses that have not been invoiced.
    *     @var string $updated_since Only return expenses that have been updated since the given date and time.
    *     @var string $from Only return expenses with a spent_date on or after the given date.
    *     @var string $to Only return expenses with a spent_date on or before the given date.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/expenses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('user_id', 'client_id', 'project_id', 'is_billed', 'updated_since', 'from', 'to', 'page', 'per_page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('user_id', array('int'));
        $optionsResolver->setAllowedTypes('client_id', array('int'));
        $optionsResolver->setAllowedTypes('project_id', array('int'));
        $optionsResolver->setAllowedTypes('is_billed', array('bool'));
        $optionsResolver->setNormalizer('is_billed', \Closure::fromCallable(array(new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke')));
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
     * @return null|\JoliCode\Harvest\Api\Model\Expenses|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Expenses', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
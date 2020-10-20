<?php

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveExpenseCategory extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $expenseCategoryId;
    /**
     * Retrieves the expense category with the given ID. Returns an expense category object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $expenseCategoryId 
     */
    public function __construct(string $expenseCategoryId)
    {
        $this->expenseCategoryId = $expenseCategoryId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{expenseCategoryId}'), array($this->expenseCategoryId), '/expense_categories/{expenseCategoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\ExpenseCategory|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategory', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
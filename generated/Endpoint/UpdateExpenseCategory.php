<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateExpenseCategory extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $expenseCategoryId;
    /**
     * Updates the specific expense category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an expense category object and a 200 OK response code if the call succeeded.
     *
     * @param string $expenseCategoryId 
     * @param \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody $payload json payload
     */
    public function __construct(string $expenseCategoryId, \JoliCode\Harvest\Api\Model\ExpenseCategoriesExpenseCategoryIdPatchBody $payload)
    {
        $this->expenseCategoryId = $expenseCategoryId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{expenseCategoryId}'), array($this->expenseCategoryId), '/expense_categories/{expenseCategoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
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
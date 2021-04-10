<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateBillableRate extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $userId;
    /**
    * Creates a new billable rate object. Returns a billable rate object and a 201 Created response code if the call succeeded.
    
    
     Creating a billable rate with no start_date will replace a user’s existing rate(s).
     Creating a billable rate with a start_date that is before a user’s existing rate(s) will replace those billable rates with the new one.
    
    *
    * @param string $userId 
    * @param \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody $requestBody 
    */
    public function __construct(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody $requestBody)
    {
        $this->userId = $userId;
        $this->body = $requestBody;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{userId}'), array($this->userId), '/users/{userId}/billable_rates');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\BillableRate|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\BillableRate', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
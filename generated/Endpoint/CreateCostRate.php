<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateCostRate extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $userId;
    /**
    * Creates a new cost rate object. Returns a cost rate object and a 201 Created response code if the call succeeded.
    
    
     Creating a cost rate with no start_date will replace a user’s existing rate(s).
     Creating a cost rate with a start_date that is before a user’s existing rate(s) will replace those cost rates with the new one.
    
    *
    * @param string $userId 
    * @param \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $requestBody 
    */
    public function __construct(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $requestBody)
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
        return str_replace(array('{userId}'), array($this->userId), '/users/{userId}/cost_rates');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody) {
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
     * @return null|\JoliCode\Harvest\Api\Model\CostRate|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\CostRate', 'json');
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
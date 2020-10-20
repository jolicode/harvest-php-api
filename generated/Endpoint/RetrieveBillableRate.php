<?php

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveBillableRate extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $userId;
    protected $billableRateId;
    /**
     * Retrieves the billable rate with the given ID. Returns a billable rate object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $userId 
     * @param string $billableRateId 
     */
    public function __construct(string $userId, string $billableRateId)
    {
        $this->userId = $userId;
        $this->billableRateId = $billableRateId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{userId}', '{billableRateId}'), array($this->userId, $this->billableRateId), '/users/{userId}/billable_rates/{billableRateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\BillableRate|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\BillableRate', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
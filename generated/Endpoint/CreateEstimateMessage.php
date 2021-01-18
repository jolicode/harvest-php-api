<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateEstimateMessage extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $estimateId;
    /**
     * Creates a new estimate message object. Returns an estimate message object and a 201 Created response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody $payload json payload
     */
    public function __construct(string $estimateId, \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody $payload)
    {
        $this->estimateId = $estimateId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{estimateId}'), array($this->estimateId), '/estimates/{estimateId}/messages');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\EstimateMessage|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
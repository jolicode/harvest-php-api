<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteEstimateMessage extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $estimateId;
    protected $messageId;
    /**
     * Delete an estimate message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $estimateId 
     * @param string $messageId 
     */
    public function __construct(string $estimateId, string $messageId)
    {
        $this->estimateId = $estimateId;
        $this->messageId = $messageId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{estimateId}', '{messageId}'), array($this->estimateId, $this->messageId), '/estimates/{estimateId}/messages/{messageId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
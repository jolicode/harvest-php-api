<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateTask extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $taskId;
    /**
     * Updates the specific task by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task object and a 200 OK response code if the call succeeded.
     *
     * @param string $taskId 
     * @param \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody $payload json payload
     */
    public function __construct(string $taskId, \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody $payload)
    {
        $this->taskId = $taskId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{taskId}'), array($this->taskId), '/tasks/{taskId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Task|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Task', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
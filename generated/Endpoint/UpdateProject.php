<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $projectId;
    /**
     * Updates the specific project by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a project object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody $payload json payload
     */
    public function __construct(string $projectId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody $payload)
    {
        $this->projectId = $projectId;
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{projectId}'), array($this->projectId), '/projects/{projectId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Project|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Project', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteRole extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $roleId;
    /**
     * Delete a role. Deleting a role will unlink it from any users it was assigned to. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $roleId 
     */
    public function __construct(string $roleId)
    {
        $this->roleId = $roleId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{roleId}'), array($this->roleId), '/roles/{roleId}');
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
}
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveRole extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $roleId;
    /**
     * Retrieves the role with the given ID. Returns a role object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $roleId 
     */
    public function __construct(string $roleId)
    {
        $this->roleId = $roleId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @return null|\JoliCode\Harvest\Api\Model\Role|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Role', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
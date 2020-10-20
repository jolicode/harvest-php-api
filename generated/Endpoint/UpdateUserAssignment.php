<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateUserAssignment extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $projectId;
    protected $userAssignmentId;
    /**
     * Updates the specific user assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $userAssignmentId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody $payload json payload
     */
    public function __construct(string $projectId, string $userAssignmentId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody $payload)
    {
        $this->projectId = $projectId;
        $this->userAssignmentId = $userAssignmentId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{projectId}', '{userAssignmentId}'), array($this->projectId, $this->userAssignmentId), '/projects/{projectId}/user_assignments/{userAssignmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
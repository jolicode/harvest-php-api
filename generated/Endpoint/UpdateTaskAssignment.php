<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateTaskAssignment extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $projectId;
    protected $taskAssignmentId;
    /**
     * Updates the specific task assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $payload json payload
     */
    public function __construct(string $projectId, string $taskAssignmentId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $payload)
    {
        $this->projectId = $projectId;
        $this->taskAssignmentId = $taskAssignmentId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{projectId}', '{taskAssignmentId}'), array($this->projectId, $this->taskAssignmentId), '/projects/{projectId}/task_assignments/{taskAssignmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
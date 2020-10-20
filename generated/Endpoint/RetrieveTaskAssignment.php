<?php

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveTaskAssignment extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $projectId;
    protected $taskAssignmentId;
    /**
     * Retrieves the task assignment with the given ID. Returns a task assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     */
    public function __construct(string $projectId, string $taskAssignmentId)
    {
        $this->projectId = $projectId;
        $this->taskAssignmentId = $taskAssignmentId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{projectId}', '{taskAssignmentId}'), array($this->projectId, $this->taskAssignmentId), '/projects/{projectId}/task_assignments/{taskAssignmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
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
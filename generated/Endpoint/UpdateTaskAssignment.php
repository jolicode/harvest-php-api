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
     * @param \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $requestBody 
     */
    public function __construct(string $projectId, string $taskAssignmentId, \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody $requestBody)
    {
        $this->projectId = $projectId;
        $this->taskAssignmentId = $taskAssignmentId;
        $this->body = $requestBody;
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
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
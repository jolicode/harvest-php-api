<?php

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveTimeEntry extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $timeEntryId;
    /**
     * Retrieves the time entry with the given ID. Returns a time entry object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $timeEntryId 
     */
    public function __construct(string $timeEntryId)
    {
        $this->timeEntryId = $timeEntryId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{timeEntryId}'), array($this->timeEntryId), '/time_entries/{timeEntryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\TimeEntry|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TimeEntry', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
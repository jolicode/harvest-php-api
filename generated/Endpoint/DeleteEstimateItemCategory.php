<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteEstimateItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $estimateItemCategoryId;
    /**
     * Delete an estimate item category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $estimateItemCategoryId 
     */
    public function __construct(string $estimateItemCategoryId)
    {
        $this->estimateItemCategoryId = $estimateItemCategoryId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{estimateItemCategoryId}'), array($this->estimateItemCategoryId), '/estimate_item_categories/{estimateItemCategoryId}');
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
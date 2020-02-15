<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateEstimateItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $estimateItemCategoryId;
    /**
     * Updates the specific estimate item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an estimate item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $estimateItemCategoryId 
     * @param \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody $payload json payload
     */
    public function __construct(string $estimateItemCategoryId, \JoliCode\Harvest\Api\Model\EstimateItemCategoriesEstimateItemCategoryIdPatchBody $payload)
    {
        $this->estimateItemCategoryId = $estimateItemCategoryId;
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{estimateItemCategoryId}'), array($this->estimateItemCategoryId), '/estimate_item_categories/{estimateItemCategoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\EstimateItemCategory|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategory', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
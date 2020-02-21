<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateEstimateItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Creates a new estimate item category object. Returns an estimate item category object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody $payload json payload
     */
    public function __construct(\JoliCode\Harvest\Api\Model\EstimateItemCategoriesPostBody $payload)
    {
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/estimate_item_categories';
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
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategory', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
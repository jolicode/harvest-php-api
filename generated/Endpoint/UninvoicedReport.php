<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UninvoicedReport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * The response contains an object with a results property that contains an array of up to per_page results. Each entry in the array is a separate result object. If no more results are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your results.
    
    Note: Each request requires both the from and to parameters to be supplied in the URL’s query string. The timeframe supplied cannot exceed 1 year (365 days).
    *
    * @param \JoliCode\Harvest\Api\Model\ReportsUninvoicedGetBody $payload json payload
    */
    public function __construct(\JoliCode\Harvest\Api\Model\ReportsUninvoicedGetBody $payload)
    {
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/reports/uninvoiced';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
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
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class MarkOpenInvoiceAsDraft extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $invoiceId;
    /**
     * Creates a new invoice message object and marks an open invoice as a draft. Returns an invoice message object and a 201 Created response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload json payload
     */
    public function __construct(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/invoices/{invoiceId}/messages');
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
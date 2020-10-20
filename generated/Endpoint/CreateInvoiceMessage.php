<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateInvoiceMessage extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $invoiceId;
    /**
     * Creates a new invoice message object. Returns an invoice message object and a 201 Created response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload json payload
     */
    public function __construct(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody $payload)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
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
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceMessage|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateInvoice extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $invoiceId;
    /**
     * Updates the specific invoice by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice object and a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody $payload json payload
     */
    public function __construct(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody $payload)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/invoices/{invoiceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Invoice|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Invoice', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
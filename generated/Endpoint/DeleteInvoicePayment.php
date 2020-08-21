<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteInvoicePayment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $invoiceId;
    protected $paymentId;
    /**
     * Delete an invoice payment. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param string $paymentId 
     */
    public function __construct(string $invoiceId, string $paymentId)
    {
        $this->invoiceId = $invoiceId;
        $this->paymentId = $paymentId;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}', '{paymentId}'), array($this->invoiceId, $this->paymentId), '/invoices/{invoiceId}/payments/{paymentId}');
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
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
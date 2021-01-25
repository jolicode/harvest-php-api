<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateInvoicePayment extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $invoiceId;
    /**
     * Creates a new invoice payment object. Returns an invoice payment object and a 201 Created response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody $requestBody 
     */
    public function __construct(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody $requestBody)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $requestBody;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/invoices/{invoiceId}/payments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody) {
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
     * @return null|\JoliCode\Harvest\Api\Model\InvoicePayment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment', 'json');
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
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteInvoiceMessage extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $invoiceId;
    protected $messageId;
    /**
     * Delete an invoice message. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId 
     * @param string $messageId 
     */
    public function __construct(string $invoiceId, string $messageId)
    {
        $this->invoiceId = $invoiceId;
        $this->messageId = $messageId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}', '{messageId}'), array($this->invoiceId, $this->messageId), '/invoices/{invoiceId}/messages/{messageId}');
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
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
<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateInvoiceItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $invoiceItemCategoryId;
    /**
     * Updates the specific invoice item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceItemCategoryId 
     * @param \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $payload json payload
     */
    public function __construct(string $invoiceItemCategoryId, \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $payload)
    {
        $this->invoiceItemCategoryId = $invoiceItemCategoryId;
        $this->body = $payload;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceItemCategoryId}'), array($this->invoiceItemCategoryId), '/invoice_item_categories/{invoiceItemCategoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategory', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}
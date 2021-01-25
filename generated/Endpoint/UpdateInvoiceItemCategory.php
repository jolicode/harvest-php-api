<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateInvoiceItemCategory extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $invoiceItemCategoryId;
    /**
     * Updates the specific invoice item category by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns an invoice item category object and a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceItemCategoryId 
     * @param \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $requestBody 
     */
    public function __construct(string $invoiceItemCategoryId, \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody $requestBody)
    {
        $this->invoiceItemCategoryId = $invoiceItemCategoryId;
        $this->body = $requestBody;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody) {
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
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategory', 'json');
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
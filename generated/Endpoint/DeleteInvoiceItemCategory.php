<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteInvoiceItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $invoiceItemCategoryId;
    /**
     * Delete an invoice item category. Deleting an invoice item category is only possible if use_as_service and use_as_expense are both false. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceItemCategoryId 
     */
    public function __construct(string $invoiceItemCategoryId)
    {
        $this->invoiceItemCategoryId = $invoiceItemCategoryId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceItemCategoryId}'), array($this->invoiceItemCategoryId), '/invoice_item_categories/{invoiceItemCategoryId}');
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
}
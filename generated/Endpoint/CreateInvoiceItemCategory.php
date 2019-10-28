<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class CreateInvoiceItemCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Creates a new invoice item category object. Returns an invoice item category object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody $payload json payload
     */
    public function __construct(\JoliCode\Harvest\Api\Model\InvoiceItemCategoriesPostBody $payload)
    {
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/invoice_item_categories';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Harvest\Api\Model\InvoiceItemCategory|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategory', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}

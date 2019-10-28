<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class ListPaymentsForInvoice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $invoiceId;

    /**
     * Returns a list of payments associate with a given invoice. The payments are returned sorted by creation date, with the most recently created payments appearing first.

    The response contains an object with an invoice_payments property that contains an array of up to per_page payments. Each entry in the array is a separate payment object. If no more payments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your payments.
     *
     * @param string $invoiceId
     * @param array  $queryParameters {
     *
     *     @var string $updated_since only return invoice payments that have been updated since the given date and time
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
     * }
     */
    public function __construct(string $invoiceId, array $queryParameters = [])
    {
        $this->invoiceId = $invoiceId;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{invoiceId}'], [$this->invoiceId], '/invoices/{invoiceId}/payments');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['updated_since', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('updated_since', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Harvest\Api\Model\InvoicePayments|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoicePayments', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}

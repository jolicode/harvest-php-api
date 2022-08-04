<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class CreateInvoicePayment extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    protected $invoiceId;

    /**
     * Creates a new invoice payment object. Returns an invoice payment object and a 201 Created response code if the call succeeded.
     */
    public function __construct(string $invoiceId, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody $requestBody)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{invoiceId}'], [$this->invoiceId], '/invoices/{invoiceId}/payments');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Harvest\Api\Model\InvoicePayment|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
}

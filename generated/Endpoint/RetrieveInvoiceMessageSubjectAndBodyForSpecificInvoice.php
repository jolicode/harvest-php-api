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

class RetrieveInvoiceMessageSubjectAndBodyForSpecificInvoice extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    protected $invoiceId;

    /**
     * Returns the subject and body text as configured in Harvest of an invoice message for a specific invoice and a 200 OK response code if the call succeeded. Does not create the invoice message. If no parameters are passed, will return the subject and body of a general invoice message for the specific invoice.
     *
     * @param array $queryParameters {
     *
     *     @var bool $thank_you set to true to return the subject and body of a thank-you invoice message for the specific invoice
     *     @var bool $reminder Set to true to return the subject and body of a reminder invoice message for the specific invoice.
     * }
     */
    public function __construct(string $invoiceId, array $queryParameters = [])
    {
        $this->invoiceId = $invoiceId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{invoiceId}'], [$this->invoiceId], '/invoices/{invoiceId}/messages/new');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['thank_you', 'reminder']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('thank_you', ['bool']);
        $optionsResolver->setNormalizer('thank_you', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));
        $optionsResolver->setAllowedTypes('reminder', ['bool']);
        $optionsResolver->setNormalizer('reminder', \Closure::fromCallable([new \JoliCode\Harvest\BooleanCustomQueryResolver(), '__invoke']));

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Harvest\Api\Model\InvoiceMessageSubjectAndBody|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageSubjectAndBody', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
}

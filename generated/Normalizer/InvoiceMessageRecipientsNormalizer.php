<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InvoiceMessageRecipientsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoiceMessageRecipients();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('invoice_message_recipients', $data)) {
            $values = [];
            foreach ($data['invoice_message_recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \JoliCode\Harvest\Api\Model\InvoiceMessageRecipient::class, 'json', $context);
            }
            $object->setInvoiceMessageRecipients($values);
            unset($data['invoice_message_recipients']);
        }
        if (\array_key_exists('per_page', $data)) {
            $object->setPerPage($data['per_page']);
            unset($data['per_page']);
        }
        if (\array_key_exists('total_pages', $data)) {
            $object->setTotalPages($data['total_pages']);
            unset($data['total_pages']);
        }
        if (\array_key_exists('total_entries', $data)) {
            $object->setTotalEntries($data['total_entries']);
            unset($data['total_entries']);
        }
        if (\array_key_exists('next_page', $data) && null !== $data['next_page']) {
            $object->setNextPage($data['next_page']);
            unset($data['next_page']);
        } elseif (\array_key_exists('next_page', $data) && null === $data['next_page']) {
            $object->setNextPage(null);
        }
        if (\array_key_exists('previous_page', $data) && null !== $data['previous_page']) {
            $object->setPreviousPage($data['previous_page']);
            unset($data['previous_page']);
        } elseif (\array_key_exists('previous_page', $data) && null === $data['previous_page']) {
            $object->setPreviousPage(null);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
            unset($data['page']);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], \JoliCode\Harvest\Api\Model\PaginationLinks::class, 'json', $context));
            unset($data['links']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getInvoiceMessageRecipients() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['invoice_message_recipients'] = $values;
        $dataArray['per_page'] = $data->getPerPage();
        $dataArray['total_pages'] = $data->getTotalPages();
        $dataArray['total_entries'] = $data->getTotalEntries();
        $dataArray['next_page'] = $data->getNextPage();
        $dataArray['previous_page'] = $data->getPreviousPage();
        $dataArray['page'] = $data->getPage();
        $dataArray['links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\InvoiceMessageRecipients::class => false];
    }
}

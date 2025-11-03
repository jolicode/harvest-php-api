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

class InvoicesInvoiceIdPaymentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('send_thank_you', $data) && \is_int($data['send_thank_you'])) {
            $data['send_thank_you'] = (bool) $data['send_thank_you'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('paid_at', $data) && null !== $data['paid_at']) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['paid_at']));
            unset($data['paid_at']);
        } elseif (\array_key_exists('paid_at', $data) && null === $data['paid_at']) {
            $object->setPaidAt(null);
        }
        if (\array_key_exists('paid_date', $data) && null !== $data['paid_date']) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data['paid_date'])->setTime(0, 0, 0));
            unset($data['paid_date']);
        } elseif (\array_key_exists('paid_date', $data) && null === $data['paid_date']) {
            $object->setPaidDate(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('send_thank_you', $data) && null !== $data['send_thank_you']) {
            $object->setSendThankYou($data['send_thank_you']);
            unset($data['send_thank_you']);
        } elseif (\array_key_exists('send_thank_you', $data) && null === $data['send_thank_you']) {
            $object->setSendThankYou(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['amount'] = $data->getAmount();
        if ($data->isInitialized('paidAt') && null !== $data->getPaidAt()) {
            $dataArray['paid_at'] = $data->getPaidAt()->format('Y-m-d\TH:i:s\Z');
        }
        if ($data->isInitialized('paidDate') && null !== $data->getPaidDate()) {
            $dataArray['paid_date'] = $data->getPaidDate()->format('Y-m-d');
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('sendThankYou') && null !== $data->getSendThankYou()) {
            $dataArray['send_thank_you'] = $data->getSendThankYou();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody::class => false];
    }
}

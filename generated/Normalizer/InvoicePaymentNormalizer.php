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

class InvoicePaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment' === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicePayment();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('paid_at', $data) && null !== $data['paid_at']) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['paid_at']));
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
        if (\array_key_exists('recorded_by', $data) && null !== $data['recorded_by']) {
            $object->setRecordedBy($data['recorded_by']);
            unset($data['recorded_by']);
        } elseif (\array_key_exists('recorded_by', $data) && null === $data['recorded_by']) {
            $object->setRecordedBy(null);
        }
        if (\array_key_exists('recorded_by_email', $data) && null !== $data['recorded_by_email']) {
            $object->setRecordedByEmail($data['recorded_by_email']);
            unset($data['recorded_by_email']);
        } elseif (\array_key_exists('recorded_by_email', $data) && null === $data['recorded_by_email']) {
            $object->setRecordedByEmail(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('transaction_id', $data) && null !== $data['transaction_id']) {
            $object->setTransactionId($data['transaction_id']);
            unset($data['transaction_id']);
        } elseif (\array_key_exists('transaction_id', $data) && null === $data['transaction_id']) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('payment_gateway', $data) && null !== $data['payment_gateway']) {
            $object->setPaymentGateway($this->denormalizer->denormalize($data['payment_gateway'], 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway', 'json', $context));
            unset($data['payment_gateway']);
        } elseif (\array_key_exists('payment_gateway', $data) && null === $data['payment_gateway']) {
            $object->setPaymentGateway(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
            unset($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
            unset($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('paidAt') && null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('paidDate') && null !== $object->getPaidDate()) {
            $data['paid_date'] = $object->getPaidDate()->format('Y-m-d');
        }
        if ($object->isInitialized('recordedBy') && null !== $object->getRecordedBy()) {
            $data['recorded_by'] = $object->getRecordedBy();
        }
        if ($object->isInitialized('recordedByEmail') && null !== $object->getRecordedByEmail()) {
            $data['recorded_by_email'] = $object->getRecordedByEmail();
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if ($object->isInitialized('transactionId') && null !== $object->getTransactionId()) {
            $data['transaction_id'] = $object->getTransactionId();
        }
        if ($object->isInitialized('paymentGateway') && null !== $object->getPaymentGateway()) {
            $data['payment_gateway'] = $this->normalizer->normalize($object->getPaymentGateway(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\InvoicePayment' => false];
    }
}

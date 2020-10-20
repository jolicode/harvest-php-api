<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InvoicePaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicePayment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('paid_at', $data) && $data['paid_at'] !== null) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['paid_at']));
        }
        elseif (\array_key_exists('paid_at', $data) && $data['paid_at'] === null) {
            $object->setPaidAt(null);
        }
        if (\array_key_exists('paid_date', $data) && $data['paid_date'] !== null) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data['paid_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('paid_date', $data) && $data['paid_date'] === null) {
            $object->setPaidDate(null);
        }
        if (\array_key_exists('recorded_by', $data) && $data['recorded_by'] !== null) {
            $object->setRecordedBy($data['recorded_by']);
        }
        elseif (\array_key_exists('recorded_by', $data) && $data['recorded_by'] === null) {
            $object->setRecordedBy(null);
        }
        if (\array_key_exists('recorded_by_email', $data) && $data['recorded_by_email'] !== null) {
            $object->setRecordedByEmail($data['recorded_by_email']);
        }
        elseif (\array_key_exists('recorded_by_email', $data) && $data['recorded_by_email'] === null) {
            $object->setRecordedByEmail(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('transaction_id', $data) && $data['transaction_id'] !== null) {
            $object->setTransactionId($data['transaction_id']);
        }
        elseif (\array_key_exists('transaction_id', $data) && $data['transaction_id'] === null) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('payment_gateway', $data) && $data['payment_gateway'] !== null) {
            $object->setPaymentGateway($this->denormalizer->denormalize($data['payment_gateway'], 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway', 'json', $context));
        }
        elseif (\array_key_exists('payment_gateway', $data) && $data['payment_gateway'] === null) {
            $object->setPaymentGateway(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPaidDate()) {
            $data['paid_date'] = $object->getPaidDate()->format('Y-m-d');
        }
        if (null !== $object->getRecordedBy()) {
            $data['recorded_by'] = $object->getRecordedBy();
        }
        if (null !== $object->getRecordedByEmail()) {
            $data['recorded_by_email'] = $object->getRecordedByEmail();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getTransactionId()) {
            $data['transaction_id'] = $object->getTransactionId();
        }
        if (null !== $object->getPaymentGateway()) {
            $data['payment_gateway'] = $this->normalizer->normalize($object->getPaymentGateway(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}
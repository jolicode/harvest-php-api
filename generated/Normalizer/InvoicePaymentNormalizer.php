<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicePayment();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        elseif (property_exists($data, 'amount') && $data->{'amount'} === null) {
            $object->setAmount(null);
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'paid_at'}));
        }
        elseif (property_exists($data, 'paid_at') && $data->{'paid_at'} === null) {
            $object->setPaidAt(null);
        }
        if (property_exists($data, 'paid_date') && $data->{'paid_date'} !== null) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data->{'paid_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'paid_date') && $data->{'paid_date'} === null) {
            $object->setPaidDate(null);
        }
        if (property_exists($data, 'recorded_by') && $data->{'recorded_by'} !== null) {
            $object->setRecordedBy($data->{'recorded_by'});
        }
        elseif (property_exists($data, 'recorded_by') && $data->{'recorded_by'} === null) {
            $object->setRecordedBy(null);
        }
        if (property_exists($data, 'recorded_by_email') && $data->{'recorded_by_email'} !== null) {
            $object->setRecordedByEmail($data->{'recorded_by_email'});
        }
        elseif (property_exists($data, 'recorded_by_email') && $data->{'recorded_by_email'} === null) {
            $object->setRecordedByEmail(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'transaction_id') && $data->{'transaction_id'} !== null) {
            $object->setTransactionId($data->{'transaction_id'});
        }
        elseif (property_exists($data, 'transaction_id') && $data->{'transaction_id'} === null) {
            $object->setTransactionId(null);
        }
        if (property_exists($data, 'payment_gateway') && $data->{'payment_gateway'} !== null) {
            $object->setPaymentGateway($this->denormalizer->denormalize($data->{'payment_gateway'}, 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway', 'json', $context));
        }
        elseif (property_exists($data, 'payment_gateway') && $data->{'payment_gateway'} === null) {
            $object->setPaymentGateway(null);
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        elseif (property_exists($data, 'created_at') && $data->{'created_at'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }
        elseif (property_exists($data, 'updated_at') && $data->{'updated_at'} === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        else {
            $data->{'id'} = null;
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        else {
            $data->{'amount'} = null;
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'paid_at'} = null;
        }
        if (null !== $object->getPaidDate()) {
            $data->{'paid_date'} = $object->getPaidDate()->format('Y-m-d');
        }
        else {
            $data->{'paid_date'} = null;
        }
        if (null !== $object->getRecordedBy()) {
            $data->{'recorded_by'} = $object->getRecordedBy();
        }
        else {
            $data->{'recorded_by'} = null;
        }
        if (null !== $object->getRecordedByEmail()) {
            $data->{'recorded_by_email'} = $object->getRecordedByEmail();
        }
        else {
            $data->{'recorded_by_email'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transaction_id'} = $object->getTransactionId();
        }
        else {
            $data->{'transaction_id'} = null;
        }
        if (null !== $object->getPaymentGateway()) {
            $data->{'payment_gateway'} = $this->normalizer->normalize($object->getPaymentGateway(), 'json', $context);
        }
        else {
            $data->{'payment_gateway'} = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'created_at'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'updated_at'} = null;
        }
        return $data;
    }
}
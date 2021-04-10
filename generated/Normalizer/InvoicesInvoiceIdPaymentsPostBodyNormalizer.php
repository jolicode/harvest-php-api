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
class InvoicesInvoiceIdPaymentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPaymentsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPaymentsPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('paid_at', $data) && $data['paid_at'] !== null) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['paid_at']));
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
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['amount'] = $object->getAmount();
        if (null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getPaidDate()) {
            $data['paid_date'] = $object->getPaidDate()->format('Y-m-d');
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        return $data;
    }
}
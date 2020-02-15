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
class InvoicesInvoiceIdPaymentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPaymentsPostBody();
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
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
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
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        return $data;
    }
}
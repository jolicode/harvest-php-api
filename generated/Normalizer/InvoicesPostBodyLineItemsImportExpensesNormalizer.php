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
class InvoicesPostBodyLineItemsImportExpensesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('summary_type', $data) && $data['summary_type'] !== null) {
            $object->setSummaryType($data['summary_type']);
        }
        elseif (\array_key_exists('summary_type', $data) && $data['summary_type'] === null) {
            $object->setSummaryType(null);
        }
        if (\array_key_exists('from', $data) && $data['from'] !== null) {
            $object->setFrom(\DateTime::createFromFormat('Y-m-d', $data['from'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('from', $data) && $data['from'] === null) {
            $object->setFrom(null);
        }
        if (\array_key_exists('to', $data) && $data['to'] !== null) {
            $object->setTo(\DateTime::createFromFormat('Y-m-d', $data['to'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('to', $data) && $data['to'] === null) {
            $object->setTo(null);
        }
        if (\array_key_exists('attach_receipt', $data) && $data['attach_receipt'] !== null) {
            $object->setAttachReceipt($data['attach_receipt']);
        }
        elseif (\array_key_exists('attach_receipt', $data) && $data['attach_receipt'] === null) {
            $object->setAttachReceipt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['summary_type'] = $object->getSummaryType();
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom()->format('Y-m-d');
        }
        if (null !== $object->getTo()) {
            $data['to'] = $object->getTo()->format('Y-m-d');
        }
        if (null !== $object->getAttachReceipt()) {
            $data['attach_receipt'] = $object->getAttachReceipt();
        }
        return $data;
    }
}
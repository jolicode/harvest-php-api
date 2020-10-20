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
class ExpenseReceiptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ExpenseReceipt();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('URL', $data) && $data['URL'] !== null) {
            $object->setURL($data['URL']);
        }
        elseif (\array_key_exists('URL', $data) && $data['URL'] === null) {
            $object->setURL(null);
        }
        if (\array_key_exists('file_name', $data) && $data['file_name'] !== null) {
            $object->setFileName($data['file_name']);
        }
        elseif (\array_key_exists('file_name', $data) && $data['file_name'] === null) {
            $object->setFileName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getURL()) {
            $data['URL'] = $object->getURL();
        }
        if (null !== $object->getFileName()) {
            $data['file_name'] = $object->getFileName();
        }
        return $data;
    }
}
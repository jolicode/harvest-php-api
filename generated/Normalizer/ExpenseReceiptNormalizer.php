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
class ExpenseReceiptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ExpenseReceipt();
        if (property_exists($data, 'URL') && $data->{'URL'} !== null) {
            $object->setURL($data->{'URL'});
        }
        elseif (property_exists($data, 'URL') && $data->{'URL'} === null) {
            $object->setURL(null);
        }
        if (property_exists($data, 'file_name') && $data->{'file_name'} !== null) {
            $object->setFileName($data->{'file_name'});
        }
        elseif (property_exists($data, 'file_name') && $data->{'file_name'} === null) {
            $object->setFileName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getURL()) {
            $data->{'URL'} = $object->getURL();
        }
        else {
            $data->{'URL'} = null;
        }
        if (null !== $object->getFileName()) {
            $data->{'file_name'} = $object->getFileName();
        }
        else {
            $data->{'file_name'} = null;
        }
        return $data;
    }
}
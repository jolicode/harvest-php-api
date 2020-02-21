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
class ExpenseCategoriesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ExpenseCategoriesPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ExpenseCategoriesPostBody();
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'unit_name') && $data->{'unit_name'} !== null) {
            $object->setUnitName($data->{'unit_name'});
        }
        elseif (property_exists($data, 'unit_name') && $data->{'unit_name'} === null) {
            $object->setUnitName(null);
        }
        if (property_exists($data, 'unit_price') && $data->{'unit_price'} !== null) {
            $object->setUnitPrice($data->{'unit_price'});
        }
        elseif (property_exists($data, 'unit_price') && $data->{'unit_price'} === null) {
            $object->setUnitPrice(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getUnitName()) {
            $data->{'unit_name'} = $object->getUnitName();
        }
        else {
            $data->{'unit_name'} = null;
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unit_price'} = $object->getUnitPrice();
        }
        else {
            $data->{'unit_price'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        return $data;
    }
}
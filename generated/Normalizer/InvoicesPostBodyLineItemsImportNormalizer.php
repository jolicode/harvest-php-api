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
class InvoicesPostBodyLineItemsImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport';
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
        $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport();
        if (property_exists($data, 'project_ids') && $data->{'project_ids'} !== null) {
            $values = array();
            foreach ($data->{'project_ids'} as $value) {
                $values[] = $value;
            }
            $object->setProjectIds($values);
        }
        elseif (property_exists($data, 'project_ids') && $data->{'project_ids'} === null) {
            $object->setProjectIds(null);
        }
        if (property_exists($data, 'time') && $data->{'time'} !== null) {
            $object->setTime($this->denormalizer->denormalize($data->{'time'}, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime', 'json', $context));
        }
        elseif (property_exists($data, 'time') && $data->{'time'} === null) {
            $object->setTime(null);
        }
        if (property_exists($data, 'expenses') && $data->{'expenses'} !== null) {
            $object->setExpenses($this->denormalizer->denormalize($data->{'expenses'}, 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses', 'json', $context));
        }
        elseif (property_exists($data, 'expenses') && $data->{'expenses'} === null) {
            $object->setExpenses(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getProjectIds()) {
            $values = array();
            foreach ($object->getProjectIds() as $value) {
                $values[] = $value;
            }
            $data->{'project_ids'} = $values;
        }
        else {
            $data->{'project_ids'} = null;
        }
        if (null !== $object->getTime()) {
            $data->{'time'} = $this->normalizer->normalize($object->getTime(), 'json', $context);
        }
        else {
            $data->{'time'} = null;
        }
        if (null !== $object->getExpenses()) {
            $data->{'expenses'} = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
        }
        else {
            $data->{'expenses'} = null;
        }
        return $data;
    }
}
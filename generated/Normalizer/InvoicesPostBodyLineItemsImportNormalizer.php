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
class InvoicesPostBodyLineItemsImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_ids', $data) && $data['project_ids'] !== null) {
            $values = array();
            foreach ($data['project_ids'] as $value) {
                $values[] = $value;
            }
            $object->setProjectIds($values);
        }
        elseif (\array_key_exists('project_ids', $data) && $data['project_ids'] === null) {
            $object->setProjectIds(null);
        }
        if (\array_key_exists('time', $data) && $data['time'] !== null) {
            $object->setTime($this->denormalizer->denormalize($data['time'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime', 'json', $context));
        }
        elseif (\array_key_exists('time', $data) && $data['time'] === null) {
            $object->setTime(null);
        }
        if (\array_key_exists('expenses', $data) && $data['expenses'] !== null) {
            $object->setExpenses($this->denormalizer->denormalize($data['expenses'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses', 'json', $context));
        }
        elseif (\array_key_exists('expenses', $data) && $data['expenses'] === null) {
            $object->setExpenses(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getProjectIds() as $value) {
            $values[] = $value;
        }
        $data['project_ids'] = $values;
        if (null !== $object->getTime()) {
            $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
        }
        if (null !== $object->getExpenses()) {
            $data['expenses'] = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
        }
        return $data;
    }
}
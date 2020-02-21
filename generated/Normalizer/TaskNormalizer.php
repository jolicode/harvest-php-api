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
class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Task';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Task';
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
        $object = new \JoliCode\Harvest\Api\Model\Task();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'billable_by_default') && $data->{'billable_by_default'} !== null) {
            $object->setBillableByDefault($data->{'billable_by_default'});
        }
        elseif (property_exists($data, 'billable_by_default') && $data->{'billable_by_default'} === null) {
            $object->setBillableByDefault(null);
        }
        if (property_exists($data, 'default_hourly_rate') && $data->{'default_hourly_rate'} !== null) {
            $object->setDefaultHourlyRate($data->{'default_hourly_rate'});
        }
        elseif (property_exists($data, 'default_hourly_rate') && $data->{'default_hourly_rate'} === null) {
            $object->setDefaultHourlyRate(null);
        }
        if (property_exists($data, 'is_default') && $data->{'is_default'} !== null) {
            $object->setIsDefault($data->{'is_default'});
        }
        elseif (property_exists($data, 'is_default') && $data->{'is_default'} === null) {
            $object->setIsDefault(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
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
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getBillableByDefault()) {
            $data->{'billable_by_default'} = $object->getBillableByDefault();
        }
        else {
            $data->{'billable_by_default'} = null;
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data->{'default_hourly_rate'} = $object->getDefaultHourlyRate();
        }
        else {
            $data->{'default_hourly_rate'} = null;
        }
        if (null !== $object->getIsDefault()) {
            $data->{'is_default'} = $object->getIsDefault();
        }
        else {
            $data->{'is_default'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
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
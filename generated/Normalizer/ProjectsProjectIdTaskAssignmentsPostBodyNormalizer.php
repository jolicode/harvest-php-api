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
class ProjectsProjectIdTaskAssignmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ProjectsProjectIdTaskAssignmentsPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody();
        if (property_exists($data, 'task_id') && $data->{'task_id'} !== null) {
            $object->setTaskId($data->{'task_id'});
        }
        elseif (property_exists($data, 'task_id') && $data->{'task_id'} === null) {
            $object->setTaskId(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        }
        elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
        }
        if (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} !== null) {
            $object->setHourlyRate($data->{'hourly_rate'});
        }
        elseif (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'budget') && $data->{'budget'} !== null) {
            $object->setBudget($data->{'budget'});
        }
        elseif (property_exists($data, 'budget') && $data->{'budget'} === null) {
            $object->setBudget(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTaskId()) {
            $data->{'task_id'} = $object->getTaskId();
        }
        else {
            $data->{'task_id'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        }
        else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourly_rate'} = $object->getHourlyRate();
        }
        else {
            $data->{'hourly_rate'} = null;
        }
        if (null !== $object->getBudget()) {
            $data->{'budget'} = $object->getBudget();
        }
        else {
            $data->{'budget'} = null;
        }
        return $data;
    }
}
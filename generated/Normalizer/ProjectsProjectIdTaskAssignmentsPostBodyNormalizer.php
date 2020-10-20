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
class ProjectsProjectIdTaskAssignmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsProjectIdTaskAssignmentsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('task_id', $data) && $data['task_id'] !== null) {
            $object->setTaskId($data['task_id']);
        }
        elseif (\array_key_exists('task_id', $data) && $data['task_id'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        }
        elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('hourly_rate', $data) && $data['hourly_rate'] !== null) {
            $object->setHourlyRate($data['hourly_rate']);
        }
        elseif (\array_key_exists('hourly_rate', $data) && $data['hourly_rate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('budget', $data) && $data['budget'] !== null) {
            $object->setBudget($data['budget']);
        }
        elseif (\array_key_exists('budget', $data) && $data['budget'] === null) {
            $object->setBudget(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['task_id'] = $object->getTaskId();
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourly_rate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        return $data;
    }
}
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
class TimeEntriesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntriesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('task_id', $data) && $data['task_id'] !== null) {
            $object->setTaskId($data['task_id']);
        }
        elseif (\array_key_exists('task_id', $data) && $data['task_id'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('spent_date', $data) && $data['spent_date'] !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('spent_date', $data) && $data['spent_date'] === null) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('started_time', $data) && $data['started_time'] !== null) {
            $object->setStartedTime($data['started_time']);
        }
        elseif (\array_key_exists('started_time', $data) && $data['started_time'] === null) {
            $object->setStartedTime(null);
        }
        if (\array_key_exists('ended_time', $data) && $data['ended_time'] !== null) {
            $object->setEndedTime($data['ended_time']);
        }
        elseif (\array_key_exists('ended_time', $data) && $data['ended_time'] === null) {
            $object->setEndedTime(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('external_reference', $data) && $data['external_reference'] !== null) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBodyExternalReference', 'json', $context));
        }
        elseif (\array_key_exists('external_reference', $data) && $data['external_reference'] === null) {
            $object->setExternalReference(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        }
        elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        $data['project_id'] = $object->getProjectId();
        $data['task_id'] = $object->getTaskId();
        $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        if (null !== $object->getStartedTime()) {
            $data['started_time'] = $object->getStartedTime();
        }
        if (null !== $object->getEndedTime()) {
            $data['ended_time'] = $object->getEndedTime();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getExternalReference()) {
            $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        return $data;
    }
}
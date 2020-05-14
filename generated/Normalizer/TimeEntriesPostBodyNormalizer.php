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
class TimeEntriesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntriesPostBody();
        if (property_exists($data, 'user_id') && $data->{'user_id'} !== null) {
            $object->setUserId($data->{'user_id'});
        }
        elseif (property_exists($data, 'user_id') && $data->{'user_id'} === null) {
            $object->setUserId(null);
        }
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        elseif (property_exists($data, 'project_id') && $data->{'project_id'} === null) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'task_id') && $data->{'task_id'} !== null) {
            $object->setTaskId($data->{'task_id'});
        }
        elseif (property_exists($data, 'task_id') && $data->{'task_id'} === null) {
            $object->setTaskId(null);
        }
        if (property_exists($data, 'spent_date') && $data->{'spent_date'} !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data->{'spent_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'spent_date') && $data->{'spent_date'} === null) {
            $object->setSpentDate(null);
        }
        if (property_exists($data, 'started_time') && $data->{'started_time'} !== null) {
            $object->setStartedTime($data->{'started_time'});
        }
        elseif (property_exists($data, 'started_time') && $data->{'started_time'} === null) {
            $object->setStartedTime(null);
        }
        if (property_exists($data, 'ended_time') && $data->{'ended_time'} !== null) {
            $object->setEndedTime($data->{'ended_time'});
        }
        elseif (property_exists($data, 'ended_time') && $data->{'ended_time'} === null) {
            $object->setEndedTime(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'external_reference') && $data->{'external_reference'} !== null) {
            $object->setExternalReference($this->denormalizer->denormalize($data->{'external_reference'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBodyExternalReference', 'json', $context));
        }
        elseif (property_exists($data, 'external_reference') && $data->{'external_reference'} === null) {
            $object->setExternalReference(null);
        }
        if (property_exists($data, 'hours') && $data->{'hours'} !== null) {
            $object->setHours($data->{'hours'});
        }
        elseif (property_exists($data, 'hours') && $data->{'hours'} === null) {
            $object->setHours(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        }
        else {
            $data->{'user_id'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        else {
            $data->{'project_id'} = null;
        }
        if (null !== $object->getTaskId()) {
            $data->{'task_id'} = $object->getTaskId();
        }
        else {
            $data->{'task_id'} = null;
        }
        if (null !== $object->getSpentDate()) {
            $data->{'spent_date'} = $object->getSpentDate()->format('Y-m-d');
        }
        else {
            $data->{'spent_date'} = null;
        }
        if (null !== $object->getStartedTime()) {
            $data->{'started_time'} = $object->getStartedTime();
        }
        else {
            $data->{'started_time'} = null;
        }
        if (null !== $object->getEndedTime()) {
            $data->{'ended_time'} = $object->getEndedTime();
        }
        else {
            $data->{'ended_time'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getExternalReference()) {
            $data->{'external_reference'} = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        else {
            $data->{'external_reference'} = null;
        }
        if (null !== $object->getHours()) {
            $data->{'hours'} = $object->getHours();
        }
        else {
            $data->{'hours'} = null;
        }
        return $data;
    }
}
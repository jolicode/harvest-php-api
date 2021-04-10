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
class TimeEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\TimeEntry';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\TimeEntry';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('spent_date', $data) && $data['spent_date'] !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('spent_date', $data) && $data['spent_date'] === null) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_assignment', $data)) {
            $object->setUserAssignment($this->denormalizer->denormalize($data['user_assignment'], 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json', $context));
        }
        if (\array_key_exists('client', $data) && $data['client'] !== null) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryClient', 'json', $context));
        }
        elseif (\array_key_exists('client', $data) && $data['client'] === null) {
            $object->setClient(null);
        }
        if (\array_key_exists('project', $data) && $data['project'] !== null) {
            $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryProject', 'json', $context));
        }
        elseif (\array_key_exists('project', $data) && $data['project'] === null) {
            $object->setProject(null);
        }
        if (\array_key_exists('task', $data) && $data['task'] !== null) {
            $object->setTask($this->denormalizer->denormalize($data['task'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryTask', 'json', $context));
        }
        elseif (\array_key_exists('task', $data) && $data['task'] === null) {
            $object->setTask(null);
        }
        if (\array_key_exists('task_assignment', $data)) {
            $object->setTaskAssignment($this->denormalizer->denormalize($data['task_assignment'], 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment', 'json', $context));
        }
        if (\array_key_exists('external_reference', $data) && $data['external_reference'] !== null) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference', 'json', $context));
        }
        elseif (\array_key_exists('external_reference', $data) && $data['external_reference'] === null) {
            $object->setExternalReference(null);
        }
        if (\array_key_exists('invoice', $data) && $data['invoice'] !== null) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntryInvoice', 'json', $context));
        }
        elseif (\array_key_exists('invoice', $data) && $data['invoice'] === null) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        }
        elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
        }
        if (\array_key_exists('rounded_hours', $data) && $data['rounded_hours'] !== null) {
            $object->setRoundedHours($data['rounded_hours']);
        }
        elseif (\array_key_exists('rounded_hours', $data) && $data['rounded_hours'] === null) {
            $object->setRoundedHours(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('is_locked', $data) && $data['is_locked'] !== null) {
            $object->setIsLocked($data['is_locked']);
        }
        elseif (\array_key_exists('is_locked', $data) && $data['is_locked'] === null) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('locked_reason', $data) && $data['locked_reason'] !== null) {
            $object->setLockedReason($data['locked_reason']);
        }
        elseif (\array_key_exists('locked_reason', $data) && $data['locked_reason'] === null) {
            $object->setLockedReason(null);
        }
        if (\array_key_exists('is_closed', $data) && $data['is_closed'] !== null) {
            $object->setIsClosed($data['is_closed']);
        }
        elseif (\array_key_exists('is_closed', $data) && $data['is_closed'] === null) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('is_billed', $data) && $data['is_billed'] !== null) {
            $object->setIsBilled($data['is_billed']);
        }
        elseif (\array_key_exists('is_billed', $data) && $data['is_billed'] === null) {
            $object->setIsBilled(null);
        }
        if (\array_key_exists('timer_started_at', $data) && $data['timer_started_at'] !== null) {
            $object->setTimerStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['timer_started_at']));
        }
        elseif (\array_key_exists('timer_started_at', $data) && $data['timer_started_at'] === null) {
            $object->setTimerStartedAt(null);
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
        if (\array_key_exists('is_running', $data) && $data['is_running'] !== null) {
            $object->setIsRunning($data['is_running']);
        }
        elseif (\array_key_exists('is_running', $data) && $data['is_running'] === null) {
            $object->setIsRunning(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        }
        elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('budgeted', $data) && $data['budgeted'] !== null) {
            $object->setBudgeted($data['budgeted']);
        }
        elseif (\array_key_exists('budgeted', $data) && $data['budgeted'] === null) {
            $object->setBudgeted(null);
        }
        if (\array_key_exists('billable_rate', $data) && $data['billable_rate'] !== null) {
            $object->setBillableRate($data['billable_rate']);
        }
        elseif (\array_key_exists('billable_rate', $data) && $data['billable_rate'] === null) {
            $object->setBillableRate(null);
        }
        if (\array_key_exists('cost_rate', $data) && $data['cost_rate'] !== null) {
            $object->setCostRate($data['cost_rate']);
        }
        elseif (\array_key_exists('cost_rate', $data) && $data['cost_rate'] === null) {
            $object->setCostRate(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getSpentDate()) {
            $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getUserAssignment()) {
            $data['user_assignment'] = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if (null !== $object->getTask()) {
            $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
        }
        if (null !== $object->getTaskAssignment()) {
            $data['task_assignment'] = $this->normalizer->normalize($object->getTaskAssignment(), 'json', $context);
        }
        if (null !== $object->getExternalReference()) {
            $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        if (null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getRoundedHours()) {
            $data['rounded_hours'] = $object->getRoundedHours();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if (null !== $object->getLockedReason()) {
            $data['locked_reason'] = $object->getLockedReason();
        }
        if (null !== $object->getIsClosed()) {
            $data['is_closed'] = $object->getIsClosed();
        }
        if (null !== $object->getIsBilled()) {
            $data['is_billed'] = $object->getIsBilled();
        }
        if (null !== $object->getTimerStartedAt()) {
            $data['timer_started_at'] = $object->getTimerStartedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getStartedTime()) {
            $data['started_time'] = $object->getStartedTime();
        }
        if (null !== $object->getEndedTime()) {
            $data['ended_time'] = $object->getEndedTime();
        }
        if (null !== $object->getIsRunning()) {
            $data['is_running'] = $object->getIsRunning();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getBudgeted()) {
            $data['budgeted'] = $object->getBudgeted();
        }
        if (null !== $object->getBillableRate()) {
            $data['billable_rate'] = $object->getBillableRate();
        }
        if (null !== $object->getCostRate()) {
            $data['cost_rate'] = $object->getCostRate();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        return $data;
    }
}
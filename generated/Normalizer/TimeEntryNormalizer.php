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
class TimeEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntry();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'spent_date') && $data->{'spent_date'} !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data->{'spent_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'spent_date') && $data->{'spent_date'} === null) {
            $object->setSpentDate(null);
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($this->denormalizer->denormalize($data->{'user'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryUser', 'json', $context));
        }
        elseif (property_exists($data, 'user') && $data->{'user'} === null) {
            $object->setUser(null);
        }
        if (property_exists($data, 'user_assignment') && $data->{'user_assignment'} !== null) {
            $object->setUserAssignment($this->denormalizer->denormalize($data->{'user_assignment'}, 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json', $context));
        }
        elseif (property_exists($data, 'user_assignment') && $data->{'user_assignment'} === null) {
            $object->setUserAssignment(null);
        }
        if (property_exists($data, 'client') && $data->{'client'} !== null) {
            $object->setClient($this->denormalizer->denormalize($data->{'client'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryClient', 'json', $context));
        }
        elseif (property_exists($data, 'client') && $data->{'client'} === null) {
            $object->setClient(null);
        }
        if (property_exists($data, 'project') && $data->{'project'} !== null) {
            $object->setProject($this->denormalizer->denormalize($data->{'project'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryProject', 'json', $context));
        }
        elseif (property_exists($data, 'project') && $data->{'project'} === null) {
            $object->setProject(null);
        }
        if (property_exists($data, 'task') && $data->{'task'} !== null) {
            $object->setTask($this->denormalizer->denormalize($data->{'task'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryTask', 'json', $context));
        }
        elseif (property_exists($data, 'task') && $data->{'task'} === null) {
            $object->setTask(null);
        }
        if (property_exists($data, 'task_assignment') && $data->{'task_assignment'} !== null) {
            $object->setTaskAssignment($this->denormalizer->denormalize($data->{'task_assignment'}, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment', 'json', $context));
        }
        elseif (property_exists($data, 'task_assignment') && $data->{'task_assignment'} === null) {
            $object->setTaskAssignment(null);
        }
        if (property_exists($data, 'external_reference') && $data->{'external_reference'} !== null) {
            $object->setExternalReference($this->denormalizer->denormalize($data->{'external_reference'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference', 'json', $context));
        }
        elseif (property_exists($data, 'external_reference') && $data->{'external_reference'} === null) {
            $object->setExternalReference(null);
        }
        if (property_exists($data, 'invoice') && $data->{'invoice'} !== null) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'invoice'}, 'JoliCode\\Harvest\\Api\\Model\\TimeEntryInvoice', 'json', $context));
        }
        elseif (property_exists($data, 'invoice') && $data->{'invoice'} === null) {
            $object->setInvoice(null);
        }
        if (property_exists($data, 'hours') && $data->{'hours'} !== null) {
            $object->setHours($data->{'hours'});
        }
        elseif (property_exists($data, 'hours') && $data->{'hours'} === null) {
            $object->setHours(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'is_locked') && $data->{'is_locked'} !== null) {
            $object->setIsLocked($data->{'is_locked'});
        }
        elseif (property_exists($data, 'is_locked') && $data->{'is_locked'} === null) {
            $object->setIsLocked(null);
        }
        if (property_exists($data, 'locked_reason') && $data->{'locked_reason'} !== null) {
            $object->setLockedReason($data->{'locked_reason'});
        }
        elseif (property_exists($data, 'locked_reason') && $data->{'locked_reason'} === null) {
            $object->setLockedReason(null);
        }
        if (property_exists($data, 'is_closed') && $data->{'is_closed'} !== null) {
            $object->setIsClosed($data->{'is_closed'});
        }
        elseif (property_exists($data, 'is_closed') && $data->{'is_closed'} === null) {
            $object->setIsClosed(null);
        }
        if (property_exists($data, 'is_billed') && $data->{'is_billed'} !== null) {
            $object->setIsBilled($data->{'is_billed'});
        }
        elseif (property_exists($data, 'is_billed') && $data->{'is_billed'} === null) {
            $object->setIsBilled(null);
        }
        if (property_exists($data, 'timer_started_at') && $data->{'timer_started_at'} !== null) {
            $object->setTimerStartedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'timer_started_at'}));
        }
        elseif (property_exists($data, 'timer_started_at') && $data->{'timer_started_at'} === null) {
            $object->setTimerStartedAt(null);
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
        if (property_exists($data, 'is_running') && $data->{'is_running'} !== null) {
            $object->setIsRunning($data->{'is_running'});
        }
        elseif (property_exists($data, 'is_running') && $data->{'is_running'} === null) {
            $object->setIsRunning(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        }
        elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
        }
        if (property_exists($data, 'budgeted') && $data->{'budgeted'} !== null) {
            $object->setBudgeted($data->{'budgeted'});
        }
        elseif (property_exists($data, 'budgeted') && $data->{'budgeted'} === null) {
            $object->setBudgeted(null);
        }
        if (property_exists($data, 'billable_rate') && $data->{'billable_rate'} !== null) {
            $object->setBillableRate($data->{'billable_rate'});
        }
        elseif (property_exists($data, 'billable_rate') && $data->{'billable_rate'} === null) {
            $object->setBillableRate(null);
        }
        if (property_exists($data, 'cost_rate') && $data->{'cost_rate'} !== null) {
            $object->setCostRate($data->{'cost_rate'});
        }
        elseif (property_exists($data, 'cost_rate') && $data->{'cost_rate'} === null) {
            $object->setCostRate(null);
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
        if (null !== $object->getSpentDate()) {
            $data->{'spent_date'} = $object->getSpentDate()->format('Y-m-d');
        }
        else {
            $data->{'spent_date'} = null;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        else {
            $data->{'user'} = null;
        }
        if (null !== $object->getUserAssignment()) {
            $data->{'user_assignment'} = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
        }
        else {
            $data->{'user_assignment'} = null;
        }
        if (null !== $object->getClient()) {
            $data->{'client'} = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        else {
            $data->{'client'} = null;
        }
        if (null !== $object->getProject()) {
            $data->{'project'} = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        else {
            $data->{'project'} = null;
        }
        if (null !== $object->getTask()) {
            $data->{'task'} = $this->normalizer->normalize($object->getTask(), 'json', $context);
        }
        else {
            $data->{'task'} = null;
        }
        if (null !== $object->getTaskAssignment()) {
            $data->{'task_assignment'} = $this->normalizer->normalize($object->getTaskAssignment(), 'json', $context);
        }
        else {
            $data->{'task_assignment'} = null;
        }
        if (null !== $object->getExternalReference()) {
            $data->{'external_reference'} = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        else {
            $data->{'external_reference'} = null;
        }
        if (null !== $object->getInvoice()) {
            $data->{'invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        else {
            $data->{'invoice'} = null;
        }
        if (null !== $object->getHours()) {
            $data->{'hours'} = $object->getHours();
        }
        else {
            $data->{'hours'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getIsLocked()) {
            $data->{'is_locked'} = $object->getIsLocked();
        }
        else {
            $data->{'is_locked'} = null;
        }
        if (null !== $object->getLockedReason()) {
            $data->{'locked_reason'} = $object->getLockedReason();
        }
        else {
            $data->{'locked_reason'} = null;
        }
        if (null !== $object->getIsClosed()) {
            $data->{'is_closed'} = $object->getIsClosed();
        }
        else {
            $data->{'is_closed'} = null;
        }
        if (null !== $object->getIsBilled()) {
            $data->{'is_billed'} = $object->getIsBilled();
        }
        else {
            $data->{'is_billed'} = null;
        }
        if (null !== $object->getTimerStartedAt()) {
            $data->{'timer_started_at'} = $object->getTimerStartedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'timer_started_at'} = null;
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
        if (null !== $object->getIsRunning()) {
            $data->{'is_running'} = $object->getIsRunning();
        }
        else {
            $data->{'is_running'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        }
        else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getBudgeted()) {
            $data->{'budgeted'} = $object->getBudgeted();
        }
        else {
            $data->{'budgeted'} = null;
        }
        if (null !== $object->getBillableRate()) {
            $data->{'billable_rate'} = $object->getBillableRate();
        }
        else {
            $data->{'billable_rate'} = null;
        }
        if (null !== $object->getCostRate()) {
            $data->{'cost_rate'} = $object->getCostRate();
        }
        else {
            $data->{'cost_rate'} = null;
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
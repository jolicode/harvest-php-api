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
class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Expense';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Expense';
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
        $object = new \JoliCode\Harvest\Api\Model\Expense();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'client') && $data->{'client'} !== null) {
            $object->setClient($this->denormalizer->denormalize($data->{'client'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseClient', 'json', $context));
        }
        elseif (property_exists($data, 'client') && $data->{'client'} === null) {
            $object->setClient(null);
        }
        if (property_exists($data, 'project') && $data->{'project'} !== null) {
            $object->setProject($this->denormalizer->denormalize($data->{'project'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseProject', 'json', $context));
        }
        elseif (property_exists($data, 'project') && $data->{'project'} === null) {
            $object->setProject(null);
        }
        if (property_exists($data, 'expense_category') && $data->{'expense_category'} !== null) {
            $object->setExpenseCategory($this->denormalizer->denormalize($data->{'expense_category'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseExpenseCategory', 'json', $context));
        }
        elseif (property_exists($data, 'expense_category') && $data->{'expense_category'} === null) {
            $object->setExpenseCategory(null);
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($this->denormalizer->denormalize($data->{'user'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseUser', 'json', $context));
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
        if (property_exists($data, 'receipt') && $data->{'receipt'} !== null) {
            $object->setReceipt($this->denormalizer->denormalize($data->{'receipt'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt', 'json', $context));
        }
        elseif (property_exists($data, 'receipt') && $data->{'receipt'} === null) {
            $object->setReceipt(null);
        }
        if (property_exists($data, 'invoice') && $data->{'invoice'} !== null) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'invoice'}, 'JoliCode\\Harvest\\Api\\Model\\ExpenseInvoice', 'json', $context));
        }
        elseif (property_exists($data, 'invoice') && $data->{'invoice'} === null) {
            $object->setInvoice(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'billable') && $data->{'billable'} !== null) {
            $object->setBillable($data->{'billable'});
        }
        elseif (property_exists($data, 'billable') && $data->{'billable'} === null) {
            $object->setBillable(null);
        }
        if (property_exists($data, 'is_closed') && $data->{'is_closed'} !== null) {
            $object->setIsClosed($data->{'is_closed'});
        }
        elseif (property_exists($data, 'is_closed') && $data->{'is_closed'} === null) {
            $object->setIsClosed(null);
        }
        if (property_exists($data, 'is_locked') && $data->{'is_locked'} !== null) {
            $object->setIsLocked($data->{'is_locked'});
        }
        elseif (property_exists($data, 'is_locked') && $data->{'is_locked'} === null) {
            $object->setIsLocked(null);
        }
        if (property_exists($data, 'is_billed') && $data->{'is_billed'} !== null) {
            $object->setIsBilled($data->{'is_billed'});
        }
        elseif (property_exists($data, 'is_billed') && $data->{'is_billed'} === null) {
            $object->setIsBilled(null);
        }
        if (property_exists($data, 'locked_reason') && $data->{'locked_reason'} !== null) {
            $object->setLockedReason($data->{'locked_reason'});
        }
        elseif (property_exists($data, 'locked_reason') && $data->{'locked_reason'} === null) {
            $object->setLockedReason(null);
        }
        if (property_exists($data, 'spent_date') && $data->{'spent_date'} !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data->{'spent_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'spent_date') && $data->{'spent_date'} === null) {
            $object->setSpentDate(null);
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
        if (null !== $object->getExpenseCategory()) {
            $data->{'expense_category'} = $this->normalizer->normalize($object->getExpenseCategory(), 'json', $context);
        }
        else {
            $data->{'expense_category'} = null;
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
        if (null !== $object->getReceipt()) {
            $data->{'receipt'} = $this->normalizer->normalize($object->getReceipt(), 'json', $context);
        }
        else {
            $data->{'receipt'} = null;
        }
        if (null !== $object->getInvoice()) {
            $data->{'invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        else {
            $data->{'invoice'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getBillable()) {
            $data->{'billable'} = $object->getBillable();
        }
        else {
            $data->{'billable'} = null;
        }
        if (null !== $object->getIsClosed()) {
            $data->{'is_closed'} = $object->getIsClosed();
        }
        else {
            $data->{'is_closed'} = null;
        }
        if (null !== $object->getIsLocked()) {
            $data->{'is_locked'} = $object->getIsLocked();
        }
        else {
            $data->{'is_locked'} = null;
        }
        if (null !== $object->getIsBilled()) {
            $data->{'is_billed'} = $object->getIsBilled();
        }
        else {
            $data->{'is_billed'} = null;
        }
        if (null !== $object->getLockedReason()) {
            $data->{'locked_reason'} = $object->getLockedReason();
        }
        else {
            $data->{'locked_reason'} = null;
        }
        if (null !== $object->getSpentDate()) {
            $data->{'spent_date'} = $object->getSpentDate()->format('Y-m-d');
        }
        else {
            $data->{'spent_date'} = null;
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
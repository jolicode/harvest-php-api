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
class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Expense();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('client', $data) && $data['client'] !== null) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseClient', 'json', $context));
        }
        elseif (\array_key_exists('client', $data) && $data['client'] === null) {
            $object->setClient(null);
        }
        if (\array_key_exists('project', $data) && $data['project'] !== null) {
            $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseProject', 'json', $context));
        }
        elseif (\array_key_exists('project', $data) && $data['project'] === null) {
            $object->setProject(null);
        }
        if (\array_key_exists('expense_category', $data) && $data['expense_category'] !== null) {
            $object->setExpenseCategory($this->denormalizer->denormalize($data['expense_category'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseExpenseCategory', 'json', $context));
        }
        elseif (\array_key_exists('expense_category', $data) && $data['expense_category'] === null) {
            $object->setExpenseCategory(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_assignment', $data)) {
            $object->setUserAssignment($this->denormalizer->denormalize($data['user_assignment'], 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json', $context));
        }
        if (\array_key_exists('receipt', $data) && $data['receipt'] !== null) {
            $object->setReceipt($this->denormalizer->denormalize($data['receipt'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt', 'json', $context));
        }
        elseif (\array_key_exists('receipt', $data) && $data['receipt'] === null) {
            $object->setReceipt(null);
        }
        if (\array_key_exists('invoice', $data) && $data['invoice'] !== null) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseInvoice', 'json', $context));
        }
        elseif (\array_key_exists('invoice', $data) && $data['invoice'] === null) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
        }
        elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('is_closed', $data) && $data['is_closed'] !== null) {
            $object->setIsClosed($data['is_closed']);
        }
        elseif (\array_key_exists('is_closed', $data) && $data['is_closed'] === null) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('is_locked', $data) && $data['is_locked'] !== null) {
            $object->setIsLocked($data['is_locked']);
        }
        elseif (\array_key_exists('is_locked', $data) && $data['is_locked'] === null) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('is_billed', $data) && $data['is_billed'] !== null) {
            $object->setIsBilled($data['is_billed']);
        }
        elseif (\array_key_exists('is_billed', $data) && $data['is_billed'] === null) {
            $object->setIsBilled(null);
        }
        if (\array_key_exists('locked_reason', $data) && $data['locked_reason'] !== null) {
            $object->setLockedReason($data['locked_reason']);
        }
        elseif (\array_key_exists('locked_reason', $data) && $data['locked_reason'] === null) {
            $object->setLockedReason(null);
        }
        if (\array_key_exists('spent_date', $data) && $data['spent_date'] !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('spent_date', $data) && $data['spent_date'] === null) {
            $object->setSpentDate(null);
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
        if (\array_key_exists('total_cost', $data) && $data['total_cost'] !== null) {
            $object->setTotalCost($data['total_cost']);
        }
        elseif (\array_key_exists('total_cost', $data) && $data['total_cost'] === null) {
            $object->setTotalCost(null);
        }
        if (\array_key_exists('units', $data) && $data['units'] !== null) {
            $object->setUnits($data['units']);
        }
        elseif (\array_key_exists('units', $data) && $data['units'] === null) {
            $object->setUnits(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if (null !== $object->getExpenseCategory()) {
            $data['expense_category'] = $this->normalizer->normalize($object->getExpenseCategory(), 'json', $context);
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getUserAssignment()) {
            $data['user_assignment'] = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
        }
        if (null !== $object->getReceipt()) {
            $data['receipt'] = $this->normalizer->normalize($object->getReceipt(), 'json', $context);
        }
        if (null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getIsClosed()) {
            $data['is_closed'] = $object->getIsClosed();
        }
        if (null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if (null !== $object->getIsBilled()) {
            $data['is_billed'] = $object->getIsBilled();
        }
        if (null !== $object->getLockedReason()) {
            $data['locked_reason'] = $object->getLockedReason();
        }
        if (null !== $object->getSpentDate()) {
            $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getTotalCost()) {
            $data['total_cost'] = $object->getTotalCost();
        }
        if (null !== $object->getUnits()) {
            $data['units'] = $object->getUnits();
        }
        return $data;
    }
}
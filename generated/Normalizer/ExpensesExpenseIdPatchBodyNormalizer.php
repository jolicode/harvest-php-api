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
class ExpensesExpenseIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ExpensesExpenseIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ExpensesExpenseIdPatchBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ExpensesExpenseIdPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('expense_category_id', $data) && $data['expense_category_id'] !== null) {
            $object->setExpenseCategoryId($data['expense_category_id']);
        }
        elseif (\array_key_exists('expense_category_id', $data) && $data['expense_category_id'] === null) {
            $object->setExpenseCategoryId(null);
        }
        if (\array_key_exists('spent_date', $data) && $data['spent_date'] !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('spent_date', $data) && $data['spent_date'] === null) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('units', $data) && $data['units'] !== null) {
            $object->setUnits($data['units']);
        }
        elseif (\array_key_exists('units', $data) && $data['units'] === null) {
            $object->setUnits(null);
        }
        if (\array_key_exists('total_cost', $data) && $data['total_cost'] !== null) {
            $object->setTotalCost($data['total_cost']);
        }
        elseif (\array_key_exists('total_cost', $data) && $data['total_cost'] === null) {
            $object->setTotalCost(null);
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
        if (\array_key_exists('receipt', $data) && $data['receipt'] !== null) {
            $object->setReceipt($data['receipt']);
        }
        elseif (\array_key_exists('receipt', $data) && $data['receipt'] === null) {
            $object->setReceipt(null);
        }
        if (\array_key_exists('delete_receipt', $data) && $data['delete_receipt'] !== null) {
            $object->setDeleteReceipt($data['delete_receipt']);
        }
        elseif (\array_key_exists('delete_receipt', $data) && $data['delete_receipt'] === null) {
            $object->setDeleteReceipt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getExpenseCategoryId()) {
            $data['expense_category_id'] = $object->getExpenseCategoryId();
        }
        if (null !== $object->getSpentDate()) {
            $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        }
        if (null !== $object->getUnits()) {
            $data['units'] = $object->getUnits();
        }
        if (null !== $object->getTotalCost()) {
            $data['total_cost'] = $object->getTotalCost();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getReceipt()) {
            $data['receipt'] = $object->getReceipt();
        }
        if (null !== $object->getDeleteReceipt()) {
            $data['delete_receipt'] = $object->getDeleteReceipt();
        }
        return $data;
    }
}
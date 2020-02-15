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
class ExpensesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ExpensesPostBody();
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
        if (property_exists($data, 'expense_category_id') && $data->{'expense_category_id'} !== null) {
            $object->setExpenseCategoryId($data->{'expense_category_id'});
        }
        elseif (property_exists($data, 'expense_category_id') && $data->{'expense_category_id'} === null) {
            $object->setExpenseCategoryId(null);
        }
        if (property_exists($data, 'spent_date') && $data->{'spent_date'} !== null) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data->{'spent_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'spent_date') && $data->{'spent_date'} === null) {
            $object->setSpentDate(null);
        }
        if (property_exists($data, 'units') && $data->{'units'} !== null) {
            $object->setUnits($data->{'units'});
        }
        elseif (property_exists($data, 'units') && $data->{'units'} === null) {
            $object->setUnits(null);
        }
        if (property_exists($data, 'total_cost') && $data->{'total_cost'} !== null) {
            $object->setTotalCost($data->{'total_cost'});
        }
        elseif (property_exists($data, 'total_cost') && $data->{'total_cost'} === null) {
            $object->setTotalCost(null);
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
        if (property_exists($data, 'receipt') && $data->{'receipt'} !== null) {
            $object->setReceipt($data->{'receipt'});
        }
        elseif (property_exists($data, 'receipt') && $data->{'receipt'} === null) {
            $object->setReceipt(null);
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
        if (null !== $object->getExpenseCategoryId()) {
            $data->{'expense_category_id'} = $object->getExpenseCategoryId();
        }
        else {
            $data->{'expense_category_id'} = null;
        }
        if (null !== $object->getSpentDate()) {
            $data->{'spent_date'} = $object->getSpentDate()->format('Y-m-d');
        }
        else {
            $data->{'spent_date'} = null;
        }
        if (null !== $object->getUnits()) {
            $data->{'units'} = $object->getUnits();
        }
        else {
            $data->{'units'} = null;
        }
        if (null !== $object->getTotalCost()) {
            $data->{'total_cost'} = $object->getTotalCost();
        }
        else {
            $data->{'total_cost'} = null;
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
        if (null !== $object->getReceipt()) {
            $data->{'receipt'} = $object->getReceipt();
        }
        else {
            $data->{'receipt'} = null;
        }
        return $data;
    }
}
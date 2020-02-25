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
class TimeReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult';
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
        $object = new \JoliCode\Harvest\Api\Model\TimeReportsResult();
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        elseif (property_exists($data, 'client_id') && $data->{'client_id'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'client_name') && $data->{'client_name'} !== null) {
            $object->setClientName($data->{'client_name'});
        }
        elseif (property_exists($data, 'client_name') && $data->{'client_name'} === null) {
            $object->setClientName(null);
        }
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        elseif (property_exists($data, 'project_id') && $data->{'project_id'} === null) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'project_name') && $data->{'project_name'} !== null) {
            $object->setProjectName($data->{'project_name'});
        }
        elseif (property_exists($data, 'project_name') && $data->{'project_name'} === null) {
            $object->setProjectName(null);
        }
        if (property_exists($data, 'task_id') && $data->{'task_id'} !== null) {
            $object->setTaskId($data->{'task_id'});
        }
        elseif (property_exists($data, 'task_id') && $data->{'task_id'} === null) {
            $object->setTaskId(null);
        }
        if (property_exists($data, 'task_name') && $data->{'task_name'} !== null) {
            $object->setTaskName($data->{'task_name'});
        }
        elseif (property_exists($data, 'task_name') && $data->{'task_name'} === null) {
            $object->setTaskName(null);
        }
        if (property_exists($data, 'user_id') && $data->{'user_id'} !== null) {
            $object->setUserId($data->{'user_id'});
        }
        elseif (property_exists($data, 'user_id') && $data->{'user_id'} === null) {
            $object->setUserId(null);
        }
        if (property_exists($data, 'user_name') && $data->{'user_name'} !== null) {
            $object->setUserName($data->{'user_name'});
        }
        elseif (property_exists($data, 'user_name') && $data->{'user_name'} === null) {
            $object->setUserName(null);
        }
        if (property_exists($data, 'is_contractor') && $data->{'is_contractor'} !== null) {
            $object->setIsContractor($data->{'is_contractor'});
        }
        elseif (property_exists($data, 'is_contractor') && $data->{'is_contractor'} === null) {
            $object->setIsContractor(null);
        }
        if (property_exists($data, 'total_hours') && $data->{'total_hours'} !== null) {
            $object->setTotalHours($data->{'total_hours'});
        }
        elseif (property_exists($data, 'total_hours') && $data->{'total_hours'} === null) {
            $object->setTotalHours(null);
        }
        if (property_exists($data, 'billable_hours') && $data->{'billable_hours'} !== null) {
            $object->setBillableHours($data->{'billable_hours'});
        }
        elseif (property_exists($data, 'billable_hours') && $data->{'billable_hours'} === null) {
            $object->setBillableHours(null);
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        elseif (property_exists($data, 'currency') && $data->{'currency'} === null) {
            $object->setCurrency(null);
        }
        if (property_exists($data, 'billable_amount') && $data->{'billable_amount'} !== null) {
            $object->setBillableAmount($data->{'billable_amount'});
        }
        elseif (property_exists($data, 'billable_amount') && $data->{'billable_amount'} === null) {
            $object->setBillableAmount(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        else {
            $data->{'client_id'} = null;
        }
        if (null !== $object->getClientName()) {
            $data->{'client_name'} = $object->getClientName();
        }
        else {
            $data->{'client_name'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        else {
            $data->{'project_id'} = null;
        }
        if (null !== $object->getProjectName()) {
            $data->{'project_name'} = $object->getProjectName();
        }
        else {
            $data->{'project_name'} = null;
        }
        if (null !== $object->getTaskId()) {
            $data->{'task_id'} = $object->getTaskId();
        }
        else {
            $data->{'task_id'} = null;
        }
        if (null !== $object->getTaskName()) {
            $data->{'task_name'} = $object->getTaskName();
        }
        else {
            $data->{'task_name'} = null;
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        }
        else {
            $data->{'user_id'} = null;
        }
        if (null !== $object->getUserName()) {
            $data->{'user_name'} = $object->getUserName();
        }
        else {
            $data->{'user_name'} = null;
        }
        if (null !== $object->getIsContractor()) {
            $data->{'is_contractor'} = $object->getIsContractor();
        }
        else {
            $data->{'is_contractor'} = null;
        }
        if (null !== $object->getTotalHours()) {
            $data->{'total_hours'} = $object->getTotalHours();
        }
        else {
            $data->{'total_hours'} = null;
        }
        if (null !== $object->getBillableHours()) {
            $data->{'billable_hours'} = $object->getBillableHours();
        }
        else {
            $data->{'billable_hours'} = null;
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        else {
            $data->{'currency'} = null;
        }
        if (null !== $object->getBillableAmount()) {
            $data->{'billable_amount'} = $object->getBillableAmount();
        }
        else {
            $data->{'billable_amount'} = null;
        }
        return $data;
    }
}
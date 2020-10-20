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
class TimeReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeReportsResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && $data['client_id'] !== null) {
            $object->setClientId($data['client_id']);
        }
        elseif (\array_key_exists('client_id', $data) && $data['client_id'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('client_name', $data) && $data['client_name'] !== null) {
            $object->setClientName($data['client_name']);
        }
        elseif (\array_key_exists('client_name', $data) && $data['client_name'] === null) {
            $object->setClientName(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('project_name', $data) && $data['project_name'] !== null) {
            $object->setProjectName($data['project_name']);
        }
        elseif (\array_key_exists('project_name', $data) && $data['project_name'] === null) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('task_id', $data) && $data['task_id'] !== null) {
            $object->setTaskId($data['task_id']);
        }
        elseif (\array_key_exists('task_id', $data) && $data['task_id'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('task_name', $data) && $data['task_name'] !== null) {
            $object->setTaskName($data['task_name']);
        }
        elseif (\array_key_exists('task_name', $data) && $data['task_name'] === null) {
            $object->setTaskName(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('user_name', $data) && $data['user_name'] !== null) {
            $object->setUserName($data['user_name']);
        }
        elseif (\array_key_exists('user_name', $data) && $data['user_name'] === null) {
            $object->setUserName(null);
        }
        if (\array_key_exists('is_contractor', $data) && $data['is_contractor'] !== null) {
            $object->setIsContractor($data['is_contractor']);
        }
        elseif (\array_key_exists('is_contractor', $data) && $data['is_contractor'] === null) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('total_hours', $data) && $data['total_hours'] !== null) {
            $object->setTotalHours($data['total_hours']);
        }
        elseif (\array_key_exists('total_hours', $data) && $data['total_hours'] === null) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('billable_hours', $data) && $data['billable_hours'] !== null) {
            $object->setBillableHours($data['billable_hours']);
        }
        elseif (\array_key_exists('billable_hours', $data) && $data['billable_hours'] === null) {
            $object->setBillableHours(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        }
        elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('billable_amount', $data) && $data['billable_amount'] !== null) {
            $object->setBillableAmount($data['billable_amount']);
        }
        elseif (\array_key_exists('billable_amount', $data) && $data['billable_amount'] === null) {
            $object->setBillableAmount(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getTaskId()) {
            $data['task_id'] = $object->getTaskId();
        }
        if (null !== $object->getTaskName()) {
            $data['task_name'] = $object->getTaskName();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data['user_name'] = $object->getUserName();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if (null !== $object->getBillableHours()) {
            $data['billable_hours'] = $object->getBillableHours();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getBillableAmount()) {
            $data['billable_amount'] = $object->getBillableAmount();
        }
        return $data;
    }
}
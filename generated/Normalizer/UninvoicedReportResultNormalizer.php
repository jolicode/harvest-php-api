<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UninvoicedReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\UninvoicedReportResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\UninvoicedReportResult();
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
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        }
        elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('total_hours', $data) && $data['total_hours'] !== null) {
            $object->setTotalHours($data['total_hours']);
        }
        elseif (\array_key_exists('total_hours', $data) && $data['total_hours'] === null) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('uninvoiced_hours', $data) && $data['uninvoiced_hours'] !== null) {
            $object->setUninvoicedHours($data['uninvoiced_hours']);
        }
        elseif (\array_key_exists('uninvoiced_hours', $data) && $data['uninvoiced_hours'] === null) {
            $object->setUninvoicedHours(null);
        }
        if (\array_key_exists('uninvoiced_expenses', $data) && $data['uninvoiced_expenses'] !== null) {
            $object->setUninvoicedExpenses($data['uninvoiced_expenses']);
        }
        elseif (\array_key_exists('uninvoiced_expenses', $data) && $data['uninvoiced_expenses'] === null) {
            $object->setUninvoicedExpenses(null);
        }
        if (\array_key_exists('uninvoiced_amount', $data) && $data['uninvoiced_amount'] !== null) {
            $object->setUninvoicedAmount($data['uninvoiced_amount']);
        }
        elseif (\array_key_exists('uninvoiced_amount', $data) && $data['uninvoiced_amount'] === null) {
            $object->setUninvoicedAmount(null);
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
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if (null !== $object->getUninvoicedHours()) {
            $data['uninvoiced_hours'] = $object->getUninvoicedHours();
        }
        if (null !== $object->getUninvoicedExpenses()) {
            $data['uninvoiced_expenses'] = $object->getUninvoicedExpenses();
        }
        if (null !== $object->getUninvoicedAmount()) {
            $data['uninvoiced_amount'] = $object->getUninvoicedAmount();
        }
        return $data;
    }
}
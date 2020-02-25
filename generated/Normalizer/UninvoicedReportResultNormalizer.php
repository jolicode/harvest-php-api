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
class UninvoicedReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\UninvoicedReportResult();
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
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        elseif (property_exists($data, 'currency') && $data->{'currency'} === null) {
            $object->setCurrency(null);
        }
        if (property_exists($data, 'total_hours') && $data->{'total_hours'} !== null) {
            $object->setTotalHours($data->{'total_hours'});
        }
        elseif (property_exists($data, 'total_hours') && $data->{'total_hours'} === null) {
            $object->setTotalHours(null);
        }
        if (property_exists($data, 'uninvoiced_hours') && $data->{'uninvoiced_hours'} !== null) {
            $object->setUninvoicedHours($data->{'uninvoiced_hours'});
        }
        elseif (property_exists($data, 'uninvoiced_hours') && $data->{'uninvoiced_hours'} === null) {
            $object->setUninvoicedHours(null);
        }
        if (property_exists($data, 'uninvoiced_expenses') && $data->{'uninvoiced_expenses'} !== null) {
            $object->setUninvoicedExpenses($data->{'uninvoiced_expenses'});
        }
        elseif (property_exists($data, 'uninvoiced_expenses') && $data->{'uninvoiced_expenses'} === null) {
            $object->setUninvoicedExpenses(null);
        }
        if (property_exists($data, 'uninvoiced_amount') && $data->{'uninvoiced_amount'} !== null) {
            $object->setUninvoicedAmount($data->{'uninvoiced_amount'});
        }
        elseif (property_exists($data, 'uninvoiced_amount') && $data->{'uninvoiced_amount'} === null) {
            $object->setUninvoicedAmount(null);
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
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        else {
            $data->{'currency'} = null;
        }
        if (null !== $object->getTotalHours()) {
            $data->{'total_hours'} = $object->getTotalHours();
        }
        else {
            $data->{'total_hours'} = null;
        }
        if (null !== $object->getUninvoicedHours()) {
            $data->{'uninvoiced_hours'} = $object->getUninvoicedHours();
        }
        else {
            $data->{'uninvoiced_hours'} = null;
        }
        if (null !== $object->getUninvoicedExpenses()) {
            $data->{'uninvoiced_expenses'} = $object->getUninvoicedExpenses();
        }
        else {
            $data->{'uninvoiced_expenses'} = null;
        }
        if (null !== $object->getUninvoicedAmount()) {
            $data->{'uninvoiced_amount'} = $object->getUninvoicedAmount();
        }
        else {
            $data->{'uninvoiced_amount'} = null;
        }
        return $data;
    }
}
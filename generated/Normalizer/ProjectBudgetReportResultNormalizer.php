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
class ProjectBudgetReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ProjectBudgetReportResult';
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
        $object = new \JoliCode\Harvest\Api\Model\ProjectBudgetReportResult();
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
        if (property_exists($data, 'budget_is_monthly') && $data->{'budget_is_monthly'} !== null) {
            $object->setBudgetIsMonthly($data->{'budget_is_monthly'});
        }
        elseif (property_exists($data, 'budget_is_monthly') && $data->{'budget_is_monthly'} === null) {
            $object->setBudgetIsMonthly(null);
        }
        if (property_exists($data, 'budget_by') && $data->{'budget_by'} !== null) {
            $object->setBudgetBy($data->{'budget_by'});
        }
        elseif (property_exists($data, 'budget_by') && $data->{'budget_by'} === null) {
            $object->setBudgetBy(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'budget') && $data->{'budget'} !== null) {
            $object->setBudget($data->{'budget'});
        }
        elseif (property_exists($data, 'budget') && $data->{'budget'} === null) {
            $object->setBudget(null);
        }
        if (property_exists($data, 'budget_spent') && $data->{'budget_spent'} !== null) {
            $object->setBudgetSpent($data->{'budget_spent'});
        }
        elseif (property_exists($data, 'budget_spent') && $data->{'budget_spent'} === null) {
            $object->setBudgetSpent(null);
        }
        if (property_exists($data, 'budget_remaining') && $data->{'budget_remaining'} !== null) {
            $object->setBudgetRemaining($data->{'budget_remaining'});
        }
        elseif (property_exists($data, 'budget_remaining') && $data->{'budget_remaining'} === null) {
            $object->setBudgetRemaining(null);
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
        if (null !== $object->getBudgetIsMonthly()) {
            $data->{'budget_is_monthly'} = $object->getBudgetIsMonthly();
        }
        else {
            $data->{'budget_is_monthly'} = null;
        }
        if (null !== $object->getBudgetBy()) {
            $data->{'budget_by'} = $object->getBudgetBy();
        }
        else {
            $data->{'budget_by'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getBudget()) {
            $data->{'budget'} = $object->getBudget();
        }
        else {
            $data->{'budget'} = null;
        }
        if (null !== $object->getBudgetSpent()) {
            $data->{'budget_spent'} = $object->getBudgetSpent();
        }
        else {
            $data->{'budget_spent'} = null;
        }
        if (null !== $object->getBudgetRemaining()) {
            $data->{'budget_remaining'} = $object->getBudgetRemaining();
        }
        else {
            $data->{'budget_remaining'} = null;
        }
        return $data;
    }
}
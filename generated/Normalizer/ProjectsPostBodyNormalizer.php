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
class ProjectsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ProjectsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ProjectsPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && $data['client_id'] !== null) {
            $object->setClientId($data['client_id']);
        }
        elseif (\array_key_exists('client_id', $data) && $data['client_id'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_billable', $data) && $data['is_billable'] !== null) {
            $object->setIsBillable($data['is_billable']);
        }
        elseif (\array_key_exists('is_billable', $data) && $data['is_billable'] === null) {
            $object->setIsBillable(null);
        }
        if (\array_key_exists('is_fixed_fee', $data) && $data['is_fixed_fee'] !== null) {
            $object->setIsFixedFee($data['is_fixed_fee']);
        }
        elseif (\array_key_exists('is_fixed_fee', $data) && $data['is_fixed_fee'] === null) {
            $object->setIsFixedFee(null);
        }
        if (\array_key_exists('bill_by', $data) && $data['bill_by'] !== null) {
            $object->setBillBy($data['bill_by']);
        }
        elseif (\array_key_exists('bill_by', $data) && $data['bill_by'] === null) {
            $object->setBillBy(null);
        }
        if (\array_key_exists('hourly_rate', $data) && $data['hourly_rate'] !== null) {
            $object->setHourlyRate($data['hourly_rate']);
        }
        elseif (\array_key_exists('hourly_rate', $data) && $data['hourly_rate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('budget', $data) && $data['budget'] !== null) {
            $object->setBudget($data['budget']);
        }
        elseif (\array_key_exists('budget', $data) && $data['budget'] === null) {
            $object->setBudget(null);
        }
        if (\array_key_exists('budget_by', $data) && $data['budget_by'] !== null) {
            $object->setBudgetBy($data['budget_by']);
        }
        elseif (\array_key_exists('budget_by', $data) && $data['budget_by'] === null) {
            $object->setBudgetBy(null);
        }
        if (\array_key_exists('budget_is_monthly', $data) && $data['budget_is_monthly'] !== null) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
        }
        elseif (\array_key_exists('budget_is_monthly', $data) && $data['budget_is_monthly'] === null) {
            $object->setBudgetIsMonthly(null);
        }
        if (\array_key_exists('notify_when_over_budget', $data) && $data['notify_when_over_budget'] !== null) {
            $object->setNotifyWhenOverBudget($data['notify_when_over_budget']);
        }
        elseif (\array_key_exists('notify_when_over_budget', $data) && $data['notify_when_over_budget'] === null) {
            $object->setNotifyWhenOverBudget(null);
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && $data['over_budget_notification_percentage'] !== null) {
            $object->setOverBudgetNotificationPercentage($data['over_budget_notification_percentage']);
        }
        elseif (\array_key_exists('over_budget_notification_percentage', $data) && $data['over_budget_notification_percentage'] === null) {
            $object->setOverBudgetNotificationPercentage(null);
        }
        if (\array_key_exists('show_budget_to_all', $data) && $data['show_budget_to_all'] !== null) {
            $object->setShowBudgetToAll($data['show_budget_to_all']);
        }
        elseif (\array_key_exists('show_budget_to_all', $data) && $data['show_budget_to_all'] === null) {
            $object->setShowBudgetToAll(null);
        }
        if (\array_key_exists('cost_budget', $data) && $data['cost_budget'] !== null) {
            $object->setCostBudget($data['cost_budget']);
        }
        elseif (\array_key_exists('cost_budget', $data) && $data['cost_budget'] === null) {
            $object->setCostBudget(null);
        }
        if (\array_key_exists('cost_budget_include_expenses', $data) && $data['cost_budget_include_expenses'] !== null) {
            $object->setCostBudgetIncludeExpenses($data['cost_budget_include_expenses']);
        }
        elseif (\array_key_exists('cost_budget_include_expenses', $data) && $data['cost_budget_include_expenses'] === null) {
            $object->setCostBudgetIncludeExpenses(null);
        }
        if (\array_key_exists('fee', $data) && $data['fee'] !== null) {
            $object->setFee($data['fee']);
        }
        elseif (\array_key_exists('fee', $data) && $data['fee'] === null) {
            $object->setFee(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('starts_on', $data) && $data['starts_on'] !== null) {
            $object->setStartsOn(\DateTime::createFromFormat('Y-m-d', $data['starts_on'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('starts_on', $data) && $data['starts_on'] === null) {
            $object->setStartsOn(null);
        }
        if (\array_key_exists('ends_on', $data) && $data['ends_on'] !== null) {
            $object->setEndsOn(\DateTime::createFromFormat('Y-m-d', $data['ends_on'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('ends_on', $data) && $data['ends_on'] === null) {
            $object->setEndsOn(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['client_id'] = $object->getClientId();
        $data['name'] = $object->getName();
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        $data['is_billable'] = $object->getIsBillable();
        if (null !== $object->getIsFixedFee()) {
            $data['is_fixed_fee'] = $object->getIsFixedFee();
        }
        $data['bill_by'] = $object->getBillBy();
        if (null !== $object->getHourlyRate()) {
            $data['hourly_rate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        $data['budget_by'] = $object->getBudgetBy();
        if (null !== $object->getBudgetIsMonthly()) {
            $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
        }
        if (null !== $object->getNotifyWhenOverBudget()) {
            $data['notify_when_over_budget'] = $object->getNotifyWhenOverBudget();
        }
        if (null !== $object->getOverBudgetNotificationPercentage()) {
            $data['over_budget_notification_percentage'] = $object->getOverBudgetNotificationPercentage();
        }
        if (null !== $object->getShowBudgetToAll()) {
            $data['show_budget_to_all'] = $object->getShowBudgetToAll();
        }
        if (null !== $object->getCostBudget()) {
            $data['cost_budget'] = $object->getCostBudget();
        }
        if (null !== $object->getCostBudgetIncludeExpenses()) {
            $data['cost_budget_include_expenses'] = $object->getCostBudgetIncludeExpenses();
        }
        if (null !== $object->getFee()) {
            $data['fee'] = $object->getFee();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getStartsOn()) {
            $data['starts_on'] = $object->getStartsOn()->format('Y-m-d');
        }
        if (null !== $object->getEndsOn()) {
            $data['ends_on'] = $object->getEndsOn()->format('Y-m-d');
        }
        return $data;
    }
}
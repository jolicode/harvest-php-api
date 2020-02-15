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
class ProjectsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsPostBody();
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        elseif (property_exists($data, 'client_id') && $data->{'client_id'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        }
        elseif (property_exists($data, 'code') && $data->{'code'} === null) {
            $object->setCode(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'is_billable') && $data->{'is_billable'} !== null) {
            $object->setIsBillable($data->{'is_billable'});
        }
        elseif (property_exists($data, 'is_billable') && $data->{'is_billable'} === null) {
            $object->setIsBillable(null);
        }
        if (property_exists($data, 'is_fixed_fee') && $data->{'is_fixed_fee'} !== null) {
            $object->setIsFixedFee($data->{'is_fixed_fee'});
        }
        elseif (property_exists($data, 'is_fixed_fee') && $data->{'is_fixed_fee'} === null) {
            $object->setIsFixedFee(null);
        }
        if (property_exists($data, 'bill_by') && $data->{'bill_by'} !== null) {
            $object->setBillBy($data->{'bill_by'});
        }
        elseif (property_exists($data, 'bill_by') && $data->{'bill_by'} === null) {
            $object->setBillBy(null);
        }
        if (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} !== null) {
            $object->setHourlyRate($data->{'hourly_rate'});
        }
        elseif (property_exists($data, 'hourly_rate') && $data->{'hourly_rate'} === null) {
            $object->setHourlyRate(null);
        }
        if (property_exists($data, 'budget') && $data->{'budget'} !== null) {
            $object->setBudget($data->{'budget'});
        }
        elseif (property_exists($data, 'budget') && $data->{'budget'} === null) {
            $object->setBudget(null);
        }
        if (property_exists($data, 'budget_by') && $data->{'budget_by'} !== null) {
            $object->setBudgetBy($data->{'budget_by'});
        }
        elseif (property_exists($data, 'budget_by') && $data->{'budget_by'} === null) {
            $object->setBudgetBy(null);
        }
        if (property_exists($data, 'budget_is_monthly') && $data->{'budget_is_monthly'} !== null) {
            $object->setBudgetIsMonthly($data->{'budget_is_monthly'});
        }
        elseif (property_exists($data, 'budget_is_monthly') && $data->{'budget_is_monthly'} === null) {
            $object->setBudgetIsMonthly(null);
        }
        if (property_exists($data, 'notify_when_over_budget') && $data->{'notify_when_over_budget'} !== null) {
            $object->setNotifyWhenOverBudget($data->{'notify_when_over_budget'});
        }
        elseif (property_exists($data, 'notify_when_over_budget') && $data->{'notify_when_over_budget'} === null) {
            $object->setNotifyWhenOverBudget(null);
        }
        if (property_exists($data, 'over_budget_notification_percentage') && $data->{'over_budget_notification_percentage'} !== null) {
            $object->setOverBudgetNotificationPercentage($data->{'over_budget_notification_percentage'});
        }
        elseif (property_exists($data, 'over_budget_notification_percentage') && $data->{'over_budget_notification_percentage'} === null) {
            $object->setOverBudgetNotificationPercentage(null);
        }
        if (property_exists($data, 'show_budget_to_all') && $data->{'show_budget_to_all'} !== null) {
            $object->setShowBudgetToAll($data->{'show_budget_to_all'});
        }
        elseif (property_exists($data, 'show_budget_to_all') && $data->{'show_budget_to_all'} === null) {
            $object->setShowBudgetToAll(null);
        }
        if (property_exists($data, 'cost_budget') && $data->{'cost_budget'} !== null) {
            $object->setCostBudget($data->{'cost_budget'});
        }
        elseif (property_exists($data, 'cost_budget') && $data->{'cost_budget'} === null) {
            $object->setCostBudget(null);
        }
        if (property_exists($data, 'cost_budget_include_expenses') && $data->{'cost_budget_include_expenses'} !== null) {
            $object->setCostBudgetIncludeExpenses($data->{'cost_budget_include_expenses'});
        }
        elseif (property_exists($data, 'cost_budget_include_expenses') && $data->{'cost_budget_include_expenses'} === null) {
            $object->setCostBudgetIncludeExpenses(null);
        }
        if (property_exists($data, 'fee') && $data->{'fee'} !== null) {
            $object->setFee($data->{'fee'});
        }
        elseif (property_exists($data, 'fee') && $data->{'fee'} === null) {
            $object->setFee(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'starts_on') && $data->{'starts_on'} !== null) {
            $object->setStartsOn(\DateTime::createFromFormat('Y-m-d', $data->{'starts_on'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'starts_on') && $data->{'starts_on'} === null) {
            $object->setStartsOn(null);
        }
        if (property_exists($data, 'ends_on') && $data->{'ends_on'} !== null) {
            $object->setEndsOn(\DateTime::createFromFormat('Y-m-d', $data->{'ends_on'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'ends_on') && $data->{'ends_on'} === null) {
            $object->setEndsOn(null);
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
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        else {
            $data->{'code'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getIsBillable()) {
            $data->{'is_billable'} = $object->getIsBillable();
        }
        else {
            $data->{'is_billable'} = null;
        }
        if (null !== $object->getIsFixedFee()) {
            $data->{'is_fixed_fee'} = $object->getIsFixedFee();
        }
        else {
            $data->{'is_fixed_fee'} = null;
        }
        if (null !== $object->getBillBy()) {
            $data->{'bill_by'} = $object->getBillBy();
        }
        else {
            $data->{'bill_by'} = null;
        }
        if (null !== $object->getHourlyRate()) {
            $data->{'hourly_rate'} = $object->getHourlyRate();
        }
        else {
            $data->{'hourly_rate'} = null;
        }
        if (null !== $object->getBudget()) {
            $data->{'budget'} = $object->getBudget();
        }
        else {
            $data->{'budget'} = null;
        }
        if (null !== $object->getBudgetBy()) {
            $data->{'budget_by'} = $object->getBudgetBy();
        }
        else {
            $data->{'budget_by'} = null;
        }
        if (null !== $object->getBudgetIsMonthly()) {
            $data->{'budget_is_monthly'} = $object->getBudgetIsMonthly();
        }
        else {
            $data->{'budget_is_monthly'} = null;
        }
        if (null !== $object->getNotifyWhenOverBudget()) {
            $data->{'notify_when_over_budget'} = $object->getNotifyWhenOverBudget();
        }
        else {
            $data->{'notify_when_over_budget'} = null;
        }
        if (null !== $object->getOverBudgetNotificationPercentage()) {
            $data->{'over_budget_notification_percentage'} = $object->getOverBudgetNotificationPercentage();
        }
        else {
            $data->{'over_budget_notification_percentage'} = null;
        }
        if (null !== $object->getShowBudgetToAll()) {
            $data->{'show_budget_to_all'} = $object->getShowBudgetToAll();
        }
        else {
            $data->{'show_budget_to_all'} = null;
        }
        if (null !== $object->getCostBudget()) {
            $data->{'cost_budget'} = $object->getCostBudget();
        }
        else {
            $data->{'cost_budget'} = null;
        }
        if (null !== $object->getCostBudgetIncludeExpenses()) {
            $data->{'cost_budget_include_expenses'} = $object->getCostBudgetIncludeExpenses();
        }
        else {
            $data->{'cost_budget_include_expenses'} = null;
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $object->getFee();
        }
        else {
            $data->{'fee'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getStartsOn()) {
            $data->{'starts_on'} = $object->getStartsOn()->format('Y-m-d');
        }
        else {
            $data->{'starts_on'} = null;
        }
        if (null !== $object->getEndsOn()) {
            $data->{'ends_on'} = $object->getEndsOn()->format('Y-m-d');
        }
        else {
            $data->{'ends_on'} = null;
        }
        return $data;
    }
}
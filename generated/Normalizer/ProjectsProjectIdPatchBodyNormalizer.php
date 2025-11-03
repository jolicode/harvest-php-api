<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectsProjectIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody();
        if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
            $data['hourly_rate'] = (float) $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
            $data['budget'] = (float) $data['budget'];
        }
        if (\array_key_exists('cost_budget', $data) && \is_int($data['cost_budget'])) {
            $data['cost_budget'] = (float) $data['cost_budget'];
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && \is_int($data['over_budget_notification_percentage'])) {
            $data['over_budget_notification_percentage'] = (float) $data['over_budget_notification_percentage'];
        }
        if (\array_key_exists('fee', $data) && \is_int($data['fee'])) {
            $data['fee'] = (float) $data['fee'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('is_billable', $data) && \is_int($data['is_billable'])) {
            $data['is_billable'] = (bool) $data['is_billable'];
        }
        if (\array_key_exists('is_fixed_fee', $data) && \is_int($data['is_fixed_fee'])) {
            $data['is_fixed_fee'] = (bool) $data['is_fixed_fee'];
        }
        if (\array_key_exists('budget_is_monthly', $data) && \is_int($data['budget_is_monthly'])) {
            $data['budget_is_monthly'] = (bool) $data['budget_is_monthly'];
        }
        if (\array_key_exists('cost_budget_include_expenses', $data) && \is_int($data['cost_budget_include_expenses'])) {
            $data['cost_budget_include_expenses'] = (bool) $data['cost_budget_include_expenses'];
        }
        if (\array_key_exists('notify_when_over_budget', $data) && \is_int($data['notify_when_over_budget'])) {
            $data['notify_when_over_budget'] = (bool) $data['notify_when_over_budget'];
        }
        if (\array_key_exists('show_budget_to_all', $data) && \is_int($data['show_budget_to_all'])) {
            $data['show_budget_to_all'] = (bool) $data['show_budget_to_all'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
            unset($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
            unset($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_billable', $data) && null !== $data['is_billable']) {
            $object->setIsBillable($data['is_billable']);
            unset($data['is_billable']);
        } elseif (\array_key_exists('is_billable', $data) && null === $data['is_billable']) {
            $object->setIsBillable(null);
        }
        if (\array_key_exists('is_fixed_fee', $data) && null !== $data['is_fixed_fee']) {
            $object->setIsFixedFee($data['is_fixed_fee']);
            unset($data['is_fixed_fee']);
        } elseif (\array_key_exists('is_fixed_fee', $data) && null === $data['is_fixed_fee']) {
            $object->setIsFixedFee(null);
        }
        if (\array_key_exists('bill_by', $data) && null !== $data['bill_by']) {
            $object->setBillBy($data['bill_by']);
            unset($data['bill_by']);
        } elseif (\array_key_exists('bill_by', $data) && null === $data['bill_by']) {
            $object->setBillBy(null);
        }
        if (\array_key_exists('hourly_rate', $data) && null !== $data['hourly_rate']) {
            $object->setHourlyRate($data['hourly_rate']);
            unset($data['hourly_rate']);
        } elseif (\array_key_exists('hourly_rate', $data) && null === $data['hourly_rate']) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('budget_by', $data) && null !== $data['budget_by']) {
            $object->setBudgetBy($data['budget_by']);
            unset($data['budget_by']);
        } elseif (\array_key_exists('budget_by', $data) && null === $data['budget_by']) {
            $object->setBudgetBy(null);
        }
        if (\array_key_exists('budget_is_monthly', $data) && null !== $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
            unset($data['budget_is_monthly']);
        } elseif (\array_key_exists('budget_is_monthly', $data) && null === $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly(null);
        }
        if (\array_key_exists('budget', $data) && null !== $data['budget']) {
            $object->setBudget($data['budget']);
            unset($data['budget']);
        } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
            $object->setBudget(null);
        }
        if (\array_key_exists('cost_budget', $data) && null !== $data['cost_budget']) {
            $object->setCostBudget($data['cost_budget']);
            unset($data['cost_budget']);
        } elseif (\array_key_exists('cost_budget', $data) && null === $data['cost_budget']) {
            $object->setCostBudget(null);
        }
        if (\array_key_exists('cost_budget_include_expenses', $data) && null !== $data['cost_budget_include_expenses']) {
            $object->setCostBudgetIncludeExpenses($data['cost_budget_include_expenses']);
            unset($data['cost_budget_include_expenses']);
        } elseif (\array_key_exists('cost_budget_include_expenses', $data) && null === $data['cost_budget_include_expenses']) {
            $object->setCostBudgetIncludeExpenses(null);
        }
        if (\array_key_exists('notify_when_over_budget', $data) && null !== $data['notify_when_over_budget']) {
            $object->setNotifyWhenOverBudget($data['notify_when_over_budget']);
            unset($data['notify_when_over_budget']);
        } elseif (\array_key_exists('notify_when_over_budget', $data) && null === $data['notify_when_over_budget']) {
            $object->setNotifyWhenOverBudget(null);
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && null !== $data['over_budget_notification_percentage']) {
            $object->setOverBudgetNotificationPercentage($data['over_budget_notification_percentage']);
            unset($data['over_budget_notification_percentage']);
        } elseif (\array_key_exists('over_budget_notification_percentage', $data) && null === $data['over_budget_notification_percentage']) {
            $object->setOverBudgetNotificationPercentage(null);
        }
        if (\array_key_exists('show_budget_to_all', $data) && null !== $data['show_budget_to_all']) {
            $object->setShowBudgetToAll($data['show_budget_to_all']);
            unset($data['show_budget_to_all']);
        } elseif (\array_key_exists('show_budget_to_all', $data) && null === $data['show_budget_to_all']) {
            $object->setShowBudgetToAll(null);
        }
        if (\array_key_exists('fee', $data) && null !== $data['fee']) {
            $object->setFee($data['fee']);
            unset($data['fee']);
        } elseif (\array_key_exists('fee', $data) && null === $data['fee']) {
            $object->setFee(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('starts_on', $data) && null !== $data['starts_on']) {
            $object->setStartsOn(\DateTime::createFromFormat('Y-m-d', $data['starts_on'])->setTime(0, 0, 0));
            unset($data['starts_on']);
        } elseif (\array_key_exists('starts_on', $data) && null === $data['starts_on']) {
            $object->setStartsOn(null);
        }
        if (\array_key_exists('ends_on', $data) && null !== $data['ends_on']) {
            $object->setEndsOn(\DateTime::createFromFormat('Y-m-d', $data['ends_on'])->setTime(0, 0, 0));
            unset($data['ends_on']);
        } elseif (\array_key_exists('ends_on', $data) && null === $data['ends_on']) {
            $object->setEndsOn(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['client_id'] = $data->getClientId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('isBillable') && null !== $data->getIsBillable()) {
            $dataArray['is_billable'] = $data->getIsBillable();
        }
        if ($data->isInitialized('isFixedFee') && null !== $data->getIsFixedFee()) {
            $dataArray['is_fixed_fee'] = $data->getIsFixedFee();
        }
        if ($data->isInitialized('billBy') && null !== $data->getBillBy()) {
            $dataArray['bill_by'] = $data->getBillBy();
        }
        if ($data->isInitialized('hourlyRate') && null !== $data->getHourlyRate()) {
            $dataArray['hourly_rate'] = $data->getHourlyRate();
        }
        if ($data->isInitialized('budgetBy') && null !== $data->getBudgetBy()) {
            $dataArray['budget_by'] = $data->getBudgetBy();
        }
        if ($data->isInitialized('budgetIsMonthly') && null !== $data->getBudgetIsMonthly()) {
            $dataArray['budget_is_monthly'] = $data->getBudgetIsMonthly();
        }
        if ($data->isInitialized('budget') && null !== $data->getBudget()) {
            $dataArray['budget'] = $data->getBudget();
        }
        if ($data->isInitialized('costBudget') && null !== $data->getCostBudget()) {
            $dataArray['cost_budget'] = $data->getCostBudget();
        }
        if ($data->isInitialized('costBudgetIncludeExpenses') && null !== $data->getCostBudgetIncludeExpenses()) {
            $dataArray['cost_budget_include_expenses'] = $data->getCostBudgetIncludeExpenses();
        }
        if ($data->isInitialized('notifyWhenOverBudget') && null !== $data->getNotifyWhenOverBudget()) {
            $dataArray['notify_when_over_budget'] = $data->getNotifyWhenOverBudget();
        }
        if ($data->isInitialized('overBudgetNotificationPercentage') && null !== $data->getOverBudgetNotificationPercentage()) {
            $dataArray['over_budget_notification_percentage'] = $data->getOverBudgetNotificationPercentage();
        }
        if ($data->isInitialized('showBudgetToAll') && null !== $data->getShowBudgetToAll()) {
            $dataArray['show_budget_to_all'] = $data->getShowBudgetToAll();
        }
        if ($data->isInitialized('fee') && null !== $data->getFee()) {
            $dataArray['fee'] = $data->getFee();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('startsOn') && null !== $data->getStartsOn()) {
            $dataArray['starts_on'] = $data->getStartsOn()->format('Y-m-d');
        }
        if ($data->isInitialized('endsOn') && null !== $data->getEndsOn()) {
            $dataArray['ends_on'] = $data->getEndsOn()->format('Y-m-d');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\ProjectsProjectIdPatchBody::class => false];
    }
}

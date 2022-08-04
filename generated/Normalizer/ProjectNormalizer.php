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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\Project' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Project' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Project();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('client', $data) && null !== $data['client']) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\ProjectClient', 'json', $context));
        } elseif (\array_key_exists('client', $data) && null === $data['client']) {
            $object->setClient(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_billable', $data) && null !== $data['is_billable']) {
            $object->setIsBillable($data['is_billable']);
        } elseif (\array_key_exists('is_billable', $data) && null === $data['is_billable']) {
            $object->setIsBillable(null);
        }
        if (\array_key_exists('is_fixed_fee', $data) && null !== $data['is_fixed_fee']) {
            $object->setIsFixedFee($data['is_fixed_fee']);
        } elseif (\array_key_exists('is_fixed_fee', $data) && null === $data['is_fixed_fee']) {
            $object->setIsFixedFee(null);
        }
        if (\array_key_exists('bill_by', $data) && null !== $data['bill_by']) {
            $object->setBillBy($data['bill_by']);
        } elseif (\array_key_exists('bill_by', $data) && null === $data['bill_by']) {
            $object->setBillBy(null);
        }
        if (\array_key_exists('hourly_rate', $data) && null !== $data['hourly_rate']) {
            $object->setHourlyRate($data['hourly_rate']);
        } elseif (\array_key_exists('hourly_rate', $data) && null === $data['hourly_rate']) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('budget', $data) && null !== $data['budget']) {
            $object->setBudget($data['budget']);
        } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
            $object->setBudget(null);
        }
        if (\array_key_exists('budget_by', $data) && null !== $data['budget_by']) {
            $object->setBudgetBy($data['budget_by']);
        } elseif (\array_key_exists('budget_by', $data) && null === $data['budget_by']) {
            $object->setBudgetBy(null);
        }
        if (\array_key_exists('budget_is_monthly', $data) && null !== $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
        } elseif (\array_key_exists('budget_is_monthly', $data) && null === $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly(null);
        }
        if (\array_key_exists('notify_when_over_budget', $data) && null !== $data['notify_when_over_budget']) {
            $object->setNotifyWhenOverBudget($data['notify_when_over_budget']);
        } elseif (\array_key_exists('notify_when_over_budget', $data) && null === $data['notify_when_over_budget']) {
            $object->setNotifyWhenOverBudget(null);
        }
        if (\array_key_exists('over_budget_notification_percentage', $data) && null !== $data['over_budget_notification_percentage']) {
            $object->setOverBudgetNotificationPercentage($data['over_budget_notification_percentage']);
        } elseif (\array_key_exists('over_budget_notification_percentage', $data) && null === $data['over_budget_notification_percentage']) {
            $object->setOverBudgetNotificationPercentage(null);
        }
        if (\array_key_exists('over_budget_notification_date', $data) && null !== $data['over_budget_notification_date']) {
            $object->setOverBudgetNotificationDate(\DateTime::createFromFormat('Y-m-d', $data['over_budget_notification_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('over_budget_notification_date', $data) && null === $data['over_budget_notification_date']) {
            $object->setOverBudgetNotificationDate(null);
        }
        if (\array_key_exists('show_budget_to_all', $data) && null !== $data['show_budget_to_all']) {
            $object->setShowBudgetToAll($data['show_budget_to_all']);
        } elseif (\array_key_exists('show_budget_to_all', $data) && null === $data['show_budget_to_all']) {
            $object->setShowBudgetToAll(null);
        }
        if (\array_key_exists('cost_budget', $data) && null !== $data['cost_budget']) {
            $object->setCostBudget($data['cost_budget']);
        } elseif (\array_key_exists('cost_budget', $data) && null === $data['cost_budget']) {
            $object->setCostBudget(null);
        }
        if (\array_key_exists('cost_budget_include_expenses', $data) && null !== $data['cost_budget_include_expenses']) {
            $object->setCostBudgetIncludeExpenses($data['cost_budget_include_expenses']);
        } elseif (\array_key_exists('cost_budget_include_expenses', $data) && null === $data['cost_budget_include_expenses']) {
            $object->setCostBudgetIncludeExpenses(null);
        }
        if (\array_key_exists('fee', $data) && null !== $data['fee']) {
            $object->setFee($data['fee']);
        } elseif (\array_key_exists('fee', $data) && null === $data['fee']) {
            $object->setFee(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('starts_on', $data) && null !== $data['starts_on']) {
            $object->setStartsOn(\DateTime::createFromFormat('Y-m-d', $data['starts_on'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('starts_on', $data) && null === $data['starts_on']) {
            $object->setStartsOn(null);
        }
        if (\array_key_exists('ends_on', $data) && null !== $data['ends_on']) {
            $object->setEndsOn(\DateTime::createFromFormat('Y-m-d', $data['ends_on'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('ends_on', $data) && null === $data['ends_on']) {
            $object->setEndsOn(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getIsBillable()) {
            $data['is_billable'] = $object->getIsBillable();
        }
        if (null !== $object->getIsFixedFee()) {
            $data['is_fixed_fee'] = $object->getIsFixedFee();
        }
        if (null !== $object->getBillBy()) {
            $data['bill_by'] = $object->getBillBy();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourly_rate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        if (null !== $object->getBudgetBy()) {
            $data['budget_by'] = $object->getBudgetBy();
        }
        if (null !== $object->getBudgetIsMonthly()) {
            $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
        }
        if (null !== $object->getNotifyWhenOverBudget()) {
            $data['notify_when_over_budget'] = $object->getNotifyWhenOverBudget();
        }
        if (null !== $object->getOverBudgetNotificationPercentage()) {
            $data['over_budget_notification_percentage'] = $object->getOverBudgetNotificationPercentage();
        }
        if (null !== $object->getOverBudgetNotificationDate()) {
            $data['over_budget_notification_date'] = $object->getOverBudgetNotificationDate()->format('Y-m-d');
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
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }

        return $data;
    }
}

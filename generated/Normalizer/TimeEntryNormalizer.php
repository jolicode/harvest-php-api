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

class TimeEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\TimeEntry::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\TimeEntry::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntry();
        if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (\array_key_exists('hours_without_timer', $data) && \is_int($data['hours_without_timer'])) {
            $data['hours_without_timer'] = (float) $data['hours_without_timer'];
        }
        if (\array_key_exists('rounded_hours', $data) && \is_int($data['rounded_hours'])) {
            $data['rounded_hours'] = (float) $data['rounded_hours'];
        }
        if (\array_key_exists('billable_rate', $data) && \is_int($data['billable_rate'])) {
            $data['billable_rate'] = (float) $data['billable_rate'];
        }
        if (\array_key_exists('cost_rate', $data) && \is_int($data['cost_rate'])) {
            $data['cost_rate'] = (float) $data['cost_rate'];
        }
        if (\array_key_exists('is_locked', $data) && \is_int($data['is_locked'])) {
            $data['is_locked'] = (bool) $data['is_locked'];
        }
        if (\array_key_exists('is_closed', $data) && \is_int($data['is_closed'])) {
            $data['is_closed'] = (bool) $data['is_closed'];
        }
        if (\array_key_exists('is_billed', $data) && \is_int($data['is_billed'])) {
            $data['is_billed'] = (bool) $data['is_billed'];
        }
        if (\array_key_exists('is_running', $data) && \is_int($data['is_running'])) {
            $data['is_running'] = (bool) $data['is_running'];
        }
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (\array_key_exists('budgeted', $data) && \is_int($data['budgeted'])) {
            $data['budgeted'] = (bool) $data['budgeted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
            unset($data['spent_date']);
        } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \JoliCode\Harvest\Api\Model\TimeEntryUser::class, 'json', $context));
            unset($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_assignment', $data) && null !== $data['user_assignment']) {
            $value = $data['user_assignment'];
            if (\is_array($data['user_assignment'])) {
                $value = $this->denormalizer->denormalize($data['user_assignment'], \JoliCode\Harvest\Api\Model\UserAssignment::class, 'json', $context);
            } elseif (null === $data['user_assignment']) {
                $value = $data['user_assignment'];
            }
            $object->setUserAssignment($value);
            unset($data['user_assignment']);
        } elseif (\array_key_exists('user_assignment', $data) && null === $data['user_assignment']) {
            $object->setUserAssignment(null);
        }
        if (\array_key_exists('client', $data) && null !== $data['client']) {
            $object->setClient($this->denormalizer->denormalize($data['client'], \JoliCode\Harvest\Api\Model\TimeEntryClient::class, 'json', $context));
            unset($data['client']);
        } elseif (\array_key_exists('client', $data) && null === $data['client']) {
            $object->setClient(null);
        }
        if (\array_key_exists('project', $data) && null !== $data['project']) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \JoliCode\Harvest\Api\Model\TimeEntryProject::class, 'json', $context));
            unset($data['project']);
        } elseif (\array_key_exists('project', $data) && null === $data['project']) {
            $object->setProject(null);
        }
        if (\array_key_exists('task', $data) && null !== $data['task']) {
            $object->setTask($this->denormalizer->denormalize($data['task'], \JoliCode\Harvest\Api\Model\TimeEntryTask::class, 'json', $context));
            unset($data['task']);
        } elseif (\array_key_exists('task', $data) && null === $data['task']) {
            $object->setTask(null);
        }
        if (\array_key_exists('task_assignment', $data) && null !== $data['task_assignment']) {
            $value_1 = $data['task_assignment'];
            if (\is_array($data['task_assignment'])) {
                $value_1 = $this->denormalizer->denormalize($data['task_assignment'], \JoliCode\Harvest\Api\Model\TaskAssignment::class, 'json', $context);
            } elseif (null === $data['task_assignment']) {
                $value_1 = $data['task_assignment'];
            }
            $object->setTaskAssignment($value_1);
            unset($data['task_assignment']);
        } elseif (\array_key_exists('task_assignment', $data) && null === $data['task_assignment']) {
            $object->setTaskAssignment(null);
        }
        if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], \JoliCode\Harvest\Api\Model\TimeEntryExternalReference::class, 'json', $context));
            unset($data['external_reference']);
        } elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
            $object->setExternalReference(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \JoliCode\Harvest\Api\Model\TimeEntryInvoice::class, 'json', $context));
            unset($data['invoice']);
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('hours', $data) && null !== $data['hours']) {
            $object->setHours($data['hours']);
            unset($data['hours']);
        } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
            $object->setHours(null);
        }
        if (\array_key_exists('hours_without_timer', $data) && null !== $data['hours_without_timer']) {
            $object->setHoursWithoutTimer($data['hours_without_timer']);
            unset($data['hours_without_timer']);
        } elseif (\array_key_exists('hours_without_timer', $data) && null === $data['hours_without_timer']) {
            $object->setHoursWithoutTimer(null);
        }
        if (\array_key_exists('rounded_hours', $data) && null !== $data['rounded_hours']) {
            $object->setRoundedHours($data['rounded_hours']);
            unset($data['rounded_hours']);
        } elseif (\array_key_exists('rounded_hours', $data) && null === $data['rounded_hours']) {
            $object->setRoundedHours(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('is_locked', $data) && null !== $data['is_locked']) {
            $object->setIsLocked($data['is_locked']);
            unset($data['is_locked']);
        } elseif (\array_key_exists('is_locked', $data) && null === $data['is_locked']) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('locked_reason', $data) && null !== $data['locked_reason']) {
            $object->setLockedReason($data['locked_reason']);
            unset($data['locked_reason']);
        } elseif (\array_key_exists('locked_reason', $data) && null === $data['locked_reason']) {
            $object->setLockedReason(null);
        }
        if (\array_key_exists('is_closed', $data) && null !== $data['is_closed']) {
            $object->setIsClosed($data['is_closed']);
            unset($data['is_closed']);
        } elseif (\array_key_exists('is_closed', $data) && null === $data['is_closed']) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('approval_status', $data) && null !== $data['approval_status']) {
            $object->setApprovalStatus($data['approval_status']);
            unset($data['approval_status']);
        } elseif (\array_key_exists('approval_status', $data) && null === $data['approval_status']) {
            $object->setApprovalStatus(null);
        }
        if (\array_key_exists('is_billed', $data) && null !== $data['is_billed']) {
            $object->setIsBilled($data['is_billed']);
            unset($data['is_billed']);
        } elseif (\array_key_exists('is_billed', $data) && null === $data['is_billed']) {
            $object->setIsBilled(null);
        }
        if (\array_key_exists('timer_started_at', $data) && null !== $data['timer_started_at']) {
            $object->setTimerStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['timer_started_at']));
            unset($data['timer_started_at']);
        } elseif (\array_key_exists('timer_started_at', $data) && null === $data['timer_started_at']) {
            $object->setTimerStartedAt(null);
        }
        if (\array_key_exists('started_time', $data) && null !== $data['started_time']) {
            $object->setStartedTime($data['started_time']);
            unset($data['started_time']);
        } elseif (\array_key_exists('started_time', $data) && null === $data['started_time']) {
            $object->setStartedTime(null);
        }
        if (\array_key_exists('ended_time', $data) && null !== $data['ended_time']) {
            $object->setEndedTime($data['ended_time']);
            unset($data['ended_time']);
        } elseif (\array_key_exists('ended_time', $data) && null === $data['ended_time']) {
            $object->setEndedTime(null);
        }
        if (\array_key_exists('is_running', $data) && null !== $data['is_running']) {
            $object->setIsRunning($data['is_running']);
            unset($data['is_running']);
        } elseif (\array_key_exists('is_running', $data) && null === $data['is_running']) {
            $object->setIsRunning(null);
        }
        if (\array_key_exists('billable', $data) && null !== $data['billable']) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        } elseif (\array_key_exists('billable', $data) && null === $data['billable']) {
            $object->setBillable(null);
        }
        if (\array_key_exists('budgeted', $data) && null !== $data['budgeted']) {
            $object->setBudgeted($data['budgeted']);
            unset($data['budgeted']);
        } elseif (\array_key_exists('budgeted', $data) && null === $data['budgeted']) {
            $object->setBudgeted(null);
        }
        if (\array_key_exists('billable_rate', $data) && null !== $data['billable_rate']) {
            $object->setBillableRate($data['billable_rate']);
            unset($data['billable_rate']);
        } elseif (\array_key_exists('billable_rate', $data) && null === $data['billable_rate']) {
            $object->setBillableRate(null);
        }
        if (\array_key_exists('cost_rate', $data) && null !== $data['cost_rate']) {
            $object->setCostRate($data['cost_rate']);
            unset($data['cost_rate']);
        } elseif (\array_key_exists('cost_rate', $data) && null === $data['cost_rate']) {
            $object->setCostRate(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
            unset($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
            unset($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('spentDate') && null !== $data->getSpentDate()) {
            $dataArray['spent_date'] = $data->getSpentDate()->format('Y-m-d');
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        }
        if ($data->isInitialized('userAssignment') && null !== $data->getUserAssignment()) {
            $value = $data->getUserAssignment();
            if (\is_object($data->getUserAssignment())) {
                $value = $this->normalizer->normalize($data->getUserAssignment(), 'json', $context);
            } elseif (null === $data->getUserAssignment()) {
                $value = $data->getUserAssignment();
            }
            $dataArray['user_assignment'] = $value;
        }
        if ($data->isInitialized('client') && null !== $data->getClient()) {
            $dataArray['client'] = $this->normalizer->normalize($data->getClient(), 'json', $context);
        }
        if ($data->isInitialized('project') && null !== $data->getProject()) {
            $dataArray['project'] = $this->normalizer->normalize($data->getProject(), 'json', $context);
        }
        if ($data->isInitialized('task') && null !== $data->getTask()) {
            $dataArray['task'] = $this->normalizer->normalize($data->getTask(), 'json', $context);
        }
        if ($data->isInitialized('taskAssignment') && null !== $data->getTaskAssignment()) {
            $value_1 = $data->getTaskAssignment();
            if (\is_object($data->getTaskAssignment())) {
                $value_1 = $this->normalizer->normalize($data->getTaskAssignment(), 'json', $context);
            } elseif (null === $data->getTaskAssignment()) {
                $value_1 = $data->getTaskAssignment();
            }
            $dataArray['task_assignment'] = $value_1;
        }
        if ($data->isInitialized('externalReference') && null !== $data->getExternalReference()) {
            $dataArray['external_reference'] = $this->normalizer->normalize($data->getExternalReference(), 'json', $context);
        }
        if ($data->isInitialized('invoice') && null !== $data->getInvoice()) {
            $dataArray['invoice'] = $this->normalizer->normalize($data->getInvoice(), 'json', $context);
        }
        if ($data->isInitialized('hours') && null !== $data->getHours()) {
            $dataArray['hours'] = $data->getHours();
        }
        if ($data->isInitialized('hoursWithoutTimer') && null !== $data->getHoursWithoutTimer()) {
            $dataArray['hours_without_timer'] = $data->getHoursWithoutTimer();
        }
        if ($data->isInitialized('roundedHours') && null !== $data->getRoundedHours()) {
            $dataArray['rounded_hours'] = $data->getRoundedHours();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('isLocked') && null !== $data->getIsLocked()) {
            $dataArray['is_locked'] = $data->getIsLocked();
        }
        if ($data->isInitialized('lockedReason') && null !== $data->getLockedReason()) {
            $dataArray['locked_reason'] = $data->getLockedReason();
        }
        if ($data->isInitialized('isClosed') && null !== $data->getIsClosed()) {
            $dataArray['is_closed'] = $data->getIsClosed();
        }
        if ($data->isInitialized('approvalStatus') && null !== $data->getApprovalStatus()) {
            $dataArray['approval_status'] = $data->getApprovalStatus();
        }
        if ($data->isInitialized('isBilled') && null !== $data->getIsBilled()) {
            $dataArray['is_billed'] = $data->getIsBilled();
        }
        if ($data->isInitialized('timerStartedAt') && null !== $data->getTimerStartedAt()) {
            $dataArray['timer_started_at'] = $data->getTimerStartedAt()->format('Y-m-d\TH:i:s\Z');
        }
        if ($data->isInitialized('startedTime') && null !== $data->getStartedTime()) {
            $dataArray['started_time'] = $data->getStartedTime();
        }
        if ($data->isInitialized('endedTime') && null !== $data->getEndedTime()) {
            $dataArray['ended_time'] = $data->getEndedTime();
        }
        if ($data->isInitialized('isRunning') && null !== $data->getIsRunning()) {
            $dataArray['is_running'] = $data->getIsRunning();
        }
        if ($data->isInitialized('billable') && null !== $data->getBillable()) {
            $dataArray['billable'] = $data->getBillable();
        }
        if ($data->isInitialized('budgeted') && null !== $data->getBudgeted()) {
            $dataArray['budgeted'] = $data->getBudgeted();
        }
        if ($data->isInitialized('billableRate') && null !== $data->getBillableRate()) {
            $dataArray['billable_rate'] = $data->getBillableRate();
        }
        if ($data->isInitialized('costRate') && null !== $data->getCostRate()) {
            $dataArray['cost_rate'] = $data->getCostRate();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\TimeEntry::class => false];
    }
}

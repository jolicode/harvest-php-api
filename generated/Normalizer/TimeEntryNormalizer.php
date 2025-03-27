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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('spentDate') && null !== $object->getSpentDate()) {
                $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            if ($object->isInitialized('userAssignment') && null !== $object->getUserAssignment()) {
                $value = $object->getUserAssignment();
                if (\is_object($object->getUserAssignment())) {
                    $value = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
                } elseif (null === $object->getUserAssignment()) {
                    $value = $object->getUserAssignment();
                }
                $data['user_assignment'] = $value;
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('task') && null !== $object->getTask()) {
                $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
            }
            if ($object->isInitialized('taskAssignment') && null !== $object->getTaskAssignment()) {
                $value_1 = $object->getTaskAssignment();
                if (\is_object($object->getTaskAssignment())) {
                    $value_1 = $this->normalizer->normalize($object->getTaskAssignment(), 'json', $context);
                } elseif (null === $object->getTaskAssignment()) {
                    $value_1 = $object->getTaskAssignment();
                }
                $data['task_assignment'] = $value_1;
            }
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
            }
            if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
                $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
            }
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('hoursWithoutTimer') && null !== $object->getHoursWithoutTimer()) {
                $data['hours_without_timer'] = $object->getHoursWithoutTimer();
            }
            if ($object->isInitialized('roundedHours') && null !== $object->getRoundedHours()) {
                $data['rounded_hours'] = $object->getRoundedHours();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('isLocked') && null !== $object->getIsLocked()) {
                $data['is_locked'] = $object->getIsLocked();
            }
            if ($object->isInitialized('lockedReason') && null !== $object->getLockedReason()) {
                $data['locked_reason'] = $object->getLockedReason();
            }
            if ($object->isInitialized('isClosed') && null !== $object->getIsClosed()) {
                $data['is_closed'] = $object->getIsClosed();
            }
            if ($object->isInitialized('isBilled') && null !== $object->getIsBilled()) {
                $data['is_billed'] = $object->getIsBilled();
            }
            if ($object->isInitialized('timerStartedAt') && null !== $object->getTimerStartedAt()) {
                $data['timer_started_at'] = $object->getTimerStartedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('startedTime') && null !== $object->getStartedTime()) {
                $data['started_time'] = $object->getStartedTime();
            }
            if ($object->isInitialized('endedTime') && null !== $object->getEndedTime()) {
                $data['ended_time'] = $object->getEndedTime();
            }
            if ($object->isInitialized('isRunning') && null !== $object->getIsRunning()) {
                $data['is_running'] = $object->getIsRunning();
            }
            if ($object->isInitialized('billable') && null !== $object->getBillable()) {
                $data['billable'] = $object->getBillable();
            }
            if ($object->isInitialized('budgeted') && null !== $object->getBudgeted()) {
                $data['budgeted'] = $object->getBudgeted();
            }
            if ($object->isInitialized('billableRate') && null !== $object->getBillableRate()) {
                $data['billable_rate'] = $object->getBillableRate();
            }
            if ($object->isInitialized('costRate') && null !== $object->getCostRate()) {
                $data['cost_rate'] = $object->getCostRate();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Harvest\Api\Model\TimeEntry::class => false];
        }
    }
} else {
    class TimeEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\TimeEntry::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\TimeEntry::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
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

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('spentDate') && null !== $object->getSpentDate()) {
                $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }
            if ($object->isInitialized('userAssignment') && null !== $object->getUserAssignment()) {
                $value = $object->getUserAssignment();
                if (\is_object($object->getUserAssignment())) {
                    $value = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
                } elseif (null === $object->getUserAssignment()) {
                    $value = $object->getUserAssignment();
                }
                $data['user_assignment'] = $value;
            }
            if ($object->isInitialized('client') && null !== $object->getClient()) {
                $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
            }
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('task') && null !== $object->getTask()) {
                $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
            }
            if ($object->isInitialized('taskAssignment') && null !== $object->getTaskAssignment()) {
                $value_1 = $object->getTaskAssignment();
                if (\is_object($object->getTaskAssignment())) {
                    $value_1 = $this->normalizer->normalize($object->getTaskAssignment(), 'json', $context);
                } elseif (null === $object->getTaskAssignment()) {
                    $value_1 = $object->getTaskAssignment();
                }
                $data['task_assignment'] = $value_1;
            }
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
            }
            if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
                $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
            }
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('hoursWithoutTimer') && null !== $object->getHoursWithoutTimer()) {
                $data['hours_without_timer'] = $object->getHoursWithoutTimer();
            }
            if ($object->isInitialized('roundedHours') && null !== $object->getRoundedHours()) {
                $data['rounded_hours'] = $object->getRoundedHours();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('isLocked') && null !== $object->getIsLocked()) {
                $data['is_locked'] = $object->getIsLocked();
            }
            if ($object->isInitialized('lockedReason') && null !== $object->getLockedReason()) {
                $data['locked_reason'] = $object->getLockedReason();
            }
            if ($object->isInitialized('isClosed') && null !== $object->getIsClosed()) {
                $data['is_closed'] = $object->getIsClosed();
            }
            if ($object->isInitialized('isBilled') && null !== $object->getIsBilled()) {
                $data['is_billed'] = $object->getIsBilled();
            }
            if ($object->isInitialized('timerStartedAt') && null !== $object->getTimerStartedAt()) {
                $data['timer_started_at'] = $object->getTimerStartedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('startedTime') && null !== $object->getStartedTime()) {
                $data['started_time'] = $object->getStartedTime();
            }
            if ($object->isInitialized('endedTime') && null !== $object->getEndedTime()) {
                $data['ended_time'] = $object->getEndedTime();
            }
            if ($object->isInitialized('isRunning') && null !== $object->getIsRunning()) {
                $data['is_running'] = $object->getIsRunning();
            }
            if ($object->isInitialized('billable') && null !== $object->getBillable()) {
                $data['billable'] = $object->getBillable();
            }
            if ($object->isInitialized('budgeted') && null !== $object->getBudgeted()) {
                $data['budgeted'] = $object->getBudgeted();
            }
            if ($object->isInitialized('billableRate') && null !== $object->getBillableRate()) {
                $data['billable_rate'] = $object->getBillableRate();
            }
            if ($object->isInitialized('costRate') && null !== $object->getCostRate()) {
                $data['cost_rate'] = $object->getCostRate();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Harvest\Api\Model\TimeEntry::class => false];
        }
    }
}

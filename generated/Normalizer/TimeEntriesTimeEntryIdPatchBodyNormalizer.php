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
    class TimeEntriesTimeEntryIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody();
            if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
                $data['hours'] = (float) $data['hours'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
                $object->setTaskId($data['task_id']);
                unset($data['task_id']);
            } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
                $object->setTaskId(null);
            }
            if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
                $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
                unset($data['spent_date']);
            } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
                $object->setSpentDate(null);
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
            if (\array_key_exists('hours', $data) && null !== $data['hours']) {
                $object->setHours($data['hours']);
                unset($data['hours']);
            } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
                $object->setHours(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
                $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBodyExternalReference', 'json', $context));
                unset($data['external_reference']);
            } elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
                $object->setExternalReference(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('taskId') && null !== $object->getTaskId()) {
                $data['task_id'] = $object->getTaskId();
            }
            if ($object->isInitialized('spentDate') && null !== $object->getSpentDate()) {
                $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
            }
            if ($object->isInitialized('startedTime') && null !== $object->getStartedTime()) {
                $data['started_time'] = $object->getStartedTime();
            }
            if ($object->isInitialized('endedTime') && null !== $object->getEndedTime()) {
                $data['ended_time'] = $object->getEndedTime();
            }
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' => false];
        }
    }
} else {
    class TimeEntriesTimeEntryIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\TimeEntriesTimeEntryIdPatchBody();
            if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
                $data['hours'] = (float) $data['hours'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
                $object->setTaskId($data['task_id']);
                unset($data['task_id']);
            } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
                $object->setTaskId(null);
            }
            if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
                $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
                unset($data['spent_date']);
            } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
                $object->setSpentDate(null);
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
            if (\array_key_exists('hours', $data) && null !== $data['hours']) {
                $object->setHours($data['hours']);
                unset($data['hours']);
            } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
                $object->setHours(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
                $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBodyExternalReference', 'json', $context));
                unset($data['external_reference']);
            } elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
                $object->setExternalReference(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('taskId') && null !== $object->getTaskId()) {
                $data['task_id'] = $object->getTaskId();
            }
            if ($object->isInitialized('spentDate') && null !== $object->getSpentDate()) {
                $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
            }
            if ($object->isInitialized('startedTime') && null !== $object->getStartedTime()) {
                $data['started_time'] = $object->getStartedTime();
            }
            if ($object->isInitialized('endedTime') && null !== $object->getEndedTime()) {
                $data['ended_time'] = $object->getEndedTime();
            }
            if ($object->isInitialized('hours') && null !== $object->getHours()) {
                $data['hours'] = $object->getHours();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\TimeEntriesTimeEntryIdPatchBody' => false];
        }
    }
}

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
    class TaskAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\TaskAssignment();
            if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
                $data['hourly_rate'] = (float) $data['hourly_rate'];
            }
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
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
            if (\array_key_exists('project', $data) && null !== $data['project']) {
                $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentProject', 'json', $context));
                unset($data['project']);
            } elseif (\array_key_exists('project', $data) && null === $data['project']) {
                $object->setProject(null);
            }
            if (\array_key_exists('task', $data) && null !== $data['task']) {
                $object->setTask($this->denormalizer->denormalize($data['task'], 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentTask', 'json', $context));
                unset($data['task']);
            } elseif (\array_key_exists('task', $data) && null === $data['task']) {
                $object->setTask(null);
            }
            if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('billable', $data) && null !== $data['billable']) {
                $object->setBillable($data['billable']);
                unset($data['billable']);
            } elseif (\array_key_exists('billable', $data) && null === $data['billable']) {
                $object->setBillable(null);
            }
            if (\array_key_exists('hourly_rate', $data) && null !== $data['hourly_rate']) {
                $object->setHourlyRate($data['hourly_rate']);
                unset($data['hourly_rate']);
            } elseif (\array_key_exists('hourly_rate', $data) && null === $data['hourly_rate']) {
                $object->setHourlyRate(null);
            }
            if (\array_key_exists('budget', $data) && null !== $data['budget']) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
                $object->setBudget(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('task') && null !== $object->getTask()) {
                $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('billable') && null !== $object->getBillable()) {
                $data['billable'] = $object->getBillable();
            }
            if ($object->isInitialized('hourlyRate') && null !== $object->getHourlyRate()) {
                $data['hourly_rate'] = $object->getHourlyRate();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
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
            return ['JoliCode\\Harvest\\Api\\Model\\TaskAssignment' => false];
        }
    }
} else {
    class TaskAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment' === $data::class;
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
            $object = new \JoliCode\Harvest\Api\Model\TaskAssignment();
            if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
                $data['hourly_rate'] = (float) $data['hourly_rate'];
            }
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
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
            if (\array_key_exists('project', $data) && null !== $data['project']) {
                $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentProject', 'json', $context));
                unset($data['project']);
            } elseif (\array_key_exists('project', $data) && null === $data['project']) {
                $object->setProject(null);
            }
            if (\array_key_exists('task', $data) && null !== $data['task']) {
                $object->setTask($this->denormalizer->denormalize($data['task'], 'JoliCode\\Harvest\\Api\\Model\\TaskAssignmentTask', 'json', $context));
                unset($data['task']);
            } elseif (\array_key_exists('task', $data) && null === $data['task']) {
                $object->setTask(null);
            }
            if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
                $object->setIsActive($data['is_active']);
                unset($data['is_active']);
            } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('billable', $data) && null !== $data['billable']) {
                $object->setBillable($data['billable']);
                unset($data['billable']);
            } elseif (\array_key_exists('billable', $data) && null === $data['billable']) {
                $object->setBillable(null);
            }
            if (\array_key_exists('hourly_rate', $data) && null !== $data['hourly_rate']) {
                $object->setHourlyRate($data['hourly_rate']);
                unset($data['hourly_rate']);
            } elseif (\array_key_exists('hourly_rate', $data) && null === $data['hourly_rate']) {
                $object->setHourlyRate(null);
            }
            if (\array_key_exists('budget', $data) && null !== $data['budget']) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            } elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
                $object->setBudget(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('task') && null !== $object->getTask()) {
                $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('billable') && null !== $object->getBillable()) {
                $data['billable'] = $object->getBillable();
            }
            if ($object->isInitialized('hourlyRate') && null !== $object->getHourlyRate()) {
                $data['hourly_rate'] = $object->getHourlyRate();
            }
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
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
            return ['JoliCode\\Harvest\\Api\\Model\\TaskAssignment' => false];
        }
    }
}

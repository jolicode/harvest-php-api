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
    class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\CompanyPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('wants_timestamp_timers', $data) && null !== $data['wants_timestamp_timers']) {
                $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
                unset($data['wants_timestamp_timers']);
            } elseif (\array_key_exists('wants_timestamp_timers', $data) && null === $data['wants_timestamp_timers']) {
                $object->setWantsTimestampTimers(null);
            }
            if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
                unset($data['weekly_capacity']);
            } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
                $object->setWeeklyCapacity(null);
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
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
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
            return ['JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' => false];
        }
    }
} else {
    class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' === $data::class;
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
            $object = new \JoliCode\Harvest\Api\Model\CompanyPatchBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('wants_timestamp_timers', $data) && null !== $data['wants_timestamp_timers']) {
                $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
                unset($data['wants_timestamp_timers']);
            } elseif (\array_key_exists('wants_timestamp_timers', $data) && null === $data['wants_timestamp_timers']) {
                $object->setWantsTimestampTimers(null);
            }
            if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
                unset($data['weekly_capacity']);
            } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
                $object->setWeeklyCapacity(null);
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
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
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
            return ['JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody' => false];
        }
    }
}

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

class TasksTaskIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody();
        if (\array_key_exists('default_hourly_rate', $data) && \is_int($data['default_hourly_rate'])) {
            $data['default_hourly_rate'] = (float) $data['default_hourly_rate'];
        }
        if (\array_key_exists('billable_by_default', $data) && \is_int($data['billable_by_default'])) {
            $data['billable_by_default'] = (bool) $data['billable_by_default'];
        }
        if (\array_key_exists('is_default', $data) && \is_int($data['is_default'])) {
            $data['is_default'] = (bool) $data['is_default'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('billable_by_default', $data) && null !== $data['billable_by_default']) {
            $object->setBillableByDefault($data['billable_by_default']);
            unset($data['billable_by_default']);
        } elseif (\array_key_exists('billable_by_default', $data) && null === $data['billable_by_default']) {
            $object->setBillableByDefault(null);
        }
        if (\array_key_exists('default_hourly_rate', $data) && null !== $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate($data['default_hourly_rate']);
            unset($data['default_hourly_rate']);
        } elseif (\array_key_exists('default_hourly_rate', $data) && null === $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate(null);
        }
        if (\array_key_exists('is_default', $data) && null !== $data['is_default']) {
            $object->setIsDefault($data['is_default']);
            unset($data['is_default']);
        } elseif (\array_key_exists('is_default', $data) && null === $data['is_default']) {
            $object->setIsDefault(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('billableByDefault') && null !== $data->getBillableByDefault()) {
            $dataArray['billable_by_default'] = $data->getBillableByDefault();
        }
        if ($data->isInitialized('defaultHourlyRate') && null !== $data->getDefaultHourlyRate()) {
            $dataArray['default_hourly_rate'] = $data->getDefaultHourlyRate();
        }
        if ($data->isInitialized('isDefault') && null !== $data->getIsDefault()) {
            $dataArray['is_default'] = $data->getIsDefault();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
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
        return [\JoliCode\Harvest\Api\Model\TasksTaskIdPatchBody::class => false];
    }
}

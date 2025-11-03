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

class ProjectsProjectIdUserAssignmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody();
        if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
            $data['hourly_rate'] = (float) $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
            $data['budget'] = (float) $data['budget'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('is_project_manager', $data) && \is_int($data['is_project_manager'])) {
            $data['is_project_manager'] = (bool) $data['is_project_manager'];
        }
        if (\array_key_exists('use_default_rates', $data) && \is_int($data['use_default_rates'])) {
            $data['use_default_rates'] = (bool) $data['use_default_rates'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_project_manager', $data) && null !== $data['is_project_manager']) {
            $object->setIsProjectManager($data['is_project_manager']);
            unset($data['is_project_manager']);
        } elseif (\array_key_exists('is_project_manager', $data) && null === $data['is_project_manager']) {
            $object->setIsProjectManager(null);
        }
        if (\array_key_exists('use_default_rates', $data) && null !== $data['use_default_rates']) {
            $object->setUseDefaultRates($data['use_default_rates']);
            unset($data['use_default_rates']);
        } elseif (\array_key_exists('use_default_rates', $data) && null === $data['use_default_rates']) {
            $object->setUseDefaultRates(null);
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
        $dataArray['user_id'] = $data->getUserId();
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('isProjectManager') && null !== $data->getIsProjectManager()) {
            $dataArray['is_project_manager'] = $data->getIsProjectManager();
        }
        if ($data->isInitialized('useDefaultRates') && null !== $data->getUseDefaultRates()) {
            $dataArray['use_default_rates'] = $data->getUseDefaultRates();
        }
        if ($data->isInitialized('hourlyRate') && null !== $data->getHourlyRate()) {
            $dataArray['hourly_rate'] = $data->getHourlyRate();
        }
        if ($data->isInitialized('budget') && null !== $data->getBudget()) {
            $dataArray['budget'] = $data->getBudget();
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
        return [\JoliCode\Harvest\Api\Model\ProjectsProjectIdUserAssignmentsPostBody::class => false];
    }
}

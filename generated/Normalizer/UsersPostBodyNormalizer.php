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

class UsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\UsersPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\UsersPostBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\UsersPostBody();
        if (\array_key_exists('default_hourly_rate', $data) && \is_int($data['default_hourly_rate'])) {
            $data['default_hourly_rate'] = (float) $data['default_hourly_rate'];
        }
        if (\array_key_exists('cost_rate', $data) && \is_int($data['cost_rate'])) {
            $data['cost_rate'] = (float) $data['cost_rate'];
        }
        if (\array_key_exists('has_access_to_all_future_projects', $data) && \is_int($data['has_access_to_all_future_projects'])) {
            $data['has_access_to_all_future_projects'] = (bool) $data['has_access_to_all_future_projects'];
        }
        if (\array_key_exists('is_contractor', $data) && \is_int($data['is_contractor'])) {
            $data['is_contractor'] = (bool) $data['is_contractor'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $object->setFirstName($data['first_name']);
            unset($data['first_name']);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $object->setLastName($data['last_name']);
            unset($data['last_name']);
        } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
            unset($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('has_access_to_all_future_projects', $data) && null !== $data['has_access_to_all_future_projects']) {
            $object->setHasAccessToAllFutureProjects($data['has_access_to_all_future_projects']);
            unset($data['has_access_to_all_future_projects']);
        } elseif (\array_key_exists('has_access_to_all_future_projects', $data) && null === $data['has_access_to_all_future_projects']) {
            $object->setHasAccessToAllFutureProjects(null);
        }
        if (\array_key_exists('is_contractor', $data) && null !== $data['is_contractor']) {
            $object->setIsContractor($data['is_contractor']);
            unset($data['is_contractor']);
        } elseif (\array_key_exists('is_contractor', $data) && null === $data['is_contractor']) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
            unset($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('default_hourly_rate', $data) && null !== $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate($data['default_hourly_rate']);
            unset($data['default_hourly_rate']);
        } elseif (\array_key_exists('default_hourly_rate', $data) && null === $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate(null);
        }
        if (\array_key_exists('cost_rate', $data) && null !== $data['cost_rate']) {
            $object->setCostRate($data['cost_rate']);
            unset($data['cost_rate']);
        } elseif (\array_key_exists('cost_rate', $data) && null === $data['cost_rate']) {
            $object->setCostRate(null);
        }
        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
            unset($data['roles']);
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('access_roles', $data) && null !== $data['access_roles']) {
            $values_1 = [];
            foreach ($data['access_roles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAccessRoles($values_1);
            unset($data['access_roles']);
        } elseif (\array_key_exists('access_roles', $data) && null === $data['access_roles']) {
            $object->setAccessRoles(null);
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
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['email'] = $data->getEmail();
        if ($data->isInitialized('timezone') && null !== $data->getTimezone()) {
            $dataArray['timezone'] = $data->getTimezone();
        }
        if ($data->isInitialized('hasAccessToAllFutureProjects') && null !== $data->getHasAccessToAllFutureProjects()) {
            $dataArray['has_access_to_all_future_projects'] = $data->getHasAccessToAllFutureProjects();
        }
        if ($data->isInitialized('isContractor') && null !== $data->getIsContractor()) {
            $dataArray['is_contractor'] = $data->getIsContractor();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('weeklyCapacity') && null !== $data->getWeeklyCapacity()) {
            $dataArray['weekly_capacity'] = $data->getWeeklyCapacity();
        }
        if ($data->isInitialized('defaultHourlyRate') && null !== $data->getDefaultHourlyRate()) {
            $dataArray['default_hourly_rate'] = $data->getDefaultHourlyRate();
        }
        if ($data->isInitialized('costRate') && null !== $data->getCostRate()) {
            $dataArray['cost_rate'] = $data->getCostRate();
        }
        if ($data->isInitialized('roles') && null !== $data->getRoles()) {
            $values = [];
            foreach ($data->getRoles() as $value) {
                $values[] = $value;
            }
            $dataArray['roles'] = $values;
        }
        if ($data->isInitialized('accessRoles') && null !== $data->getAccessRoles()) {
            $values_1 = [];
            foreach ($data->getAccessRoles() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['access_roles'] = $values_1;
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
        return [\JoliCode\Harvest\Api\Model\UsersPostBody::class => false];
    }
}

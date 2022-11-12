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

class UsersUserIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdPatchBody' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdPatchBody' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\UsersUserIdPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $object->setFirstName($data['first_name']);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $object->setLastName($data['last_name']);
        } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('has_access_to_all_future_projects', $data) && null !== $data['has_access_to_all_future_projects']) {
            $object->setHasAccessToAllFutureProjects($data['has_access_to_all_future_projects']);
        } elseif (\array_key_exists('has_access_to_all_future_projects', $data) && null === $data['has_access_to_all_future_projects']) {
            $object->setHasAccessToAllFutureProjects(null);
        }
        if (\array_key_exists('is_contractor', $data) && null !== $data['is_contractor']) {
            $object->setIsContractor($data['is_contractor']);
        } elseif (\array_key_exists('is_contractor', $data) && null === $data['is_contractor']) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('default_hourly_rate', $data) && null !== $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate($data['default_hourly_rate']);
        } elseif (\array_key_exists('default_hourly_rate', $data) && null === $data['default_hourly_rate']) {
            $object->setDefaultHourlyRate(null);
        }
        if (\array_key_exists('cost_rate', $data) && null !== $data['cost_rate']) {
            $object->setCostRate($data['cost_rate']);
        } elseif (\array_key_exists('cost_rate', $data) && null === $data['cost_rate']) {
            $object->setCostRate(null);
        }
        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('access_roles', $data) && null !== $data['access_roles']) {
            $values_1 = [];
            foreach ($data['access_roles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAccessRoles($values_1);
        } elseif (\array_key_exists('access_roles', $data) && null === $data['access_roles']) {
            $object->setAccessRoles(null);
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
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        if (null !== $object->getHasAccessToAllFutureProjects()) {
            $data['has_access_to_all_future_projects'] = $object->getHasAccessToAllFutureProjects();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data['default_hourly_rate'] = $object->getDefaultHourlyRate();
        }
        if (null !== $object->getCostRate()) {
            $data['cost_rate'] = $object->getCostRate();
        }
        if (null !== $object->getRoles()) {
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getAccessRoles()) {
            $values_1 = [];
            foreach ($object->getAccessRoles() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['access_roles'] = $values_1;
        }

        return $data;
    }
}

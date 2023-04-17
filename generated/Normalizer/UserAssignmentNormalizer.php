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

class UserAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\UserAssignment' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\UserAssignment' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\UserAssignment();
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
            $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentProject', 'json', $context));
            unset($data['project']);
        } elseif (\array_key_exists('project', $data) && null === $data['project']) {
            $object->setProject(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Harvest\\Api\\Model\\UserAssignmentUser', 'json', $context));
            unset($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
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
     * @param mixed      $object
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
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if ($object->isInitialized('isProjectManager') && null !== $object->getIsProjectManager()) {
            $data['is_project_manager'] = $object->getIsProjectManager();
        }
        if ($object->isInitialized('useDefaultRates') && null !== $object->getUseDefaultRates()) {
            $data['use_default_rates'] = $object->getUseDefaultRates();
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
}

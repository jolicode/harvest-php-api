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

class TimeReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeReportsResult' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\TimeReportsResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('client_name', $data) && null !== $data['client_name']) {
            $object->setClientName($data['client_name']);
        } elseif (\array_key_exists('client_name', $data) && null === $data['client_name']) {
            $object->setClientName(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('project_name', $data) && null !== $data['project_name']) {
            $object->setProjectName($data['project_name']);
        } elseif (\array_key_exists('project_name', $data) && null === $data['project_name']) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
            $object->setTaskId($data['task_id']);
        } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('task_name', $data) && null !== $data['task_name']) {
            $object->setTaskName($data['task_name']);
        } elseif (\array_key_exists('task_name', $data) && null === $data['task_name']) {
            $object->setTaskName(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('user_name', $data) && null !== $data['user_name']) {
            $object->setUserName($data['user_name']);
        } elseif (\array_key_exists('user_name', $data) && null === $data['user_name']) {
            $object->setUserName(null);
        }
        if (\array_key_exists('is_contractor', $data) && null !== $data['is_contractor']) {
            $object->setIsContractor($data['is_contractor']);
        } elseif (\array_key_exists('is_contractor', $data) && null === $data['is_contractor']) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('total_hours', $data) && null !== $data['total_hours']) {
            $object->setTotalHours($data['total_hours']);
        } elseif (\array_key_exists('total_hours', $data) && null === $data['total_hours']) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('billable_hours', $data) && null !== $data['billable_hours']) {
            $object->setBillableHours($data['billable_hours']);
        } elseif (\array_key_exists('billable_hours', $data) && null === $data['billable_hours']) {
            $object->setBillableHours(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('billable_amount', $data) && null !== $data['billable_amount']) {
            $object->setBillableAmount($data['billable_amount']);
        } elseif (\array_key_exists('billable_amount', $data) && null === $data['billable_amount']) {
            $object->setBillableAmount(null);
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
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getTaskId()) {
            $data['task_id'] = $object->getTaskId();
        }
        if (null !== $object->getTaskName()) {
            $data['task_name'] = $object->getTaskName();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data['user_name'] = $object->getUserName();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if (null !== $object->getBillableHours()) {
            $data['billable_hours'] = $object->getBillableHours();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getBillableAmount()) {
            $data['billable_amount'] = $object->getBillableAmount();
        }

        return $data;
    }
}

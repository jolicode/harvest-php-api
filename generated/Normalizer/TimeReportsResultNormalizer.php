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

class TimeReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\TimeReportsResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\TimeReportsResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeReportsResult();
        if (\array_key_exists('total_hours', $data) && \is_int($data['total_hours'])) {
            $data['total_hours'] = (float) $data['total_hours'];
        }
        if (\array_key_exists('billable_hours', $data) && \is_int($data['billable_hours'])) {
            $data['billable_hours'] = (float) $data['billable_hours'];
        }
        if (\array_key_exists('billable_amount', $data) && \is_int($data['billable_amount'])) {
            $data['billable_amount'] = (float) $data['billable_amount'];
        }
        if (\array_key_exists('is_contractor', $data) && \is_int($data['is_contractor'])) {
            $data['is_contractor'] = (bool) $data['is_contractor'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
            unset($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('client_name', $data) && null !== $data['client_name']) {
            $object->setClientName($data['client_name']);
            unset($data['client_name']);
        } elseif (\array_key_exists('client_name', $data) && null === $data['client_name']) {
            $object->setClientName(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('project_name', $data) && null !== $data['project_name']) {
            $object->setProjectName($data['project_name']);
            unset($data['project_name']);
        } elseif (\array_key_exists('project_name', $data) && null === $data['project_name']) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
            $object->setTaskId($data['task_id']);
            unset($data['task_id']);
        } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('task_name', $data) && null !== $data['task_name']) {
            $object->setTaskName($data['task_name']);
            unset($data['task_name']);
        } elseif (\array_key_exists('task_name', $data) && null === $data['task_name']) {
            $object->setTaskName(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('user_name', $data) && null !== $data['user_name']) {
            $object->setUserName($data['user_name']);
            unset($data['user_name']);
        } elseif (\array_key_exists('user_name', $data) && null === $data['user_name']) {
            $object->setUserName(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
            unset($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('avatar_url', $data) && null !== $data['avatar_url']) {
            $object->setAvatarUrl($data['avatar_url']);
            unset($data['avatar_url']);
        } elseif (\array_key_exists('avatar_url', $data) && null === $data['avatar_url']) {
            $object->setAvatarUrl(null);
        }
        if (\array_key_exists('is_contractor', $data) && null !== $data['is_contractor']) {
            $object->setIsContractor($data['is_contractor']);
            unset($data['is_contractor']);
        } elseif (\array_key_exists('is_contractor', $data) && null === $data['is_contractor']) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('total_hours', $data) && null !== $data['total_hours']) {
            $object->setTotalHours($data['total_hours']);
            unset($data['total_hours']);
        } elseif (\array_key_exists('total_hours', $data) && null === $data['total_hours']) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('billable_hours', $data) && null !== $data['billable_hours']) {
            $object->setBillableHours($data['billable_hours']);
            unset($data['billable_hours']);
        } elseif (\array_key_exists('billable_hours', $data) && null === $data['billable_hours']) {
            $object->setBillableHours(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('billable_amount', $data) && null !== $data['billable_amount']) {
            $object->setBillableAmount($data['billable_amount']);
            unset($data['billable_amount']);
        } elseif (\array_key_exists('billable_amount', $data) && null === $data['billable_amount']) {
            $object->setBillableAmount(null);
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
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['client_id'] = $data->getClientId();
        }
        if ($data->isInitialized('clientName') && null !== $data->getClientName()) {
            $dataArray['client_name'] = $data->getClientName();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['project_id'] = $data->getProjectId();
        }
        if ($data->isInitialized('projectName') && null !== $data->getProjectName()) {
            $dataArray['project_name'] = $data->getProjectName();
        }
        if ($data->isInitialized('taskId') && null !== $data->getTaskId()) {
            $dataArray['task_id'] = $data->getTaskId();
        }
        if ($data->isInitialized('taskName') && null !== $data->getTaskName()) {
            $dataArray['task_name'] = $data->getTaskName();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['user_name'] = $data->getUserName();
        }
        if ($data->isInitialized('weeklyCapacity') && null !== $data->getWeeklyCapacity()) {
            $dataArray['weekly_capacity'] = $data->getWeeklyCapacity();
        }
        if ($data->isInitialized('avatarUrl') && null !== $data->getAvatarUrl()) {
            $dataArray['avatar_url'] = $data->getAvatarUrl();
        }
        if ($data->isInitialized('isContractor') && null !== $data->getIsContractor()) {
            $dataArray['is_contractor'] = $data->getIsContractor();
        }
        if ($data->isInitialized('totalHours') && null !== $data->getTotalHours()) {
            $dataArray['total_hours'] = $data->getTotalHours();
        }
        if ($data->isInitialized('billableHours') && null !== $data->getBillableHours()) {
            $dataArray['billable_hours'] = $data->getBillableHours();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('billableAmount') && null !== $data->getBillableAmount()) {
            $dataArray['billable_amount'] = $data->getBillableAmount();
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
        return [\JoliCode\Harvest\Api\Model\TimeReportsResult::class => false];
    }
}

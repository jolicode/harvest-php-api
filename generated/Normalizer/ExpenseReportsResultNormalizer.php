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

class ExpenseReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\ExpenseReportsResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ExpenseReportsResult();
        if (\array_key_exists('total_amount', $data) && \is_int($data['total_amount'])) {
            $data['total_amount'] = (float) $data['total_amount'];
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
        if (\array_key_exists('expense_category_id', $data) && null !== $data['expense_category_id']) {
            $object->setExpenseCategoryId($data['expense_category_id']);
            unset($data['expense_category_id']);
        } elseif (\array_key_exists('expense_category_id', $data) && null === $data['expense_category_id']) {
            $object->setExpenseCategoryId(null);
        }
        if (\array_key_exists('expense_category_name', $data) && null !== $data['expense_category_name']) {
            $object->setExpenseCategoryName($data['expense_category_name']);
            unset($data['expense_category_name']);
        } elseif (\array_key_exists('expense_category_name', $data) && null === $data['expense_category_name']) {
            $object->setExpenseCategoryName(null);
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
        if (\array_key_exists('is_contractor', $data) && null !== $data['is_contractor']) {
            $object->setIsContractor($data['is_contractor']);
            unset($data['is_contractor']);
        } elseif (\array_key_exists('is_contractor', $data) && null === $data['is_contractor']) {
            $object->setIsContractor(null);
        }
        if (\array_key_exists('total_amount', $data) && null !== $data['total_amount']) {
            $object->setTotalAmount($data['total_amount']);
            unset($data['total_amount']);
        } elseif (\array_key_exists('total_amount', $data) && null === $data['total_amount']) {
            $object->setTotalAmount(null);
        }
        if (\array_key_exists('billable_amount', $data) && null !== $data['billable_amount']) {
            $object->setBillableAmount($data['billable_amount']);
            unset($data['billable_amount']);
        } elseif (\array_key_exists('billable_amount', $data) && null === $data['billable_amount']) {
            $object->setBillableAmount(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
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
        if ($data->isInitialized('expenseCategoryId') && null !== $data->getExpenseCategoryId()) {
            $dataArray['expense_category_id'] = $data->getExpenseCategoryId();
        }
        if ($data->isInitialized('expenseCategoryName') && null !== $data->getExpenseCategoryName()) {
            $dataArray['expense_category_name'] = $data->getExpenseCategoryName();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['user_name'] = $data->getUserName();
        }
        if ($data->isInitialized('isContractor') && null !== $data->getIsContractor()) {
            $dataArray['is_contractor'] = $data->getIsContractor();
        }
        if ($data->isInitialized('totalAmount') && null !== $data->getTotalAmount()) {
            $dataArray['total_amount'] = $data->getTotalAmount();
        }
        if ($data->isInitialized('billableAmount') && null !== $data->getBillableAmount()) {
            $dataArray['billable_amount'] = $data->getBillableAmount();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
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
        return [\JoliCode\Harvest\Api\Model\ExpenseReportsResult::class => false];
    }
}

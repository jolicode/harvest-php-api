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

class ExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\Expense::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\Expense::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Expense();
        if (\array_key_exists('total_cost', $data) && \is_int($data['total_cost'])) {
            $data['total_cost'] = (float) $data['total_cost'];
        }
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (\array_key_exists('is_closed', $data) && \is_int($data['is_closed'])) {
            $data['is_closed'] = (bool) $data['is_closed'];
        }
        if (\array_key_exists('is_locked', $data) && \is_int($data['is_locked'])) {
            $data['is_locked'] = (bool) $data['is_locked'];
        }
        if (\array_key_exists('is_billed', $data) && \is_int($data['is_billed'])) {
            $data['is_billed'] = (bool) $data['is_billed'];
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
        if (\array_key_exists('client', $data) && null !== $data['client']) {
            $object->setClient($this->denormalizer->denormalize($data['client'], \JoliCode\Harvest\Api\Model\ExpenseClient::class, 'json', $context));
            unset($data['client']);
        } elseif (\array_key_exists('client', $data) && null === $data['client']) {
            $object->setClient(null);
        }
        if (\array_key_exists('project', $data) && null !== $data['project']) {
            $object->setProject($this->denormalizer->denormalize($data['project'], \JoliCode\Harvest\Api\Model\ExpenseProject::class, 'json', $context));
            unset($data['project']);
        } elseif (\array_key_exists('project', $data) && null === $data['project']) {
            $object->setProject(null);
        }
        if (\array_key_exists('expense_category', $data) && null !== $data['expense_category']) {
            $object->setExpenseCategory($this->denormalizer->denormalize($data['expense_category'], \JoliCode\Harvest\Api\Model\ExpenseExpenseCategory::class, 'json', $context));
            unset($data['expense_category']);
        } elseif (\array_key_exists('expense_category', $data) && null === $data['expense_category']) {
            $object->setExpenseCategory(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \JoliCode\Harvest\Api\Model\ExpenseUser::class, 'json', $context));
            unset($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_assignment', $data) && null !== $data['user_assignment']) {
            $value = $data['user_assignment'];
            if (\is_array($data['user_assignment'])) {
                $value = $this->denormalizer->denormalize($data['user_assignment'], \JoliCode\Harvest\Api\Model\UserAssignment::class, 'json', $context);
            } elseif (null === $data['user_assignment']) {
                $value = $data['user_assignment'];
            }
            $object->setUserAssignment($value);
            unset($data['user_assignment']);
        } elseif (\array_key_exists('user_assignment', $data) && null === $data['user_assignment']) {
            $object->setUserAssignment(null);
        }
        if (\array_key_exists('receipt', $data) && null !== $data['receipt']) {
            $object->setReceipt($this->denormalizer->denormalize($data['receipt'], \JoliCode\Harvest\Api\Model\ExpenseReceipt::class, 'json', $context));
            unset($data['receipt']);
        } elseif (\array_key_exists('receipt', $data) && null === $data['receipt']) {
            $object->setReceipt(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \JoliCode\Harvest\Api\Model\ExpenseInvoice::class, 'json', $context));
            unset($data['invoice']);
        } elseif (\array_key_exists('invoice', $data) && null === $data['invoice']) {
            $object->setInvoice(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('units', $data) && null !== $data['units']) {
            $object->setUnits($data['units']);
            unset($data['units']);
        } elseif (\array_key_exists('units', $data) && null === $data['units']) {
            $object->setUnits(null);
        }
        if (\array_key_exists('total_cost', $data) && null !== $data['total_cost']) {
            $object->setTotalCost($data['total_cost']);
            unset($data['total_cost']);
        } elseif (\array_key_exists('total_cost', $data) && null === $data['total_cost']) {
            $object->setTotalCost(null);
        }
        if (\array_key_exists('billable', $data) && null !== $data['billable']) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        } elseif (\array_key_exists('billable', $data) && null === $data['billable']) {
            $object->setBillable(null);
        }
        if (\array_key_exists('is_closed', $data) && null !== $data['is_closed']) {
            $object->setIsClosed($data['is_closed']);
            unset($data['is_closed']);
        } elseif (\array_key_exists('is_closed', $data) && null === $data['is_closed']) {
            $object->setIsClosed(null);
        }
        if (\array_key_exists('is_locked', $data) && null !== $data['is_locked']) {
            $object->setIsLocked($data['is_locked']);
            unset($data['is_locked']);
        } elseif (\array_key_exists('is_locked', $data) && null === $data['is_locked']) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('is_billed', $data) && null !== $data['is_billed']) {
            $object->setIsBilled($data['is_billed']);
            unset($data['is_billed']);
        } elseif (\array_key_exists('is_billed', $data) && null === $data['is_billed']) {
            $object->setIsBilled(null);
        }
        if (\array_key_exists('locked_reason', $data) && null !== $data['locked_reason']) {
            $object->setLockedReason($data['locked_reason']);
            unset($data['locked_reason']);
        } elseif (\array_key_exists('locked_reason', $data) && null === $data['locked_reason']) {
            $object->setLockedReason(null);
        }
        if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
            unset($data['spent_date']);
        } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
            unset($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
            unset($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('client') && null !== $data->getClient()) {
            $dataArray['client'] = $this->normalizer->normalize($data->getClient(), 'json', $context);
        }
        if ($data->isInitialized('project') && null !== $data->getProject()) {
            $dataArray['project'] = $this->normalizer->normalize($data->getProject(), 'json', $context);
        }
        if ($data->isInitialized('expenseCategory') && null !== $data->getExpenseCategory()) {
            $dataArray['expense_category'] = $this->normalizer->normalize($data->getExpenseCategory(), 'json', $context);
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        }
        if ($data->isInitialized('userAssignment') && null !== $data->getUserAssignment()) {
            $value = $data->getUserAssignment();
            if (\is_object($data->getUserAssignment())) {
                $value = $this->normalizer->normalize($data->getUserAssignment(), 'json', $context);
            } elseif (null === $data->getUserAssignment()) {
                $value = $data->getUserAssignment();
            }
            $dataArray['user_assignment'] = $value;
        }
        if ($data->isInitialized('receipt') && null !== $data->getReceipt()) {
            $dataArray['receipt'] = $this->normalizer->normalize($data->getReceipt(), 'json', $context);
        }
        if ($data->isInitialized('invoice') && null !== $data->getInvoice()) {
            $dataArray['invoice'] = $this->normalizer->normalize($data->getInvoice(), 'json', $context);
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('units') && null !== $data->getUnits()) {
            $dataArray['units'] = $data->getUnits();
        }
        if ($data->isInitialized('totalCost') && null !== $data->getTotalCost()) {
            $dataArray['total_cost'] = $data->getTotalCost();
        }
        if ($data->isInitialized('billable') && null !== $data->getBillable()) {
            $dataArray['billable'] = $data->getBillable();
        }
        if ($data->isInitialized('isClosed') && null !== $data->getIsClosed()) {
            $dataArray['is_closed'] = $data->getIsClosed();
        }
        if ($data->isInitialized('isLocked') && null !== $data->getIsLocked()) {
            $dataArray['is_locked'] = $data->getIsLocked();
        }
        if ($data->isInitialized('isBilled') && null !== $data->getIsBilled()) {
            $dataArray['is_billed'] = $data->getIsBilled();
        }
        if ($data->isInitialized('lockedReason') && null !== $data->getLockedReason()) {
            $dataArray['locked_reason'] = $data->getLockedReason();
        }
        if ($data->isInitialized('spentDate') && null !== $data->getSpentDate()) {
            $dataArray['spent_date'] = $data->getSpentDate()->format('Y-m-d');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\Expense::class => false];
    }
}

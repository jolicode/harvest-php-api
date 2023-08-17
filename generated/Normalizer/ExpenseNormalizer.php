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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\Expense' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Expense' === $data::class;
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
        $object = new \JoliCode\Harvest\Api\Model\Expense();
        if (\array_key_exists('total_cost', $data) && \is_int($data['total_cost'])) {
            $data['total_cost'] = (float) $data['total_cost'];
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
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseClient', 'json', $context));
            unset($data['client']);
        } elseif (\array_key_exists('client', $data) && null === $data['client']) {
            $object->setClient(null);
        }
        if (\array_key_exists('project', $data) && null !== $data['project']) {
            $object->setProject($this->denormalizer->denormalize($data['project'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseProject', 'json', $context));
            unset($data['project']);
        } elseif (\array_key_exists('project', $data) && null === $data['project']) {
            $object->setProject(null);
        }
        if (\array_key_exists('expense_category', $data) && null !== $data['expense_category']) {
            $object->setExpenseCategory($this->denormalizer->denormalize($data['expense_category'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseExpenseCategory', 'json', $context));
            unset($data['expense_category']);
        } elseif (\array_key_exists('expense_category', $data) && null === $data['expense_category']) {
            $object->setExpenseCategory(null);
        }
        if (\array_key_exists('user', $data) && null !== $data['user']) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseUser', 'json', $context));
            unset($data['user']);
        } elseif (\array_key_exists('user', $data) && null === $data['user']) {
            $object->setUser(null);
        }
        if (\array_key_exists('user_assignment', $data)) {
            $object->setUserAssignment($this->denormalizer->denormalize($data['user_assignment'], 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json', $context));
            unset($data['user_assignment']);
        }
        if (\array_key_exists('receipt', $data) && null !== $data['receipt']) {
            $object->setReceipt($this->denormalizer->denormalize($data['receipt'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseReceipt', 'json', $context));
            unset($data['receipt']);
        } elseif (\array_key_exists('receipt', $data) && null === $data['receipt']) {
            $object->setReceipt(null);
        }
        if (\array_key_exists('invoice', $data) && null !== $data['invoice']) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'JoliCode\\Harvest\\Api\\Model\\ExpenseInvoice', 'json', $context));
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
        if ($object->isInitialized('client') && null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if ($object->isInitialized('project') && null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if ($object->isInitialized('expenseCategory') && null !== $object->getExpenseCategory()) {
            $data['expense_category'] = $this->normalizer->normalize($object->getExpenseCategory(), 'json', $context);
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if ($object->isInitialized('userAssignment') && null !== $object->getUserAssignment()) {
            $data['user_assignment'] = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
        }
        if ($object->isInitialized('receipt') && null !== $object->getReceipt()) {
            $data['receipt'] = $this->normalizer->normalize($object->getReceipt(), 'json', $context);
        }
        if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if ($object->isInitialized('units') && null !== $object->getUnits()) {
            $data['units'] = $object->getUnits();
        }
        if ($object->isInitialized('totalCost') && null !== $object->getTotalCost()) {
            $data['total_cost'] = $object->getTotalCost();
        }
        if ($object->isInitialized('billable') && null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if ($object->isInitialized('isClosed') && null !== $object->getIsClosed()) {
            $data['is_closed'] = $object->getIsClosed();
        }
        if ($object->isInitialized('isLocked') && null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if ($object->isInitialized('isBilled') && null !== $object->getIsBilled()) {
            $data['is_billed'] = $object->getIsBilled();
        }
        if ($object->isInitialized('lockedReason') && null !== $object->getLockedReason()) {
            $data['locked_reason'] = $object->getLockedReason();
        }
        if ($object->isInitialized('spentDate') && null !== $object->getSpentDate()) {
            $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
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

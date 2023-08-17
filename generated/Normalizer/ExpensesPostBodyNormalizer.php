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

class ExpensesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\ExpensesPostBody' === $data::class;
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
        $object = new \JoliCode\Harvest\Api\Model\ExpensesPostBody();
        if (\array_key_exists('total_cost', $data) && \is_int($data['total_cost'])) {
            $data['total_cost'] = (float) $data['total_cost'];
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
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('expense_category_id', $data) && null !== $data['expense_category_id']) {
            $object->setExpenseCategoryId($data['expense_category_id']);
            unset($data['expense_category_id']);
        } elseif (\array_key_exists('expense_category_id', $data) && null === $data['expense_category_id']) {
            $object->setExpenseCategoryId(null);
        }
        if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
            unset($data['spent_date']);
        } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
            $object->setSpentDate(null);
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
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('billable', $data) && null !== $data['billable']) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        } elseif (\array_key_exists('billable', $data) && null === $data['billable']) {
            $object->setBillable(null);
        }
        if (\array_key_exists('receipt', $data) && null !== $data['receipt']) {
            $object->setReceipt($data['receipt']);
            unset($data['receipt']);
        } elseif (\array_key_exists('receipt', $data) && null === $data['receipt']) {
            $object->setReceipt(null);
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
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        $data['project_id'] = $object->getProjectId();
        $data['expense_category_id'] = $object->getExpenseCategoryId();
        $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        if ($object->isInitialized('units') && null !== $object->getUnits()) {
            $data['units'] = $object->getUnits();
        }
        if ($object->isInitialized('totalCost') && null !== $object->getTotalCost()) {
            $data['total_cost'] = $object->getTotalCost();
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if ($object->isInitialized('billable') && null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if ($object->isInitialized('receipt') && null !== $object->getReceipt()) {
            $data['receipt'] = $object->getReceipt();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}

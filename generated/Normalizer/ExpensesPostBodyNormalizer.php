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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\ExpensesPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\ExpensesPostBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        $dataArray['project_id'] = $data->getProjectId();
        $dataArray['expense_category_id'] = $data->getExpenseCategoryId();
        $dataArray['spent_date'] = $data->getSpentDate()->format('Y-m-d');
        if ($data->isInitialized('units') && null !== $data->getUnits()) {
            $dataArray['units'] = $data->getUnits();
        }
        if ($data->isInitialized('totalCost') && null !== $data->getTotalCost()) {
            $dataArray['total_cost'] = $data->getTotalCost();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('billable') && null !== $data->getBillable()) {
            $dataArray['billable'] = $data->getBillable();
        }
        if ($data->isInitialized('receipt') && null !== $data->getReceipt()) {
            $dataArray['receipt'] = $data->getReceipt();
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
        return [\JoliCode\Harvest\Api\Model\ExpensesPostBody::class => false];
    }
}

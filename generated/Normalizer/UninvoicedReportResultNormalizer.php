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

class UninvoicedReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\UninvoicedReportResult::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\UninvoicedReportResult();
        if (\array_key_exists('total_hours', $data) && \is_int($data['total_hours'])) {
            $data['total_hours'] = (float) $data['total_hours'];
        }
        if (\array_key_exists('uninvoiced_hours', $data) && \is_int($data['uninvoiced_hours'])) {
            $data['uninvoiced_hours'] = (float) $data['uninvoiced_hours'];
        }
        if (\array_key_exists('uninvoiced_expenses', $data) && \is_int($data['uninvoiced_expenses'])) {
            $data['uninvoiced_expenses'] = (float) $data['uninvoiced_expenses'];
        }
        if (\array_key_exists('uninvoiced_amount', $data) && \is_int($data['uninvoiced_amount'])) {
            $data['uninvoiced_amount'] = (float) $data['uninvoiced_amount'];
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
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('total_hours', $data) && null !== $data['total_hours']) {
            $object->setTotalHours($data['total_hours']);
            unset($data['total_hours']);
        } elseif (\array_key_exists('total_hours', $data) && null === $data['total_hours']) {
            $object->setTotalHours(null);
        }
        if (\array_key_exists('uninvoiced_hours', $data) && null !== $data['uninvoiced_hours']) {
            $object->setUninvoicedHours($data['uninvoiced_hours']);
            unset($data['uninvoiced_hours']);
        } elseif (\array_key_exists('uninvoiced_hours', $data) && null === $data['uninvoiced_hours']) {
            $object->setUninvoicedHours(null);
        }
        if (\array_key_exists('uninvoiced_expenses', $data) && null !== $data['uninvoiced_expenses']) {
            $object->setUninvoicedExpenses($data['uninvoiced_expenses']);
            unset($data['uninvoiced_expenses']);
        } elseif (\array_key_exists('uninvoiced_expenses', $data) && null === $data['uninvoiced_expenses']) {
            $object->setUninvoicedExpenses(null);
        }
        if (\array_key_exists('uninvoiced_amount', $data) && null !== $data['uninvoiced_amount']) {
            $object->setUninvoicedAmount($data['uninvoiced_amount']);
            unset($data['uninvoiced_amount']);
        } elseif (\array_key_exists('uninvoiced_amount', $data) && null === $data['uninvoiced_amount']) {
            $object->setUninvoicedAmount(null);
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
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('totalHours') && null !== $data->getTotalHours()) {
            $dataArray['total_hours'] = $data->getTotalHours();
        }
        if ($data->isInitialized('uninvoicedHours') && null !== $data->getUninvoicedHours()) {
            $dataArray['uninvoiced_hours'] = $data->getUninvoicedHours();
        }
        if ($data->isInitialized('uninvoicedExpenses') && null !== $data->getUninvoicedExpenses()) {
            $dataArray['uninvoiced_expenses'] = $data->getUninvoicedExpenses();
        }
        if ($data->isInitialized('uninvoicedAmount') && null !== $data->getUninvoicedAmount()) {
            $dataArray['uninvoiced_amount'] = $data->getUninvoicedAmount();
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
        return [\JoliCode\Harvest\Api\Model\UninvoicedReportResult::class => false];
    }
}

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

class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\Company::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\Company::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Company();
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && \is_int($data['wants_timestamp_timers'])) {
            $data['wants_timestamp_timers'] = (bool) $data['wants_timestamp_timers'];
        }
        if (\array_key_exists('expense_feature', $data) && \is_int($data['expense_feature'])) {
            $data['expense_feature'] = (bool) $data['expense_feature'];
        }
        if (\array_key_exists('invoice_feature', $data) && \is_int($data['invoice_feature'])) {
            $data['invoice_feature'] = (bool) $data['invoice_feature'];
        }
        if (\array_key_exists('estimate_feature', $data) && \is_int($data['estimate_feature'])) {
            $data['estimate_feature'] = (bool) $data['estimate_feature'];
        }
        if (\array_key_exists('approval_feature', $data) && \is_int($data['approval_feature'])) {
            $data['approval_feature'] = (bool) $data['approval_feature'];
        }
        if (\array_key_exists('team_feature', $data) && \is_int($data['team_feature'])) {
            $data['team_feature'] = (bool) $data['team_feature'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_uri', $data) && null !== $data['base_uri']) {
            $object->setBaseUri($data['base_uri']);
            unset($data['base_uri']);
        } elseif (\array_key_exists('base_uri', $data) && null === $data['base_uri']) {
            $object->setBaseUri(null);
        }
        if (\array_key_exists('full_domain', $data) && null !== $data['full_domain']) {
            $object->setFullDomain($data['full_domain']);
            unset($data['full_domain']);
        } elseif (\array_key_exists('full_domain', $data) && null === $data['full_domain']) {
            $object->setFullDomain(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('week_start_day', $data) && null !== $data['week_start_day']) {
            $object->setWeekStartDay($data['week_start_day']);
            unset($data['week_start_day']);
        } elseif (\array_key_exists('week_start_day', $data) && null === $data['week_start_day']) {
            $object->setWeekStartDay(null);
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && null !== $data['wants_timestamp_timers']) {
            $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
            unset($data['wants_timestamp_timers']);
        } elseif (\array_key_exists('wants_timestamp_timers', $data) && null === $data['wants_timestamp_timers']) {
            $object->setWantsTimestampTimers(null);
        }
        if (\array_key_exists('time_format', $data) && null !== $data['time_format']) {
            $object->setTimeFormat($data['time_format']);
            unset($data['time_format']);
        } elseif (\array_key_exists('time_format', $data) && null === $data['time_format']) {
            $object->setTimeFormat(null);
        }
        if (\array_key_exists('date_format', $data) && null !== $data['date_format']) {
            $object->setDateFormat($data['date_format']);
            unset($data['date_format']);
        } elseif (\array_key_exists('date_format', $data) && null === $data['date_format']) {
            $object->setDateFormat(null);
        }
        if (\array_key_exists('plan_type', $data) && null !== $data['plan_type']) {
            $object->setPlanType($data['plan_type']);
            unset($data['plan_type']);
        } elseif (\array_key_exists('plan_type', $data) && null === $data['plan_type']) {
            $object->setPlanType(null);
        }
        if (\array_key_exists('clock', $data) && null !== $data['clock']) {
            $object->setClock($data['clock']);
            unset($data['clock']);
        } elseif (\array_key_exists('clock', $data) && null === $data['clock']) {
            $object->setClock(null);
        }
        if (\array_key_exists('currency_code_display', $data) && null !== $data['currency_code_display']) {
            $object->setCurrencyCodeDisplay($data['currency_code_display']);
            unset($data['currency_code_display']);
        } elseif (\array_key_exists('currency_code_display', $data) && null === $data['currency_code_display']) {
            $object->setCurrencyCodeDisplay(null);
        }
        if (\array_key_exists('currency_symbol_display', $data) && null !== $data['currency_symbol_display']) {
            $object->setCurrencySymbolDisplay($data['currency_symbol_display']);
            unset($data['currency_symbol_display']);
        } elseif (\array_key_exists('currency_symbol_display', $data) && null === $data['currency_symbol_display']) {
            $object->setCurrencySymbolDisplay(null);
        }
        if (\array_key_exists('decimal_symbol', $data) && null !== $data['decimal_symbol']) {
            $object->setDecimalSymbol($data['decimal_symbol']);
            unset($data['decimal_symbol']);
        } elseif (\array_key_exists('decimal_symbol', $data) && null === $data['decimal_symbol']) {
            $object->setDecimalSymbol(null);
        }
        if (\array_key_exists('thousands_separator', $data) && null !== $data['thousands_separator']) {
            $object->setThousandsSeparator($data['thousands_separator']);
            unset($data['thousands_separator']);
        } elseif (\array_key_exists('thousands_separator', $data) && null === $data['thousands_separator']) {
            $object->setThousandsSeparator(null);
        }
        if (\array_key_exists('color_scheme', $data) && null !== $data['color_scheme']) {
            $object->setColorScheme($data['color_scheme']);
            unset($data['color_scheme']);
        } elseif (\array_key_exists('color_scheme', $data) && null === $data['color_scheme']) {
            $object->setColorScheme(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
            unset($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('expense_feature', $data) && null !== $data['expense_feature']) {
            $object->setExpenseFeature($data['expense_feature']);
            unset($data['expense_feature']);
        } elseif (\array_key_exists('expense_feature', $data) && null === $data['expense_feature']) {
            $object->setExpenseFeature(null);
        }
        if (\array_key_exists('invoice_feature', $data) && null !== $data['invoice_feature']) {
            $object->setInvoiceFeature($data['invoice_feature']);
            unset($data['invoice_feature']);
        } elseif (\array_key_exists('invoice_feature', $data) && null === $data['invoice_feature']) {
            $object->setInvoiceFeature(null);
        }
        if (\array_key_exists('estimate_feature', $data) && null !== $data['estimate_feature']) {
            $object->setEstimateFeature($data['estimate_feature']);
            unset($data['estimate_feature']);
        } elseif (\array_key_exists('estimate_feature', $data) && null === $data['estimate_feature']) {
            $object->setEstimateFeature(null);
        }
        if (\array_key_exists('approval_feature', $data) && null !== $data['approval_feature']) {
            $object->setApprovalFeature($data['approval_feature']);
            unset($data['approval_feature']);
        } elseif (\array_key_exists('approval_feature', $data) && null === $data['approval_feature']) {
            $object->setApprovalFeature(null);
        }
        if (\array_key_exists('team_feature', $data) && null !== $data['team_feature']) {
            $object->setTeamFeature($data['team_feature']);
            unset($data['team_feature']);
        } elseif (\array_key_exists('team_feature', $data) && null === $data['team_feature']) {
            $object->setTeamFeature(null);
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
        if ($data->isInitialized('baseUri') && null !== $data->getBaseUri()) {
            $dataArray['base_uri'] = $data->getBaseUri();
        }
        if ($data->isInitialized('fullDomain') && null !== $data->getFullDomain()) {
            $dataArray['full_domain'] = $data->getFullDomain();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('weekStartDay') && null !== $data->getWeekStartDay()) {
            $dataArray['week_start_day'] = $data->getWeekStartDay();
        }
        if ($data->isInitialized('wantsTimestampTimers') && null !== $data->getWantsTimestampTimers()) {
            $dataArray['wants_timestamp_timers'] = $data->getWantsTimestampTimers();
        }
        if ($data->isInitialized('timeFormat') && null !== $data->getTimeFormat()) {
            $dataArray['time_format'] = $data->getTimeFormat();
        }
        if ($data->isInitialized('dateFormat') && null !== $data->getDateFormat()) {
            $dataArray['date_format'] = $data->getDateFormat();
        }
        if ($data->isInitialized('planType') && null !== $data->getPlanType()) {
            $dataArray['plan_type'] = $data->getPlanType();
        }
        if ($data->isInitialized('clock') && null !== $data->getClock()) {
            $dataArray['clock'] = $data->getClock();
        }
        if ($data->isInitialized('currencyCodeDisplay') && null !== $data->getCurrencyCodeDisplay()) {
            $dataArray['currency_code_display'] = $data->getCurrencyCodeDisplay();
        }
        if ($data->isInitialized('currencySymbolDisplay') && null !== $data->getCurrencySymbolDisplay()) {
            $dataArray['currency_symbol_display'] = $data->getCurrencySymbolDisplay();
        }
        if ($data->isInitialized('decimalSymbol') && null !== $data->getDecimalSymbol()) {
            $dataArray['decimal_symbol'] = $data->getDecimalSymbol();
        }
        if ($data->isInitialized('thousandsSeparator') && null !== $data->getThousandsSeparator()) {
            $dataArray['thousands_separator'] = $data->getThousandsSeparator();
        }
        if ($data->isInitialized('colorScheme') && null !== $data->getColorScheme()) {
            $dataArray['color_scheme'] = $data->getColorScheme();
        }
        if ($data->isInitialized('weeklyCapacity') && null !== $data->getWeeklyCapacity()) {
            $dataArray['weekly_capacity'] = $data->getWeeklyCapacity();
        }
        if ($data->isInitialized('expenseFeature') && null !== $data->getExpenseFeature()) {
            $dataArray['expense_feature'] = $data->getExpenseFeature();
        }
        if ($data->isInitialized('invoiceFeature') && null !== $data->getInvoiceFeature()) {
            $dataArray['invoice_feature'] = $data->getInvoiceFeature();
        }
        if ($data->isInitialized('estimateFeature') && null !== $data->getEstimateFeature()) {
            $dataArray['estimate_feature'] = $data->getEstimateFeature();
        }
        if ($data->isInitialized('approvalFeature') && null !== $data->getApprovalFeature()) {
            $dataArray['approval_feature'] = $data->getApprovalFeature();
        }
        if ($data->isInitialized('teamFeature') && null !== $data->getTeamFeature()) {
            $dataArray['team_feature'] = $data->getTeamFeature();
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
        return [\JoliCode\Harvest\Api\Model\Company::class => false];
    }
}

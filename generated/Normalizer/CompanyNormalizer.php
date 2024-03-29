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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\Company' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Company' === $data::class;
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
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('baseUri') && null !== $object->getBaseUri()) {
                $data['base_uri'] = $object->getBaseUri();
            }
            if ($object->isInitialized('fullDomain') && null !== $object->getFullDomain()) {
                $data['full_domain'] = $object->getFullDomain();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('weekStartDay') && null !== $object->getWeekStartDay()) {
                $data['week_start_day'] = $object->getWeekStartDay();
            }
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('timeFormat') && null !== $object->getTimeFormat()) {
                $data['time_format'] = $object->getTimeFormat();
            }
            if ($object->isInitialized('dateFormat') && null !== $object->getDateFormat()) {
                $data['date_format'] = $object->getDateFormat();
            }
            if ($object->isInitialized('planType') && null !== $object->getPlanType()) {
                $data['plan_type'] = $object->getPlanType();
            }
            if ($object->isInitialized('clock') && null !== $object->getClock()) {
                $data['clock'] = $object->getClock();
            }
            if ($object->isInitialized('currencyCodeDisplay') && null !== $object->getCurrencyCodeDisplay()) {
                $data['currency_code_display'] = $object->getCurrencyCodeDisplay();
            }
            if ($object->isInitialized('currencySymbolDisplay') && null !== $object->getCurrencySymbolDisplay()) {
                $data['currency_symbol_display'] = $object->getCurrencySymbolDisplay();
            }
            if ($object->isInitialized('decimalSymbol') && null !== $object->getDecimalSymbol()) {
                $data['decimal_symbol'] = $object->getDecimalSymbol();
            }
            if ($object->isInitialized('thousandsSeparator') && null !== $object->getThousandsSeparator()) {
                $data['thousands_separator'] = $object->getThousandsSeparator();
            }
            if ($object->isInitialized('colorScheme') && null !== $object->getColorScheme()) {
                $data['color_scheme'] = $object->getColorScheme();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            if ($object->isInitialized('expenseFeature') && null !== $object->getExpenseFeature()) {
                $data['expense_feature'] = $object->getExpenseFeature();
            }
            if ($object->isInitialized('invoiceFeature') && null !== $object->getInvoiceFeature()) {
                $data['invoice_feature'] = $object->getInvoiceFeature();
            }
            if ($object->isInitialized('estimateFeature') && null !== $object->getEstimateFeature()) {
                $data['estimate_feature'] = $object->getEstimateFeature();
            }
            if ($object->isInitialized('approvalFeature') && null !== $object->getApprovalFeature()) {
                $data['approval_feature'] = $object->getApprovalFeature();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\Company' => false];
        }
    }
} else {
    class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\Company' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Company' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\Company();
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
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('baseUri') && null !== $object->getBaseUri()) {
                $data['base_uri'] = $object->getBaseUri();
            }
            if ($object->isInitialized('fullDomain') && null !== $object->getFullDomain()) {
                $data['full_domain'] = $object->getFullDomain();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('weekStartDay') && null !== $object->getWeekStartDay()) {
                $data['week_start_day'] = $object->getWeekStartDay();
            }
            if ($object->isInitialized('wantsTimestampTimers') && null !== $object->getWantsTimestampTimers()) {
                $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
            }
            if ($object->isInitialized('timeFormat') && null !== $object->getTimeFormat()) {
                $data['time_format'] = $object->getTimeFormat();
            }
            if ($object->isInitialized('dateFormat') && null !== $object->getDateFormat()) {
                $data['date_format'] = $object->getDateFormat();
            }
            if ($object->isInitialized('planType') && null !== $object->getPlanType()) {
                $data['plan_type'] = $object->getPlanType();
            }
            if ($object->isInitialized('clock') && null !== $object->getClock()) {
                $data['clock'] = $object->getClock();
            }
            if ($object->isInitialized('currencyCodeDisplay') && null !== $object->getCurrencyCodeDisplay()) {
                $data['currency_code_display'] = $object->getCurrencyCodeDisplay();
            }
            if ($object->isInitialized('currencySymbolDisplay') && null !== $object->getCurrencySymbolDisplay()) {
                $data['currency_symbol_display'] = $object->getCurrencySymbolDisplay();
            }
            if ($object->isInitialized('decimalSymbol') && null !== $object->getDecimalSymbol()) {
                $data['decimal_symbol'] = $object->getDecimalSymbol();
            }
            if ($object->isInitialized('thousandsSeparator') && null !== $object->getThousandsSeparator()) {
                $data['thousands_separator'] = $object->getThousandsSeparator();
            }
            if ($object->isInitialized('colorScheme') && null !== $object->getColorScheme()) {
                $data['color_scheme'] = $object->getColorScheme();
            }
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            if ($object->isInitialized('expenseFeature') && null !== $object->getExpenseFeature()) {
                $data['expense_feature'] = $object->getExpenseFeature();
            }
            if ($object->isInitialized('invoiceFeature') && null !== $object->getInvoiceFeature()) {
                $data['invoice_feature'] = $object->getInvoiceFeature();
            }
            if ($object->isInitialized('estimateFeature') && null !== $object->getEstimateFeature()) {
                $data['estimate_feature'] = $object->getEstimateFeature();
            }
            if ($object->isInitialized('approvalFeature') && null !== $object->getApprovalFeature()) {
                $data['approval_feature'] = $object->getApprovalFeature();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\Company' => false];
        }
    }
}

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

class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\Company' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Company' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\Company();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_uri', $data) && null !== $data['base_uri']) {
            $object->setBaseUri($data['base_uri']);
        } elseif (\array_key_exists('base_uri', $data) && null === $data['base_uri']) {
            $object->setBaseUri(null);
        }
        if (\array_key_exists('full_domain', $data) && null !== $data['full_domain']) {
            $object->setFullDomain($data['full_domain']);
        } elseif (\array_key_exists('full_domain', $data) && null === $data['full_domain']) {
            $object->setFullDomain(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('is_active', $data) && null !== $data['is_active']) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && null === $data['is_active']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('week_start_day', $data) && null !== $data['week_start_day']) {
            $object->setWeekStartDay($data['week_start_day']);
        } elseif (\array_key_exists('week_start_day', $data) && null === $data['week_start_day']) {
            $object->setWeekStartDay(null);
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && null !== $data['wants_timestamp_timers']) {
            $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
        } elseif (\array_key_exists('wants_timestamp_timers', $data) && null === $data['wants_timestamp_timers']) {
            $object->setWantsTimestampTimers(null);
        }
        if (\array_key_exists('time_format', $data) && null !== $data['time_format']) {
            $object->setTimeFormat($data['time_format']);
        } elseif (\array_key_exists('time_format', $data) && null === $data['time_format']) {
            $object->setTimeFormat(null);
        }
        if (\array_key_exists('date_format', $data) && null !== $data['date_format']) {
            $object->setDateFormat($data['date_format']);
        } elseif (\array_key_exists('date_format', $data) && null === $data['date_format']) {
            $object->setDateFormat(null);
        }
        if (\array_key_exists('plan_type', $data) && null !== $data['plan_type']) {
            $object->setPlanType($data['plan_type']);
        } elseif (\array_key_exists('plan_type', $data) && null === $data['plan_type']) {
            $object->setPlanType(null);
        }
        if (\array_key_exists('clock', $data) && null !== $data['clock']) {
            $object->setClock($data['clock']);
        } elseif (\array_key_exists('clock', $data) && null === $data['clock']) {
            $object->setClock(null);
        }
        if (\array_key_exists('currency_code_display', $data) && null !== $data['currency_code_display']) {
            $object->setCurrencyCodeDisplay($data['currency_code_display']);
        } elseif (\array_key_exists('currency_code_display', $data) && null === $data['currency_code_display']) {
            $object->setCurrencyCodeDisplay(null);
        }
        if (\array_key_exists('currency_symbol_display', $data) && null !== $data['currency_symbol_display']) {
            $object->setCurrencySymbolDisplay($data['currency_symbol_display']);
        } elseif (\array_key_exists('currency_symbol_display', $data) && null === $data['currency_symbol_display']) {
            $object->setCurrencySymbolDisplay(null);
        }
        if (\array_key_exists('decimal_symbol', $data) && null !== $data['decimal_symbol']) {
            $object->setDecimalSymbol($data['decimal_symbol']);
        } elseif (\array_key_exists('decimal_symbol', $data) && null === $data['decimal_symbol']) {
            $object->setDecimalSymbol(null);
        }
        if (\array_key_exists('thousands_separator', $data) && null !== $data['thousands_separator']) {
            $object->setThousandsSeparator($data['thousands_separator']);
        } elseif (\array_key_exists('thousands_separator', $data) && null === $data['thousands_separator']) {
            $object->setThousandsSeparator(null);
        }
        if (\array_key_exists('color_scheme', $data) && null !== $data['color_scheme']) {
            $object->setColorScheme($data['color_scheme']);
        } elseif (\array_key_exists('color_scheme', $data) && null === $data['color_scheme']) {
            $object->setColorScheme(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('expense_feature', $data) && null !== $data['expense_feature']) {
            $object->setExpenseFeature($data['expense_feature']);
        } elseif (\array_key_exists('expense_feature', $data) && null === $data['expense_feature']) {
            $object->setExpenseFeature(null);
        }
        if (\array_key_exists('invoice_feature', $data) && null !== $data['invoice_feature']) {
            $object->setInvoiceFeature($data['invoice_feature']);
        } elseif (\array_key_exists('invoice_feature', $data) && null === $data['invoice_feature']) {
            $object->setInvoiceFeature(null);
        }
        if (\array_key_exists('estimate_feature', $data) && null !== $data['estimate_feature']) {
            $object->setEstimateFeature($data['estimate_feature']);
        } elseif (\array_key_exists('estimate_feature', $data) && null === $data['estimate_feature']) {
            $object->setEstimateFeature(null);
        }
        if (\array_key_exists('approval_feature', $data) && null !== $data['approval_feature']) {
            $object->setApprovalFeature($data['approval_feature']);
        } elseif (\array_key_exists('approval_feature', $data) && null === $data['approval_feature']) {
            $object->setApprovalFeature(null);
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
        if (null !== $object->getBaseUri()) {
            $data['base_uri'] = $object->getBaseUri();
        }
        if (null !== $object->getFullDomain()) {
            $data['full_domain'] = $object->getFullDomain();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getWeekStartDay()) {
            $data['week_start_day'] = $object->getWeekStartDay();
        }
        if (null !== $object->getWantsTimestampTimers()) {
            $data['wants_timestamp_timers'] = $object->getWantsTimestampTimers();
        }
        if (null !== $object->getTimeFormat()) {
            $data['time_format'] = $object->getTimeFormat();
        }
        if (null !== $object->getDateFormat()) {
            $data['date_format'] = $object->getDateFormat();
        }
        if (null !== $object->getPlanType()) {
            $data['plan_type'] = $object->getPlanType();
        }
        if (null !== $object->getClock()) {
            $data['clock'] = $object->getClock();
        }
        if (null !== $object->getCurrencyCodeDisplay()) {
            $data['currency_code_display'] = $object->getCurrencyCodeDisplay();
        }
        if (null !== $object->getCurrencySymbolDisplay()) {
            $data['currency_symbol_display'] = $object->getCurrencySymbolDisplay();
        }
        if (null !== $object->getDecimalSymbol()) {
            $data['decimal_symbol'] = $object->getDecimalSymbol();
        }
        if (null !== $object->getThousandsSeparator()) {
            $data['thousands_separator'] = $object->getThousandsSeparator();
        }
        if (null !== $object->getColorScheme()) {
            $data['color_scheme'] = $object->getColorScheme();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getExpenseFeature()) {
            $data['expense_feature'] = $object->getExpenseFeature();
        }
        if (null !== $object->getInvoiceFeature()) {
            $data['invoice_feature'] = $object->getInvoiceFeature();
        }
        if (null !== $object->getEstimateFeature()) {
            $data['estimate_feature'] = $object->getEstimateFeature();
        }
        if (null !== $object->getApprovalFeature()) {
            $data['approval_feature'] = $object->getApprovalFeature();
        }

        return $data;
    }
}

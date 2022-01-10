<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Company';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Company';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
        if (\array_key_exists('base_uri', $data) && $data['base_uri'] !== null) {
            $object->setBaseUri($data['base_uri']);
        }
        elseif (\array_key_exists('base_uri', $data) && $data['base_uri'] === null) {
            $object->setBaseUri(null);
        }
        if (\array_key_exists('full_domain', $data) && $data['full_domain'] !== null) {
            $object->setFullDomain($data['full_domain']);
        }
        elseif (\array_key_exists('full_domain', $data) && $data['full_domain'] === null) {
            $object->setFullDomain(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('week_start_day', $data) && $data['week_start_day'] !== null) {
            $object->setWeekStartDay($data['week_start_day']);
        }
        elseif (\array_key_exists('week_start_day', $data) && $data['week_start_day'] === null) {
            $object->setWeekStartDay(null);
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && $data['wants_timestamp_timers'] !== null) {
            $object->setWantsTimestampTimers($data['wants_timestamp_timers']);
        }
        elseif (\array_key_exists('wants_timestamp_timers', $data) && $data['wants_timestamp_timers'] === null) {
            $object->setWantsTimestampTimers(null);
        }
        if (\array_key_exists('time_format', $data) && $data['time_format'] !== null) {
            $object->setTimeFormat($data['time_format']);
        }
        elseif (\array_key_exists('time_format', $data) && $data['time_format'] === null) {
            $object->setTimeFormat(null);
        }
        if (\array_key_exists('date_format', $data) && $data['date_format'] !== null) {
            $object->setDateFormat($data['date_format']);
        }
        elseif (\array_key_exists('date_format', $data) && $data['date_format'] === null) {
            $object->setDateFormat(null);
        }
        if (\array_key_exists('plan_type', $data) && $data['plan_type'] !== null) {
            $object->setPlanType($data['plan_type']);
        }
        elseif (\array_key_exists('plan_type', $data) && $data['plan_type'] === null) {
            $object->setPlanType(null);
        }
        if (\array_key_exists('clock', $data) && $data['clock'] !== null) {
            $object->setClock($data['clock']);
        }
        elseif (\array_key_exists('clock', $data) && $data['clock'] === null) {
            $object->setClock(null);
        }
        if (\array_key_exists('decimal_symbol', $data) && $data['decimal_symbol'] !== null) {
            $object->setDecimalSymbol($data['decimal_symbol']);
        }
        elseif (\array_key_exists('decimal_symbol', $data) && $data['decimal_symbol'] === null) {
            $object->setDecimalSymbol(null);
        }
        if (\array_key_exists('thousands_separator', $data) && $data['thousands_separator'] !== null) {
            $object->setThousandsSeparator($data['thousands_separator']);
        }
        elseif (\array_key_exists('thousands_separator', $data) && $data['thousands_separator'] === null) {
            $object->setThousandsSeparator(null);
        }
        if (\array_key_exists('color_scheme', $data) && $data['color_scheme'] !== null) {
            $object->setColorScheme($data['color_scheme']);
        }
        elseif (\array_key_exists('color_scheme', $data) && $data['color_scheme'] === null) {
            $object->setColorScheme(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] !== null) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        elseif (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] === null) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('expense_feature', $data) && $data['expense_feature'] !== null) {
            $object->setExpenseFeature($data['expense_feature']);
        }
        elseif (\array_key_exists('expense_feature', $data) && $data['expense_feature'] === null) {
            $object->setExpenseFeature(null);
        }
        if (\array_key_exists('invoice_feature', $data) && $data['invoice_feature'] !== null) {
            $object->setInvoiceFeature($data['invoice_feature']);
        }
        elseif (\array_key_exists('invoice_feature', $data) && $data['invoice_feature'] === null) {
            $object->setInvoiceFeature(null);
        }
        if (\array_key_exists('estimate_feature', $data) && $data['estimate_feature'] !== null) {
            $object->setEstimateFeature($data['estimate_feature']);
        }
        elseif (\array_key_exists('estimate_feature', $data) && $data['estimate_feature'] === null) {
            $object->setEstimateFeature(null);
        }
        if (\array_key_exists('approval_feature', $data) && $data['approval_feature'] !== null) {
            $object->setApprovalFeature($data['approval_feature']);
        }
        elseif (\array_key_exists('approval_feature', $data) && $data['approval_feature'] === null) {
            $object->setApprovalFeature(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
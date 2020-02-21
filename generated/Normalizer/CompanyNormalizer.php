<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Company';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Company';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Company();
        if (property_exists($data, 'base_uri') && $data->{'base_uri'} !== null) {
            $object->setBaseUri($data->{'base_uri'});
        }
        elseif (property_exists($data, 'base_uri') && $data->{'base_uri'} === null) {
            $object->setBaseUri(null);
        }
        if (property_exists($data, 'full_domain') && $data->{'full_domain'} !== null) {
            $object->setFullDomain($data->{'full_domain'});
        }
        elseif (property_exists($data, 'full_domain') && $data->{'full_domain'} === null) {
            $object->setFullDomain(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        elseif (property_exists($data, 'is_active') && $data->{'is_active'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'week_start_day') && $data->{'week_start_day'} !== null) {
            $object->setWeekStartDay($data->{'week_start_day'});
        }
        elseif (property_exists($data, 'week_start_day') && $data->{'week_start_day'} === null) {
            $object->setWeekStartDay(null);
        }
        if (property_exists($data, 'wants_timestamp_timers') && $data->{'wants_timestamp_timers'} !== null) {
            $object->setWantsTimestampTimers($data->{'wants_timestamp_timers'});
        }
        elseif (property_exists($data, 'wants_timestamp_timers') && $data->{'wants_timestamp_timers'} === null) {
            $object->setWantsTimestampTimers(null);
        }
        if (property_exists($data, 'time_format') && $data->{'time_format'} !== null) {
            $object->setTimeFormat($data->{'time_format'});
        }
        elseif (property_exists($data, 'time_format') && $data->{'time_format'} === null) {
            $object->setTimeFormat(null);
        }
        if (property_exists($data, 'plan_type') && $data->{'plan_type'} !== null) {
            $object->setPlanType($data->{'plan_type'});
        }
        elseif (property_exists($data, 'plan_type') && $data->{'plan_type'} === null) {
            $object->setPlanType(null);
        }
        if (property_exists($data, 'clock') && $data->{'clock'} !== null) {
            $object->setClock($data->{'clock'});
        }
        elseif (property_exists($data, 'clock') && $data->{'clock'} === null) {
            $object->setClock(null);
        }
        if (property_exists($data, 'decimal_symbol') && $data->{'decimal_symbol'} !== null) {
            $object->setDecimalSymbol($data->{'decimal_symbol'});
        }
        elseif (property_exists($data, 'decimal_symbol') && $data->{'decimal_symbol'} === null) {
            $object->setDecimalSymbol(null);
        }
        if (property_exists($data, 'thousands_separator') && $data->{'thousands_separator'} !== null) {
            $object->setThousandsSeparator($data->{'thousands_separator'});
        }
        elseif (property_exists($data, 'thousands_separator') && $data->{'thousands_separator'} === null) {
            $object->setThousandsSeparator(null);
        }
        if (property_exists($data, 'color_scheme') && $data->{'color_scheme'} !== null) {
            $object->setColorScheme($data->{'color_scheme'});
        }
        elseif (property_exists($data, 'color_scheme') && $data->{'color_scheme'} === null) {
            $object->setColorScheme(null);
        }
        if (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} !== null) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        elseif (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} === null) {
            $object->setWeeklyCapacity(null);
        }
        if (property_exists($data, 'expense_feature') && $data->{'expense_feature'} !== null) {
            $object->setExpenseFeature($data->{'expense_feature'});
        }
        elseif (property_exists($data, 'expense_feature') && $data->{'expense_feature'} === null) {
            $object->setExpenseFeature(null);
        }
        if (property_exists($data, 'invoice_feature') && $data->{'invoice_feature'} !== null) {
            $object->setInvoiceFeature($data->{'invoice_feature'});
        }
        elseif (property_exists($data, 'invoice_feature') && $data->{'invoice_feature'} === null) {
            $object->setInvoiceFeature(null);
        }
        if (property_exists($data, 'estimate_feature') && $data->{'estimate_feature'} !== null) {
            $object->setEstimateFeature($data->{'estimate_feature'});
        }
        elseif (property_exists($data, 'estimate_feature') && $data->{'estimate_feature'} === null) {
            $object->setEstimateFeature(null);
        }
        if (property_exists($data, 'approval_feature') && $data->{'approval_feature'} !== null) {
            $object->setApprovalFeature($data->{'approval_feature'});
        }
        elseif (property_exists($data, 'approval_feature') && $data->{'approval_feature'} === null) {
            $object->setApprovalFeature(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBaseUri()) {
            $data->{'base_uri'} = $object->getBaseUri();
        }
        else {
            $data->{'base_uri'} = null;
        }
        if (null !== $object->getFullDomain()) {
            $data->{'full_domain'} = $object->getFullDomain();
        }
        else {
            $data->{'full_domain'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        else {
            $data->{'is_active'} = null;
        }
        if (null !== $object->getWeekStartDay()) {
            $data->{'week_start_day'} = $object->getWeekStartDay();
        }
        else {
            $data->{'week_start_day'} = null;
        }
        if (null !== $object->getWantsTimestampTimers()) {
            $data->{'wants_timestamp_timers'} = $object->getWantsTimestampTimers();
        }
        else {
            $data->{'wants_timestamp_timers'} = null;
        }
        if (null !== $object->getTimeFormat()) {
            $data->{'time_format'} = $object->getTimeFormat();
        }
        else {
            $data->{'time_format'} = null;
        }
        if (null !== $object->getPlanType()) {
            $data->{'plan_type'} = $object->getPlanType();
        }
        else {
            $data->{'plan_type'} = null;
        }
        if (null !== $object->getClock()) {
            $data->{'clock'} = $object->getClock();
        }
        else {
            $data->{'clock'} = null;
        }
        if (null !== $object->getDecimalSymbol()) {
            $data->{'decimal_symbol'} = $object->getDecimalSymbol();
        }
        else {
            $data->{'decimal_symbol'} = null;
        }
        if (null !== $object->getThousandsSeparator()) {
            $data->{'thousands_separator'} = $object->getThousandsSeparator();
        }
        else {
            $data->{'thousands_separator'} = null;
        }
        if (null !== $object->getColorScheme()) {
            $data->{'color_scheme'} = $object->getColorScheme();
        }
        else {
            $data->{'color_scheme'} = null;
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        else {
            $data->{'weekly_capacity'} = null;
        }
        if (null !== $object->getExpenseFeature()) {
            $data->{'expense_feature'} = $object->getExpenseFeature();
        }
        else {
            $data->{'expense_feature'} = null;
        }
        if (null !== $object->getInvoiceFeature()) {
            $data->{'invoice_feature'} = $object->getInvoiceFeature();
        }
        else {
            $data->{'invoice_feature'} = null;
        }
        if (null !== $object->getEstimateFeature()) {
            $data->{'estimate_feature'} = $object->getEstimateFeature();
        }
        else {
            $data->{'estimate_feature'} = null;
        }
        if (null !== $object->getApprovalFeature()) {
            $data->{'approval_feature'} = $object->getApprovalFeature();
        }
        else {
            $data->{'approval_feature'} = null;
        }
        return $data;
    }
}
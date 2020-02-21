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
class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\CompanyPatchBody';
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
        $object = new \JoliCode\Harvest\Api\Model\CompanyPatchBody();
        if (property_exists($data, 'wants_timestamp_timers') && $data->{'wants_timestamp_timers'} !== null) {
            $object->setWantsTimestampTimers($data->{'wants_timestamp_timers'});
        }
        elseif (property_exists($data, 'wants_timestamp_timers') && $data->{'wants_timestamp_timers'} === null) {
            $object->setWantsTimestampTimers(null);
        }
        if (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} !== null) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        elseif (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} === null) {
            $object->setWeeklyCapacity(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getWantsTimestampTimers()) {
            $data->{'wants_timestamp_timers'} = $object->getWantsTimestampTimers();
        }
        else {
            $data->{'wants_timestamp_timers'} = null;
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        else {
            $data->{'weekly_capacity'} = null;
        }
        return $data;
    }
}
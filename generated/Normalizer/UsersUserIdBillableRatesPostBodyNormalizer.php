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
class UsersUserIdBillableRatesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdBillableRatesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\UsersUserIdBillableRatesPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\UsersUserIdBillableRatesPostBody();
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        elseif (property_exists($data, 'amount') && $data->{'amount'} === null) {
            $object->setAmount(null);
        }
        if (property_exists($data, 'start_date') && $data->{'start_date'} !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'start_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'start_date') && $data->{'start_date'} === null) {
            $object->setStartDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        else {
            $data->{'amount'} = null;
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate()->format('Y-m-d');
        }
        else {
            $data->{'start_date'} = null;
        }
        return $data;
    }
}
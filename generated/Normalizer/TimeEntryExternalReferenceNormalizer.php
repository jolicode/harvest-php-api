<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TimeEntryExternalReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntryExternalReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('group_id', $data) && $data['group_id'] !== null) {
            $object->setGroupId($data['group_id']);
        }
        elseif (\array_key_exists('group_id', $data) && $data['group_id'] === null) {
            $object->setGroupId(null);
        }
        if (\array_key_exists('account_id', $data) && $data['account_id'] !== null) {
            $object->setAccountId($data['account_id']);
        }
        elseif (\array_key_exists('account_id', $data) && $data['account_id'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('permalink', $data) && $data['permalink'] !== null) {
            $object->setPermalink($data['permalink']);
        }
        elseif (\array_key_exists('permalink', $data) && $data['permalink'] === null) {
            $object->setPermalink(null);
        }
        if (\array_key_exists('service', $data) && $data['service'] !== null) {
            $object->setService($data['service']);
        }
        elseif (\array_key_exists('service', $data) && $data['service'] === null) {
            $object->setService(null);
        }
        if (\array_key_exists('service_icon_url', $data) && $data['service_icon_url'] !== null) {
            $object->setServiceIconUrl($data['service_icon_url']);
        }
        elseif (\array_key_exists('service_icon_url', $data) && $data['service_icon_url'] === null) {
            $object->setServiceIconUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getGroupId()) {
            $data['group_id'] = $object->getGroupId();
        }
        if (null !== $object->getAccountId()) {
            $data['account_id'] = $object->getAccountId();
        }
        if (null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if (null !== $object->getService()) {
            $data['service'] = $object->getService();
        }
        if (null !== $object->getServiceIconUrl()) {
            $data['service_icon_url'] = $object->getServiceIconUrl();
        }
        return $data;
    }
}
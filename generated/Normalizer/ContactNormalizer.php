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
class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Contact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Contact';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Contact();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('client', $data) && $data['client'] !== null) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\ContactClient', 'json', $context));
        }
        elseif (\array_key_exists('client', $data) && $data['client'] === null) {
            $object->setClient(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('phone_office', $data) && $data['phone_office'] !== null) {
            $object->setPhoneOffice($data['phone_office']);
        }
        elseif (\array_key_exists('phone_office', $data) && $data['phone_office'] === null) {
            $object->setPhoneOffice(null);
        }
        if (\array_key_exists('phone_mobile', $data) && $data['phone_mobile'] !== null) {
            $object->setPhoneMobile($data['phone_mobile']);
        }
        elseif (\array_key_exists('phone_mobile', $data) && $data['phone_mobile'] === null) {
            $object->setPhoneMobile(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
        }
        elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPhoneOffice()) {
            $data['phone_office'] = $object->getPhoneOffice();
        }
        if (null !== $object->getPhoneMobile()) {
            $data['phone_mobile'] = $object->getPhoneMobile();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}
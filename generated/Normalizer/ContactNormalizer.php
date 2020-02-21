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
class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Contact();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'client') && $data->{'client'} !== null) {
            $object->setClient($this->denormalizer->denormalize($data->{'client'}, 'JoliCode\\Harvest\\Api\\Model\\ContactClient', 'json', $context));
        }
        elseif (property_exists($data, 'client') && $data->{'client'} === null) {
            $object->setClient(null);
        }
        if (property_exists($data, 'title') && $data->{'title'} !== null) {
            $object->setTitle($data->{'title'});
        }
        elseif (property_exists($data, 'title') && $data->{'title'} === null) {
            $object->setTitle(null);
        }
        if (property_exists($data, 'first_name') && $data->{'first_name'} !== null) {
            $object->setFirstName($data->{'first_name'});
        }
        elseif (property_exists($data, 'first_name') && $data->{'first_name'} === null) {
            $object->setFirstName(null);
        }
        if (property_exists($data, 'last_name') && $data->{'last_name'} !== null) {
            $object->setLastName($data->{'last_name'});
        }
        elseif (property_exists($data, 'last_name') && $data->{'last_name'} === null) {
            $object->setLastName(null);
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        elseif (property_exists($data, 'email') && $data->{'email'} === null) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'phone_office') && $data->{'phone_office'} !== null) {
            $object->setPhoneOffice($data->{'phone_office'});
        }
        elseif (property_exists($data, 'phone_office') && $data->{'phone_office'} === null) {
            $object->setPhoneOffice(null);
        }
        if (property_exists($data, 'phone_mobile') && $data->{'phone_mobile'} !== null) {
            $object->setPhoneMobile($data->{'phone_mobile'});
        }
        elseif (property_exists($data, 'phone_mobile') && $data->{'phone_mobile'} === null) {
            $object->setPhoneMobile(null);
        }
        if (property_exists($data, 'fax') && $data->{'fax'} !== null) {
            $object->setFax($data->{'fax'});
        }
        elseif (property_exists($data, 'fax') && $data->{'fax'} === null) {
            $object->setFax(null);
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        elseif (property_exists($data, 'created_at') && $data->{'created_at'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }
        elseif (property_exists($data, 'updated_at') && $data->{'updated_at'} === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        else {
            $data->{'id'} = null;
        }
        if (null !== $object->getClient()) {
            $data->{'client'} = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        else {
            $data->{'client'} = null;
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        else {
            $data->{'title'} = null;
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        else {
            $data->{'first_name'} = null;
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        else {
            $data->{'last_name'} = null;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        else {
            $data->{'email'} = null;
        }
        if (null !== $object->getPhoneOffice()) {
            $data->{'phone_office'} = $object->getPhoneOffice();
        }
        else {
            $data->{'phone_office'} = null;
        }
        if (null !== $object->getPhoneMobile()) {
            $data->{'phone_mobile'} = $object->getPhoneMobile();
        }
        else {
            $data->{'phone_mobile'} = null;
        }
        if (null !== $object->getFax()) {
            $data->{'fax'} = $object->getFax();
        }
        else {
            $data->{'fax'} = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'created_at'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'updated_at'} = null;
        }
        return $data;
    }
}
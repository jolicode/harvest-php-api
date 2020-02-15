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
class ContactsContactIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ContactsContactIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ContactsContactIdPatchBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ContactsContactIdPatchBody();
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        elseif (property_exists($data, 'client_id') && $data->{'client_id'} === null) {
            $object->setClientId(null);
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        else {
            $data->{'client_id'} = null;
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
        return $data;
    }
}
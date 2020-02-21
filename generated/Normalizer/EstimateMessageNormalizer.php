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
class EstimateMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage';
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
        $object = new \JoliCode\Harvest\Api\Model\EstimateMessage();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'sent_by') && $data->{'sent_by'} !== null) {
            $object->setSentBy($data->{'sent_by'});
        }
        elseif (property_exists($data, 'sent_by') && $data->{'sent_by'} === null) {
            $object->setSentBy(null);
        }
        if (property_exists($data, 'sent_by_email') && $data->{'sent_by_email'} !== null) {
            $object->setSentByEmail($data->{'sent_by_email'});
        }
        elseif (property_exists($data, 'sent_by_email') && $data->{'sent_by_email'} === null) {
            $object->setSentByEmail(null);
        }
        if (property_exists($data, 'sent_from') && $data->{'sent_from'} !== null) {
            $object->setSentFrom($data->{'sent_from'});
        }
        elseif (property_exists($data, 'sent_from') && $data->{'sent_from'} === null) {
            $object->setSentFrom(null);
        }
        if (property_exists($data, 'sent_from_email') && $data->{'sent_from_email'} !== null) {
            $object->setSentFromEmail($data->{'sent_from_email'});
        }
        elseif (property_exists($data, 'sent_from_email') && $data->{'sent_from_email'} === null) {
            $object->setSentFromEmail(null);
        }
        if (property_exists($data, 'recipients') && $data->{'recipients'} !== null) {
            $values = array();
            foreach ($data->{'recipients'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipient', 'json', $context);
            }
            $object->setRecipients($values);
        }
        elseif (property_exists($data, 'recipients') && $data->{'recipients'} === null) {
            $object->setRecipients(null);
        }
        if (property_exists($data, 'subject') && $data->{'subject'} !== null) {
            $object->setSubject($data->{'subject'});
        }
        elseif (property_exists($data, 'subject') && $data->{'subject'} === null) {
            $object->setSubject(null);
        }
        if (property_exists($data, 'body') && $data->{'body'} !== null) {
            $object->setBody($data->{'body'});
        }
        elseif (property_exists($data, 'body') && $data->{'body'} === null) {
            $object->setBody(null);
        }
        if (property_exists($data, 'send_me_a_copy') && $data->{'send_me_a_copy'} !== null) {
            $object->setSendMeACopy($data->{'send_me_a_copy'});
        }
        elseif (property_exists($data, 'send_me_a_copy') && $data->{'send_me_a_copy'} === null) {
            $object->setSendMeACopy(null);
        }
        if (property_exists($data, 'event_type') && $data->{'event_type'} !== null) {
            $object->setEventType($data->{'event_type'});
        }
        elseif (property_exists($data, 'event_type') && $data->{'event_type'} === null) {
            $object->setEventType(null);
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
        if (null !== $object->getSentBy()) {
            $data->{'sent_by'} = $object->getSentBy();
        }
        else {
            $data->{'sent_by'} = null;
        }
        if (null !== $object->getSentByEmail()) {
            $data->{'sent_by_email'} = $object->getSentByEmail();
        }
        else {
            $data->{'sent_by_email'} = null;
        }
        if (null !== $object->getSentFrom()) {
            $data->{'sent_from'} = $object->getSentFrom();
        }
        else {
            $data->{'sent_from'} = null;
        }
        if (null !== $object->getSentFromEmail()) {
            $data->{'sent_from_email'} = $object->getSentFromEmail();
        }
        else {
            $data->{'sent_from_email'} = null;
        }
        if (null !== $object->getRecipients()) {
            $values = array();
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'recipients'} = $values;
        }
        else {
            $data->{'recipients'} = null;
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        else {
            $data->{'subject'} = null;
        }
        if (null !== $object->getBody()) {
            $data->{'body'} = $object->getBody();
        }
        else {
            $data->{'body'} = null;
        }
        if (null !== $object->getSendMeACopy()) {
            $data->{'send_me_a_copy'} = $object->getSendMeACopy();
        }
        else {
            $data->{'send_me_a_copy'} = null;
        }
        if (null !== $object->getEventType()) {
            $data->{'event_type'} = $object->getEventType();
        }
        else {
            $data->{'event_type'} = null;
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
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
class InvoicesInvoiceIdMessagesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBody';
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
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody();
        if (property_exists($data, 'event_type') && $data->{'event_type'} !== null) {
            $object->setEventType($data->{'event_type'});
        }
        elseif (property_exists($data, 'event_type') && $data->{'event_type'} === null) {
            $object->setEventType(null);
        }
        if (property_exists($data, 'recipients') && $data->{'recipients'} !== null) {
            $values = array();
            foreach ($data->{'recipients'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBodyRecipientsItem', 'json', $context);
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
        if (property_exists($data, 'include_link_to_client_invoice') && $data->{'include_link_to_client_invoice'} !== null) {
            $object->setIncludeLinkToClientInvoice($data->{'include_link_to_client_invoice'});
        }
        elseif (property_exists($data, 'include_link_to_client_invoice') && $data->{'include_link_to_client_invoice'} === null) {
            $object->setIncludeLinkToClientInvoice(null);
        }
        if (property_exists($data, 'attach_pdf') && $data->{'attach_pdf'} !== null) {
            $object->setAttachPdf($data->{'attach_pdf'});
        }
        elseif (property_exists($data, 'attach_pdf') && $data->{'attach_pdf'} === null) {
            $object->setAttachPdf(null);
        }
        if (property_exists($data, 'send_me_a_copy') && $data->{'send_me_a_copy'} !== null) {
            $object->setSendMeACopy($data->{'send_me_a_copy'});
        }
        elseif (property_exists($data, 'send_me_a_copy') && $data->{'send_me_a_copy'} === null) {
            $object->setSendMeACopy(null);
        }
        if (property_exists($data, 'thank_you') && $data->{'thank_you'} !== null) {
            $object->setThankYou($data->{'thank_you'});
        }
        elseif (property_exists($data, 'thank_you') && $data->{'thank_you'} === null) {
            $object->setThankYou(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getEventType()) {
            $data->{'event_type'} = $object->getEventType();
        }
        else {
            $data->{'event_type'} = null;
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
        if (null !== $object->getIncludeLinkToClientInvoice()) {
            $data->{'include_link_to_client_invoice'} = $object->getIncludeLinkToClientInvoice();
        }
        else {
            $data->{'include_link_to_client_invoice'} = null;
        }
        if (null !== $object->getAttachPdf()) {
            $data->{'attach_pdf'} = $object->getAttachPdf();
        }
        else {
            $data->{'attach_pdf'} = null;
        }
        if (null !== $object->getSendMeACopy()) {
            $data->{'send_me_a_copy'} = $object->getSendMeACopy();
        }
        else {
            $data->{'send_me_a_copy'} = null;
        }
        if (null !== $object->getThankYou()) {
            $data->{'thank_you'} = $object->getThankYou();
        }
        else {
            $data->{'thank_you'} = null;
        }
        return $data;
    }
}
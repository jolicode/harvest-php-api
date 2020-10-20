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
class InvoicesInvoiceIdMessagesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('event_type', $data) && $data['event_type'] !== null) {
            $object->setEventType($data['event_type']);
        }
        elseif (\array_key_exists('event_type', $data) && $data['event_type'] === null) {
            $object->setEventType(null);
        }
        if (\array_key_exists('recipients', $data) && $data['recipients'] !== null) {
            $values = array();
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdMessagesPostBodyRecipientsItem', 'json', $context);
            }
            $object->setRecipients($values);
        }
        elseif (\array_key_exists('recipients', $data) && $data['recipients'] === null) {
            $object->setRecipients(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $object->setBody($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('include_link_to_client_invoice', $data) && $data['include_link_to_client_invoice'] !== null) {
            $object->setIncludeLinkToClientInvoice($data['include_link_to_client_invoice']);
        }
        elseif (\array_key_exists('include_link_to_client_invoice', $data) && $data['include_link_to_client_invoice'] === null) {
            $object->setIncludeLinkToClientInvoice(null);
        }
        if (\array_key_exists('attach_pdf', $data) && $data['attach_pdf'] !== null) {
            $object->setAttachPdf($data['attach_pdf']);
        }
        elseif (\array_key_exists('attach_pdf', $data) && $data['attach_pdf'] === null) {
            $object->setAttachPdf(null);
        }
        if (\array_key_exists('send_me_a_copy', $data) && $data['send_me_a_copy'] !== null) {
            $object->setSendMeACopy($data['send_me_a_copy']);
        }
        elseif (\array_key_exists('send_me_a_copy', $data) && $data['send_me_a_copy'] === null) {
            $object->setSendMeACopy(null);
        }
        if (\array_key_exists('thank_you', $data) && $data['thank_you'] !== null) {
            $object->setThankYou($data['thank_you']);
        }
        elseif (\array_key_exists('thank_you', $data) && $data['thank_you'] === null) {
            $object->setThankYou(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        $values = array();
        foreach ($object->getRecipients() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['recipients'] = $values;
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getIncludeLinkToClientInvoice()) {
            $data['include_link_to_client_invoice'] = $object->getIncludeLinkToClientInvoice();
        }
        if (null !== $object->getAttachPdf()) {
            $data['attach_pdf'] = $object->getAttachPdf();
        }
        if (null !== $object->getSendMeACopy()) {
            $data['send_me_a_copy'] = $object->getSendMeACopy();
        }
        if (null !== $object->getThankYou()) {
            $data['thank_you'] = $object->getThankYou();
        }
        return $data;
    }
}
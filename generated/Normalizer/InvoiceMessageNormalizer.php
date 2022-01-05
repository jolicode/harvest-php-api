<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InvoiceMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoiceMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('sent_by', $data) && $data['sent_by'] !== null) {
            $object->setSentBy($data['sent_by']);
        }
        elseif (\array_key_exists('sent_by', $data) && $data['sent_by'] === null) {
            $object->setSentBy(null);
        }
        if (\array_key_exists('sent_by_email', $data) && $data['sent_by_email'] !== null) {
            $object->setSentByEmail($data['sent_by_email']);
        }
        elseif (\array_key_exists('sent_by_email', $data) && $data['sent_by_email'] === null) {
            $object->setSentByEmail(null);
        }
        if (\array_key_exists('sent_from', $data) && $data['sent_from'] !== null) {
            $object->setSentFrom($data['sent_from']);
        }
        elseif (\array_key_exists('sent_from', $data) && $data['sent_from'] === null) {
            $object->setSentFrom(null);
        }
        if (\array_key_exists('sent_from_email', $data) && $data['sent_from_email'] !== null) {
            $object->setSentFromEmail($data['sent_from_email']);
        }
        elseif (\array_key_exists('sent_from_email', $data) && $data['sent_from_email'] === null) {
            $object->setSentFromEmail(null);
        }
        if (\array_key_exists('recipients', $data) && $data['recipients'] !== null) {
            $values = array();
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipient', 'json', $context);
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
        if (\array_key_exists('event_type', $data) && $data['event_type'] !== null) {
            $object->setEventType($data['event_type']);
        }
        elseif (\array_key_exists('event_type', $data) && $data['event_type'] === null) {
            $object->setEventType(null);
        }
        if (\array_key_exists('reminder', $data) && $data['reminder'] !== null) {
            $object->setReminder($data['reminder']);
        }
        elseif (\array_key_exists('reminder', $data) && $data['reminder'] === null) {
            $object->setReminder(null);
        }
        if (\array_key_exists('send_reminder_on', $data) && $data['send_reminder_on'] !== null) {
            $object->setSendReminderOn(\DateTime::createFromFormat('Y-m-d', $data['send_reminder_on'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('send_reminder_on', $data) && $data['send_reminder_on'] === null) {
            $object->setSendReminderOn(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getSentBy()) {
            $data['sent_by'] = $object->getSentBy();
        }
        if (null !== $object->getSentByEmail()) {
            $data['sent_by_email'] = $object->getSentByEmail();
        }
        if (null !== $object->getSentFrom()) {
            $data['sent_from'] = $object->getSentFrom();
        }
        if (null !== $object->getSentFromEmail()) {
            $data['sent_from_email'] = $object->getSentFromEmail();
        }
        if (null !== $object->getRecipients()) {
            $values = array();
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
        }
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
        if (null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        if (null !== $object->getReminder()) {
            $data['reminder'] = $object->getReminder();
        }
        if (null !== $object->getSendReminderOn()) {
            $data['send_reminder_on'] = $object->getSendReminderOn()->format('Y-m-d');
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        return $data;
    }
}
<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InvoiceMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('sent_by', $data) && null !== $data['sent_by']) {
            $object->setSentBy($data['sent_by']);
        } elseif (\array_key_exists('sent_by', $data) && null === $data['sent_by']) {
            $object->setSentBy(null);
        }
        if (\array_key_exists('sent_by_email', $data) && null !== $data['sent_by_email']) {
            $object->setSentByEmail($data['sent_by_email']);
        } elseif (\array_key_exists('sent_by_email', $data) && null === $data['sent_by_email']) {
            $object->setSentByEmail(null);
        }
        if (\array_key_exists('sent_from', $data) && null !== $data['sent_from']) {
            $object->setSentFrom($data['sent_from']);
        } elseif (\array_key_exists('sent_from', $data) && null === $data['sent_from']) {
            $object->setSentFrom(null);
        }
        if (\array_key_exists('sent_from_email', $data) && null !== $data['sent_from_email']) {
            $object->setSentFromEmail($data['sent_from_email']);
        } elseif (\array_key_exists('sent_from_email', $data) && null === $data['sent_from_email']) {
            $object->setSentFromEmail(null);
        }
        if (\array_key_exists('recipients', $data) && null !== $data['recipients']) {
            $values = [];
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipient', 'json', $context);
            }
            $object->setRecipients($values);
        } elseif (\array_key_exists('recipients', $data) && null === $data['recipients']) {
            $object->setRecipients(null);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
        }
        if (\array_key_exists('body', $data) && null !== $data['body']) {
            $object->setBody($data['body']);
        } elseif (\array_key_exists('body', $data) && null === $data['body']) {
            $object->setBody(null);
        }
        if (\array_key_exists('include_link_to_client_invoice', $data) && null !== $data['include_link_to_client_invoice']) {
            $object->setIncludeLinkToClientInvoice($data['include_link_to_client_invoice']);
        } elseif (\array_key_exists('include_link_to_client_invoice', $data) && null === $data['include_link_to_client_invoice']) {
            $object->setIncludeLinkToClientInvoice(null);
        }
        if (\array_key_exists('attach_pdf', $data) && null !== $data['attach_pdf']) {
            $object->setAttachPdf($data['attach_pdf']);
        } elseif (\array_key_exists('attach_pdf', $data) && null === $data['attach_pdf']) {
            $object->setAttachPdf(null);
        }
        if (\array_key_exists('send_me_a_copy', $data) && null !== $data['send_me_a_copy']) {
            $object->setSendMeACopy($data['send_me_a_copy']);
        } elseif (\array_key_exists('send_me_a_copy', $data) && null === $data['send_me_a_copy']) {
            $object->setSendMeACopy(null);
        }
        if (\array_key_exists('thank_you', $data) && null !== $data['thank_you']) {
            $object->setThankYou($data['thank_you']);
        } elseif (\array_key_exists('thank_you', $data) && null === $data['thank_you']) {
            $object->setThankYou(null);
        }
        if (\array_key_exists('event_type', $data) && null !== $data['event_type']) {
            $object->setEventType($data['event_type']);
        } elseif (\array_key_exists('event_type', $data) && null === $data['event_type']) {
            $object->setEventType(null);
        }
        if (\array_key_exists('reminder', $data) && null !== $data['reminder']) {
            $object->setReminder($data['reminder']);
        } elseif (\array_key_exists('reminder', $data) && null === $data['reminder']) {
            $object->setReminder(null);
        }
        if (\array_key_exists('send_reminder_on', $data) && null !== $data['send_reminder_on']) {
            $object->setSendReminderOn(\DateTime::createFromFormat('Y-m-d', $data['send_reminder_on'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('send_reminder_on', $data) && null === $data['send_reminder_on']) {
            $object->setSendReminderOn(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
            $values = [];
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

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
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class InvoicesInvoiceIdMessagesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            if (\array_key_exists('event_type', $data) && null !== $data['event_type']) {
                $object->setEventType($data['event_type']);
                unset($data['event_type']);
            } elseif (\array_key_exists('event_type', $data) && null === $data['event_type']) {
                $object->setEventType(null);
            }
            if (\array_key_exists('recipients', $data) && null !== $data['recipients']) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            } elseif (\array_key_exists('recipients', $data) && null === $data['recipients']) {
                $object->setRecipients(null);
            }
            if (\array_key_exists('subject', $data) && null !== $data['subject']) {
                $object->setSubject($data['subject']);
                unset($data['subject']);
            } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
                $object->setSubject(null);
            }
            if (\array_key_exists('body', $data) && null !== $data['body']) {
                $object->setBody($data['body']);
                unset($data['body']);
            } elseif (\array_key_exists('body', $data) && null === $data['body']) {
                $object->setBody(null);
            }
            if (\array_key_exists('include_link_to_client_invoice', $data) && null !== $data['include_link_to_client_invoice']) {
                $object->setIncludeLinkToClientInvoice($data['include_link_to_client_invoice']);
                unset($data['include_link_to_client_invoice']);
            } elseif (\array_key_exists('include_link_to_client_invoice', $data) && null === $data['include_link_to_client_invoice']) {
                $object->setIncludeLinkToClientInvoice(null);
            }
            if (\array_key_exists('attach_pdf', $data) && null !== $data['attach_pdf']) {
                $object->setAttachPdf($data['attach_pdf']);
                unset($data['attach_pdf']);
            } elseif (\array_key_exists('attach_pdf', $data) && null === $data['attach_pdf']) {
                $object->setAttachPdf(null);
            }
            if (\array_key_exists('send_me_a_copy', $data) && null !== $data['send_me_a_copy']) {
                $object->setSendMeACopy($data['send_me_a_copy']);
                unset($data['send_me_a_copy']);
            } elseif (\array_key_exists('send_me_a_copy', $data) && null === $data['send_me_a_copy']) {
                $object->setSendMeACopy(null);
            }
            if (\array_key_exists('thank_you', $data) && null !== $data['thank_you']) {
                $object->setThankYou($data['thank_you']);
                unset($data['thank_you']);
            } elseif (\array_key_exists('thank_you', $data) && null === $data['thank_you']) {
                $object->setThankYou(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['event_type'] = $object->getEventType();
            }
            if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
                $values = [];
                foreach ($object->getRecipients() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recipients'] = $values;
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('includeLinkToClientInvoice') && null !== $object->getIncludeLinkToClientInvoice()) {
                $data['include_link_to_client_invoice'] = $object->getIncludeLinkToClientInvoice();
            }
            if ($object->isInitialized('attachPdf') && null !== $object->getAttachPdf()) {
                $data['attach_pdf'] = $object->getAttachPdf();
            }
            if ($object->isInitialized('sendMeACopy') && null !== $object->getSendMeACopy()) {
                $data['send_me_a_copy'] = $object->getSendMeACopy();
            }
            if ($object->isInitialized('thankYou') && null !== $object->getThankYou()) {
                $data['thank_you'] = $object->getThankYou();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => false];
        }
    }
} else {
    class InvoicesInvoiceIdMessagesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('event_type', $data) && null !== $data['event_type']) {
                $object->setEventType($data['event_type']);
                unset($data['event_type']);
            } elseif (\array_key_exists('event_type', $data) && null === $data['event_type']) {
                $object->setEventType(null);
            }
            if (\array_key_exists('recipients', $data) && null !== $data['recipients']) {
                $values = [];
                foreach ($data['recipients'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBodyRecipientsItem::class, 'json', $context);
                }
                $object->setRecipients($values);
                unset($data['recipients']);
            } elseif (\array_key_exists('recipients', $data) && null === $data['recipients']) {
                $object->setRecipients(null);
            }
            if (\array_key_exists('subject', $data) && null !== $data['subject']) {
                $object->setSubject($data['subject']);
                unset($data['subject']);
            } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
                $object->setSubject(null);
            }
            if (\array_key_exists('body', $data) && null !== $data['body']) {
                $object->setBody($data['body']);
                unset($data['body']);
            } elseif (\array_key_exists('body', $data) && null === $data['body']) {
                $object->setBody(null);
            }
            if (\array_key_exists('include_link_to_client_invoice', $data) && null !== $data['include_link_to_client_invoice']) {
                $object->setIncludeLinkToClientInvoice($data['include_link_to_client_invoice']);
                unset($data['include_link_to_client_invoice']);
            } elseif (\array_key_exists('include_link_to_client_invoice', $data) && null === $data['include_link_to_client_invoice']) {
                $object->setIncludeLinkToClientInvoice(null);
            }
            if (\array_key_exists('attach_pdf', $data) && null !== $data['attach_pdf']) {
                $object->setAttachPdf($data['attach_pdf']);
                unset($data['attach_pdf']);
            } elseif (\array_key_exists('attach_pdf', $data) && null === $data['attach_pdf']) {
                $object->setAttachPdf(null);
            }
            if (\array_key_exists('send_me_a_copy', $data) && null !== $data['send_me_a_copy']) {
                $object->setSendMeACopy($data['send_me_a_copy']);
                unset($data['send_me_a_copy']);
            } elseif (\array_key_exists('send_me_a_copy', $data) && null === $data['send_me_a_copy']) {
                $object->setSendMeACopy(null);
            }
            if (\array_key_exists('thank_you', $data) && null !== $data['thank_you']) {
                $object->setThankYou($data['thank_you']);
                unset($data['thank_you']);
            } elseif (\array_key_exists('thank_you', $data) && null === $data['thank_you']) {
                $object->setThankYou(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
                $data['event_type'] = $object->getEventType();
            }
            if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
                $values = [];
                foreach ($object->getRecipients() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recipients'] = $values;
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('body') && null !== $object->getBody()) {
                $data['body'] = $object->getBody();
            }
            if ($object->isInitialized('includeLinkToClientInvoice') && null !== $object->getIncludeLinkToClientInvoice()) {
                $data['include_link_to_client_invoice'] = $object->getIncludeLinkToClientInvoice();
            }
            if ($object->isInitialized('attachPdf') && null !== $object->getAttachPdf()) {
                $data['attach_pdf'] = $object->getAttachPdf();
            }
            if ($object->isInitialized('sendMeACopy') && null !== $object->getSendMeACopy()) {
                $data['send_me_a_copy'] = $object->getSendMeACopy();
            }
            if ($object->isInitialized('thankYou') && null !== $object->getThankYou()) {
                $data['thank_you'] = $object->getThankYou();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => false];
        }
    }
}

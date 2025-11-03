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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
        if (\array_key_exists('include_link_to_client_invoice', $data) && \is_int($data['include_link_to_client_invoice'])) {
            $data['include_link_to_client_invoice'] = (bool) $data['include_link_to_client_invoice'];
        }
        if (\array_key_exists('attach_pdf', $data) && \is_int($data['attach_pdf'])) {
            $data['attach_pdf'] = (bool) $data['attach_pdf'];
        }
        if (\array_key_exists('send_me_a_copy', $data) && \is_int($data['send_me_a_copy'])) {
            $data['send_me_a_copy'] = (bool) $data['send_me_a_copy'];
        }
        if (\array_key_exists('thank_you', $data) && \is_int($data['thank_you'])) {
            $data['thank_you'] = (bool) $data['thank_you'];
        }
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('eventType') && null !== $data->getEventType()) {
            $dataArray['event_type'] = $data->getEventType();
        }
        if ($data->isInitialized('recipients') && null !== $data->getRecipients()) {
            $values = [];
            foreach ($data->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['recipients'] = $values;
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('includeLinkToClientInvoice') && null !== $data->getIncludeLinkToClientInvoice()) {
            $dataArray['include_link_to_client_invoice'] = $data->getIncludeLinkToClientInvoice();
        }
        if ($data->isInitialized('attachPdf') && null !== $data->getAttachPdf()) {
            $dataArray['attach_pdf'] = $data->getAttachPdf();
        }
        if ($data->isInitialized('sendMeACopy') && null !== $data->getSendMeACopy()) {
            $dataArray['send_me_a_copy'] = $data->getSendMeACopy();
        }
        if ($data->isInitialized('thankYou') && null !== $data->getThankYou()) {
            $dataArray['thank_you'] = $data->getThankYou();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\InvoicesInvoiceIdMessagesPostBody::class => false];
    }
}

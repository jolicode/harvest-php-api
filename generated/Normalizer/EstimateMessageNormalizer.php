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

class EstimateMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\EstimateMessage' === $data::class;
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
        $object = new \JoliCode\Harvest\Api\Model\EstimateMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('sent_by', $data) && null !== $data['sent_by']) {
            $object->setSentBy($data['sent_by']);
            unset($data['sent_by']);
        } elseif (\array_key_exists('sent_by', $data) && null === $data['sent_by']) {
            $object->setSentBy(null);
        }
        if (\array_key_exists('sent_by_email', $data) && null !== $data['sent_by_email']) {
            $object->setSentByEmail($data['sent_by_email']);
            unset($data['sent_by_email']);
        } elseif (\array_key_exists('sent_by_email', $data) && null === $data['sent_by_email']) {
            $object->setSentByEmail(null);
        }
        if (\array_key_exists('sent_from', $data) && null !== $data['sent_from']) {
            $object->setSentFrom($data['sent_from']);
            unset($data['sent_from']);
        } elseif (\array_key_exists('sent_from', $data) && null === $data['sent_from']) {
            $object->setSentFrom(null);
        }
        if (\array_key_exists('sent_from_email', $data) && null !== $data['sent_from_email']) {
            $object->setSentFromEmail($data['sent_from_email']);
            unset($data['sent_from_email']);
        } elseif (\array_key_exists('sent_from_email', $data) && null === $data['sent_from_email']) {
            $object->setSentFromEmail(null);
        }
        if (\array_key_exists('recipients', $data) && null !== $data['recipients']) {
            $values = [];
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimateMessageRecipient', 'json', $context);
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
        if (\array_key_exists('send_me_a_copy', $data) && null !== $data['send_me_a_copy']) {
            $object->setSendMeACopy($data['send_me_a_copy']);
            unset($data['send_me_a_copy']);
        } elseif (\array_key_exists('send_me_a_copy', $data) && null === $data['send_me_a_copy']) {
            $object->setSendMeACopy(null);
        }
        if (\array_key_exists('event_type', $data) && null !== $data['event_type']) {
            $object->setEventType($data['event_type']);
            unset($data['event_type']);
        } elseif (\array_key_exists('event_type', $data) && null === $data['event_type']) {
            $object->setEventType(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
            unset($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
            unset($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('sentBy') && null !== $object->getSentBy()) {
            $data['sent_by'] = $object->getSentBy();
        }
        if ($object->isInitialized('sentByEmail') && null !== $object->getSentByEmail()) {
            $data['sent_by_email'] = $object->getSentByEmail();
        }
        if ($object->isInitialized('sentFrom') && null !== $object->getSentFrom()) {
            $data['sent_from'] = $object->getSentFrom();
        }
        if ($object->isInitialized('sentFromEmail') && null !== $object->getSentFromEmail()) {
            $data['sent_from_email'] = $object->getSentFromEmail();
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
        if ($object->isInitialized('sendMeACopy') && null !== $object->getSendMeACopy()) {
            $data['send_me_a_copy'] = $object->getSendMeACopy();
        }
        if ($object->isInitialized('eventType') && null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\EstimateMessage' => false];
    }
}

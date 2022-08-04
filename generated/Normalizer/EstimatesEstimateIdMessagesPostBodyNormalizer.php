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

class EstimatesEstimateIdMessagesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBody' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\EstimatesEstimateIdMessagesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('event_type', $data) && null !== $data['event_type']) {
            $object->setEventType($data['event_type']);
        } elseif (\array_key_exists('event_type', $data) && null === $data['event_type']) {
            $object->setEventType(null);
        }
        if (\array_key_exists('recipients', $data) && null !== $data['recipients']) {
            $values = [];
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdMessagesPostBodyRecipientsItem', 'json', $context);
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
        if (\array_key_exists('send_me_a_copy', $data) && null !== $data['send_me_a_copy']) {
            $object->setSendMeACopy($data['send_me_a_copy']);
        } elseif (\array_key_exists('send_me_a_copy', $data) && null === $data['send_me_a_copy']) {
            $object->setSendMeACopy(null);
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
        if (null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        $values = [];
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
        if (null !== $object->getSendMeACopy()) {
            $data['send_me_a_copy'] = $object->getSendMeACopy();
        }

        return $data;
    }
}

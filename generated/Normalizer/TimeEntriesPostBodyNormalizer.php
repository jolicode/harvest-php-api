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

class TimeEntriesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBody' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\TimeEntriesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
            $object->setTaskId($data['task_id']);
        } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('started_time', $data) && null !== $data['started_time']) {
            $object->setStartedTime($data['started_time']);
        } elseif (\array_key_exists('started_time', $data) && null === $data['started_time']) {
            $object->setStartedTime(null);
        }
        if (\array_key_exists('ended_time', $data) && null !== $data['ended_time']) {
            $object->setEndedTime($data['ended_time']);
        } elseif (\array_key_exists('ended_time', $data) && null === $data['ended_time']) {
            $object->setEndedTime(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'JoliCode\\Harvest\\Api\\Model\\TimeEntriesPostBodyExternalReference', 'json', $context));
        } elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
            $object->setExternalReference(null);
        }
        if (\array_key_exists('hours', $data) && null !== $data['hours']) {
            $object->setHours($data['hours']);
        } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
            $object->setHours(null);
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
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        $data['project_id'] = $object->getProjectId();
        $data['task_id'] = $object->getTaskId();
        $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        if (null !== $object->getStartedTime()) {
            $data['started_time'] = $object->getStartedTime();
        }
        if (null !== $object->getEndedTime()) {
            $data['ended_time'] = $object->getEndedTime();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getExternalReference()) {
            $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }

        return $data;
    }
}

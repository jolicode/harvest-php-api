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

class TimeEntriesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntriesPostBody();
        if (\array_key_exists('hours', $data) && \is_int($data['hours'])) {
            $data['hours'] = (float) $data['hours'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('task_id', $data) && null !== $data['task_id']) {
            $object->setTaskId($data['task_id']);
            unset($data['task_id']);
        } elseif (\array_key_exists('task_id', $data) && null === $data['task_id']) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('spent_date', $data) && null !== $data['spent_date']) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
            unset($data['spent_date']);
        } elseif (\array_key_exists('spent_date', $data) && null === $data['spent_date']) {
            $object->setSpentDate(null);
        }
        if (\array_key_exists('started_time', $data) && null !== $data['started_time']) {
            $object->setStartedTime($data['started_time']);
            unset($data['started_time']);
        } elseif (\array_key_exists('started_time', $data) && null === $data['started_time']) {
            $object->setStartedTime(null);
        }
        if (\array_key_exists('ended_time', $data) && null !== $data['ended_time']) {
            $object->setEndedTime($data['ended_time']);
            unset($data['ended_time']);
        } elseif (\array_key_exists('ended_time', $data) && null === $data['ended_time']) {
            $object->setEndedTime(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class, 'json', $context));
            unset($data['external_reference']);
        } elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
            $object->setExternalReference(null);
        }
        if (\array_key_exists('hours', $data) && null !== $data['hours']) {
            $object->setHours($data['hours']);
            unset($data['hours']);
        } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
            $object->setHours(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        $dataArray['project_id'] = $data->getProjectId();
        $dataArray['task_id'] = $data->getTaskId();
        $dataArray['spent_date'] = $data->getSpentDate()->format('Y-m-d');
        if ($data->isInitialized('startedTime') && null !== $data->getStartedTime()) {
            $dataArray['started_time'] = $data->getStartedTime();
        }
        if ($data->isInitialized('endedTime') && null !== $data->getEndedTime()) {
            $dataArray['ended_time'] = $data->getEndedTime();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('externalReference') && null !== $data->getExternalReference()) {
            $dataArray['external_reference'] = $this->normalizer->normalize($data->getExternalReference(), 'json', $context);
        }
        if ($data->isInitialized('hours') && null !== $data->getHours()) {
            $dataArray['hours'] = $data->getHours();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\TimeEntriesPostBody::class => false];
    }
}

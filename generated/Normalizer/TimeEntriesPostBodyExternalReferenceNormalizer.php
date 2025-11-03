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

class TimeEntriesPostBodyExternalReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('group_id', $data) && null !== $data['group_id']) {
            $object->setGroupId($data['group_id']);
            unset($data['group_id']);
        } elseif (\array_key_exists('group_id', $data) && null === $data['group_id']) {
            $object->setGroupId(null);
        }
        if (\array_key_exists('account_id', $data) && null !== $data['account_id']) {
            $object->setAccountId($data['account_id']);
            unset($data['account_id']);
        } elseif (\array_key_exists('account_id', $data) && null === $data['account_id']) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('permalink', $data) && null !== $data['permalink']) {
            $object->setPermalink($data['permalink']);
            unset($data['permalink']);
        } elseif (\array_key_exists('permalink', $data) && null === $data['permalink']) {
            $object->setPermalink(null);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('groupId') && null !== $data->getGroupId()) {
            $dataArray['group_id'] = $data->getGroupId();
        }
        if ($data->isInitialized('accountId') && null !== $data->getAccountId()) {
            $dataArray['account_id'] = $data->getAccountId();
        }
        if ($data->isInitialized('permalink') && null !== $data->getPermalink()) {
            $dataArray['permalink'] = $data->getPermalink();
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
        return [\JoliCode\Harvest\Api\Model\TimeEntriesPostBodyExternalReference::class => false];
    }
}

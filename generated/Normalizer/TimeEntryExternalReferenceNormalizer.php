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
    class TimeEntryExternalReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\TimeEntryExternalReference();
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
            if (\array_key_exists('service', $data) && null !== $data['service']) {
                $object->setService($data['service']);
                unset($data['service']);
            } elseif (\array_key_exists('service', $data) && null === $data['service']) {
                $object->setService(null);
            }
            if (\array_key_exists('service_icon_url', $data) && null !== $data['service_icon_url']) {
                $object->setServiceIconUrl($data['service_icon_url']);
                unset($data['service_icon_url']);
            } elseif (\array_key_exists('service_icon_url', $data) && null === $data['service_icon_url']) {
                $object->setServiceIconUrl(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('groupId') && null !== $object->getGroupId()) {
                $data['group_id'] = $object->getGroupId();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
                $data['permalink'] = $object->getPermalink();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('serviceIconUrl') && null !== $object->getServiceIconUrl()) {
                $data['service_icon_url'] = $object->getServiceIconUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' => false];
        }
    }
} else {
    class TimeEntryExternalReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\TimeEntryExternalReference();
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
            if (\array_key_exists('service', $data) && null !== $data['service']) {
                $object->setService($data['service']);
                unset($data['service']);
            } elseif (\array_key_exists('service', $data) && null === $data['service']) {
                $object->setService(null);
            }
            if (\array_key_exists('service_icon_url', $data) && null !== $data['service_icon_url']) {
                $object->setServiceIconUrl($data['service_icon_url']);
                unset($data['service_icon_url']);
            } elseif (\array_key_exists('service_icon_url', $data) && null === $data['service_icon_url']) {
                $object->setServiceIconUrl(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
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
            if ($object->isInitialized('groupId') && null !== $object->getGroupId()) {
                $data['group_id'] = $object->getGroupId();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
                $data['permalink'] = $object->getPermalink();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('serviceIconUrl') && null !== $object->getServiceIconUrl()) {
                $data['service_icon_url'] = $object->getServiceIconUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference' => false];
        }
    }
}

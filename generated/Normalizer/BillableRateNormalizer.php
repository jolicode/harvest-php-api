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
    class BillableRateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\BillableRate::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\BillableRate::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\BillableRate();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (float) $data['amount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
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
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
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
            return [\JoliCode\Harvest\Api\Model\BillableRate::class => false];
        }
    }
} else {
    class BillableRateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\BillableRate::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\BillableRate::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\BillableRate();
            if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
                $data['amount'] = (float) $data['amount'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:s\Z');
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:s\Z');
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
            return [\JoliCode\Harvest\Api\Model\BillableRate::class => false];
        }
    }
}

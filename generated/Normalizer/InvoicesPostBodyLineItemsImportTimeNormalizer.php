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
    class InvoicesPostBodyLineItemsImportTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('summary_type', $data)) {
                $object->setSummaryType($data['summary_type']);
                unset($data['summary_type']);
            }
            if (\array_key_exists('from', $data)) {
                $object->setFrom(\DateTime::createFromFormat('Y-m-d', $data['from'])->setTime(0, 0, 0));
                unset($data['from']);
            }
            if (\array_key_exists('to', $data)) {
                $object->setTo(\DateTime::createFromFormat('Y-m-d', $data['to'])->setTime(0, 0, 0));
                unset($data['to']);
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
            $data['summary_type'] = $object->getSummaryType();
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $object->getFrom()->format('Y-m-d');
            }
            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $object->getTo()->format('Y-m-d');
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
            return ['JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' => false];
        }
    }
} else {
    class InvoicesPostBodyLineItemsImportTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' === $data::class;
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
            $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('summary_type', $data)) {
                $object->setSummaryType($data['summary_type']);
                unset($data['summary_type']);
            }
            if (\array_key_exists('from', $data)) {
                $object->setFrom(\DateTime::createFromFormat('Y-m-d', $data['from'])->setTime(0, 0, 0));
                unset($data['from']);
            }
            if (\array_key_exists('to', $data)) {
                $object->setTo(\DateTime::createFromFormat('Y-m-d', $data['to'])->setTime(0, 0, 0));
                unset($data['to']);
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
            $data['summary_type'] = $object->getSummaryType();
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $object->getFrom()->format('Y-m-d');
            }
            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $object->getTo()->format('Y-m-d');
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
            return ['JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime' => false];
        }
    }
}

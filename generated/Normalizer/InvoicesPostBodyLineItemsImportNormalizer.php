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
    class InvoicesPostBodyLineItemsImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_ids', $data)) {
                $values = [];
                foreach ($data['project_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setProjectIds($values);
                unset($data['project_ids']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($this->denormalizer->denormalize($data['time'], \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class, 'json', $context));
                unset($data['time']);
            }
            if (\array_key_exists('expenses', $data)) {
                $object->setExpenses($this->denormalizer->denormalize($data['expenses'], \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class, 'json', $context));
                unset($data['expenses']);
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
            $values = [];
            foreach ($object->getProjectIds() as $value) {
                $values[] = $value;
            }
            $data['project_ids'] = $values;
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
            }
            if ($object->isInitialized('expenses') && null !== $object->getExpenses()) {
                $data['expenses'] = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
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
            return [\JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => false];
        }
    }
} else {
    class InvoicesPostBodyLineItemsImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_ids', $data)) {
                $values = [];
                foreach ($data['project_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setProjectIds($values);
                unset($data['project_ids']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($this->denormalizer->denormalize($data['time'], \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportTime::class, 'json', $context));
                unset($data['time']);
            }
            if (\array_key_exists('expenses', $data)) {
                $object->setExpenses($this->denormalizer->denormalize($data['expenses'], \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImportExpenses::class, 'json', $context));
                unset($data['expenses']);
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
            $values = [];
            foreach ($object->getProjectIds() as $value) {
                $values[] = $value;
            }
            $data['project_ids'] = $values;
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
            }
            if ($object->isInitialized('expenses') && null !== $object->getExpenses()) {
                $data['expenses'] = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
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
            return [\JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => false];
        }
    }
}

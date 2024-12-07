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
    class InvoiceLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoiceLineItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoiceLineItem::class === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\InvoiceLineItem();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (float) $data['quantity'];
            }
            if (\array_key_exists('unit_price', $data) && \is_int($data['unit_price'])) {
                $data['unit_price'] = (float) $data['unit_price'];
            }
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
            if (\array_key_exists('project', $data) && null !== $data['project']) {
                $object->setProject($this->denormalizer->denormalize($data['project'], \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class, 'json', $context));
                unset($data['project']);
            } elseif (\array_key_exists('project', $data) && null === $data['project']) {
                $object->setProject(null);
            }
            if (\array_key_exists('kind', $data) && null !== $data['kind']) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            } elseif (\array_key_exists('kind', $data) && null === $data['kind']) {
                $object->setKind(null);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('unit_price', $data) && null !== $data['unit_price']) {
                $object->setUnitPrice($data['unit_price']);
                unset($data['unit_price']);
            } elseif (\array_key_exists('unit_price', $data) && null === $data['unit_price']) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('taxed', $data) && null !== $data['taxed']) {
                $object->setTaxed($data['taxed']);
                unset($data['taxed']);
            } elseif (\array_key_exists('taxed', $data) && null === $data['taxed']) {
                $object->setTaxed(null);
            }
            if (\array_key_exists('taxed2', $data) && null !== $data['taxed2']) {
                $object->setTaxed2($data['taxed2']);
                unset($data['taxed2']);
            } elseif (\array_key_exists('taxed2', $data) && null === $data['taxed2']) {
                $object->setTaxed2(null);
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
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('kind') && null !== $object->getKind()) {
                $data['kind'] = $object->getKind();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unit_price'] = $object->getUnitPrice();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('taxed') && null !== $object->getTaxed()) {
                $data['taxed'] = $object->getTaxed();
            }
            if ($object->isInitialized('taxed2') && null !== $object->getTaxed2()) {
                $data['taxed2'] = $object->getTaxed2();
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
            return [\JoliCode\Harvest\Api\Model\InvoiceLineItem::class => false];
        }
    }
} else {
    class InvoiceLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \JoliCode\Harvest\Api\Model\InvoiceLineItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoiceLineItem::class === $data::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Harvest\Api\Model\InvoiceLineItem();
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (float) $data['quantity'];
            }
            if (\array_key_exists('unit_price', $data) && \is_int($data['unit_price'])) {
                $data['unit_price'] = (float) $data['unit_price'];
            }
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
            if (\array_key_exists('project', $data) && null !== $data['project']) {
                $object->setProject($this->denormalizer->denormalize($data['project'], \JoliCode\Harvest\Api\Model\InvoiceLineItemProject::class, 'json', $context));
                unset($data['project']);
            } elseif (\array_key_exists('project', $data) && null === $data['project']) {
                $object->setProject(null);
            }
            if (\array_key_exists('kind', $data) && null !== $data['kind']) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            } elseif (\array_key_exists('kind', $data) && null === $data['kind']) {
                $object->setKind(null);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('unit_price', $data) && null !== $data['unit_price']) {
                $object->setUnitPrice($data['unit_price']);
                unset($data['unit_price']);
            } elseif (\array_key_exists('unit_price', $data) && null === $data['unit_price']) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('taxed', $data) && null !== $data['taxed']) {
                $object->setTaxed($data['taxed']);
                unset($data['taxed']);
            } elseif (\array_key_exists('taxed', $data) && null === $data['taxed']) {
                $object->setTaxed(null);
            }
            if (\array_key_exists('taxed2', $data) && null !== $data['taxed2']) {
                $object->setTaxed2($data['taxed2']);
                unset($data['taxed2']);
            } elseif (\array_key_exists('taxed2', $data) && null === $data['taxed2']) {
                $object->setTaxed2(null);
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
            if ($object->isInitialized('project') && null !== $object->getProject()) {
                $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            }
            if ($object->isInitialized('kind') && null !== $object->getKind()) {
                $data['kind'] = $object->getKind();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['unit_price'] = $object->getUnitPrice();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('taxed') && null !== $object->getTaxed()) {
                $data['taxed'] = $object->getTaxed();
            }
            if ($object->isInitialized('taxed2') && null !== $object->getTaxed2()) {
                $data['taxed2'] = $object->getTaxed2();
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
            return [\JoliCode\Harvest\Api\Model\InvoiceLineItem::class => false];
        }
    }
}

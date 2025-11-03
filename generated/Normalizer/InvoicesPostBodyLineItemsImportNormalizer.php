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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getProjectIds() as $value) {
            $values[] = $value;
        }
        $dataArray['project_ids'] = $values;
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $this->normalizer->normalize($data->getTime(), 'json', $context);
        }
        if ($data->isInitialized('expenses') && null !== $data->getExpenses()) {
            $dataArray['expenses'] = $this->normalizer->normalize($data->getExpenses(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsImport::class => false];
    }
}

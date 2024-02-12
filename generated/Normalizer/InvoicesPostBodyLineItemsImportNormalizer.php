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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize(mixed $data, string $class, ?string $format = null, array $context = []):mixed
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
            $object->setTime($this->denormalizer->denormalize($data['time'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime', 'json', $context));
            unset($data['time']);
        }
        if (\array_key_exists('expenses', $data)) {
            $object->setExpenses($this->denormalizer->denormalize($data['expenses'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses', 'json', $context));
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
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
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

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' => false];
    }
}

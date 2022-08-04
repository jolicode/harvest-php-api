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

class InvoicesPostBodyLineItemsImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImport' === \get_class($data);
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
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($this->denormalizer->denormalize($data['time'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportTime', 'json', $context));
        }
        if (\array_key_exists('expenses', $data)) {
            $object->setExpenses($this->denormalizer->denormalize($data['expenses'], 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsImportExpenses', 'json', $context));
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
        $values = [];
        foreach ($object->getProjectIds() as $value) {
            $values[] = $value;
        }
        $data['project_ids'] = $values;
        if (null !== $object->getTime()) {
            $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
        }
        if (null !== $object->getExpenses()) {
            $data['expenses'] = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
        }

        return $data;
    }
}

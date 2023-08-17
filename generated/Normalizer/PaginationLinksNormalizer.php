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

class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks' === $data::class;
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
        $object = new \JoliCode\Harvest\Api\Model\PaginationLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($data['first']);
            unset($data['first']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($data['last']);
            unset($data['last']);
        }
        if (\array_key_exists('previous', $data) && null !== $data['previous']) {
            $object->setPrevious($data['previous']);
            unset($data['previous']);
        } elseif (\array_key_exists('previous', $data) && null === $data['previous']) {
            $object->setPrevious(null);
        }
        if (\array_key_exists('next', $data) && null !== $data['next']) {
            $object->setNext($data['next']);
            unset($data['next']);
        } elseif (\array_key_exists('next', $data) && null === $data['next']) {
            $object->setNext(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['first'] = $object->getFirst();
        $data['last'] = $object->getLast();
        if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
            $data['previous'] = $object->getPrevious();
        }
        if ($object->isInitialized('next') && null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\PaginationLinks' => false];
    }
}

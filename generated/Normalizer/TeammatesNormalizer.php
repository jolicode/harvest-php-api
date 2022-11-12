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

class TeammatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\Teammates' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Teammates' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\Teammates();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('teammates', $data)) {
            $values = [];
            foreach ($data['teammates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\Teammate', 'json', $context);
            }
            $object->setTeammates($values);
        }
        if (\array_key_exists('per_page', $data)) {
            $object->setPerPage($data['per_page']);
        }
        if (\array_key_exists('total_pages', $data)) {
            $object->setTotalPages($data['total_pages']);
        }
        if (\array_key_exists('total_entries', $data)) {
            $object->setTotalEntries($data['total_entries']);
        }
        if (\array_key_exists('next_page', $data) && null !== $data['next_page']) {
            $object->setNextPage($data['next_page']);
        } elseif (\array_key_exists('next_page', $data) && null === $data['next_page']) {
            $object->setNextPage(null);
        }
        if (\array_key_exists('previous_page', $data) && null !== $data['previous_page']) {
            $object->setPreviousPage($data['previous_page']);
        } elseif (\array_key_exists('previous_page', $data) && null === $data['previous_page']) {
            $object->setPreviousPage(null);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks', 'json', $context));
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
        foreach ($object->getTeammates() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['teammates'] = $values;
        $data['per_page'] = $object->getPerPage();
        $data['total_pages'] = $object->getTotalPages();
        $data['total_entries'] = $object->getTotalEntries();
        $data['next_page'] = $object->getNextPage();
        $data['previous_page'] = $object->getPreviousPage();
        $data['page'] = $object->getPage();
        $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);

        return $data;
    }
}
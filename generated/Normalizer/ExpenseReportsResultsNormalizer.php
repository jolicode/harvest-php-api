<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ExpenseReportsResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResults';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResults';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\ExpenseReportsResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('results', $data) && $data['results'] !== null) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\ExpenseReportsResult', 'json', $context);
            }
            $object->setResults($values);
        }
        elseif (\array_key_exists('results', $data) && $data['results'] === null) {
            $object->setResults(null);
        }
        if (\array_key_exists('per_page', $data) && $data['per_page'] !== null) {
            $object->setPerPage($data['per_page']);
        }
        elseif (\array_key_exists('per_page', $data) && $data['per_page'] === null) {
            $object->setPerPage(null);
        }
        if (\array_key_exists('total_pages', $data) && $data['total_pages'] !== null) {
            $object->setTotalPages($data['total_pages']);
        }
        elseif (\array_key_exists('total_pages', $data) && $data['total_pages'] === null) {
            $object->setTotalPages(null);
        }
        if (\array_key_exists('total_entries', $data) && $data['total_entries'] !== null) {
            $object->setTotalEntries($data['total_entries']);
        }
        elseif (\array_key_exists('total_entries', $data) && $data['total_entries'] === null) {
            $object->setTotalEntries(null);
        }
        if (\array_key_exists('next_page', $data) && $data['next_page'] !== null) {
            $object->setNextPage($data['next_page']);
        }
        elseif (\array_key_exists('next_page', $data) && $data['next_page'] === null) {
            $object->setNextPage(null);
        }
        if (\array_key_exists('previous_page', $data) && $data['previous_page'] !== null) {
            $object->setPreviousPage($data['previous_page']);
        }
        elseif (\array_key_exists('previous_page', $data) && $data['previous_page'] === null) {
            $object->setPreviousPage(null);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        }
        elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks', 'json', $context));
        }
        elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['results'] = $values;
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
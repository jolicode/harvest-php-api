<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserAssignmentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\UserAssignments';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\UserAssignments';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\UserAssignments();
        if (property_exists($data, 'user_assignments') && $data->{'user_assignments'} !== null) {
            $values = array();
            foreach ($data->{'user_assignments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json', $context);
            }
            $object->setUserAssignments($values);
        }
        elseif (property_exists($data, 'user_assignments') && $data->{'user_assignments'} === null) {
            $object->setUserAssignments(null);
        }
        if (property_exists($data, 'per_page') && $data->{'per_page'} !== null) {
            $object->setPerPage($data->{'per_page'});
        }
        elseif (property_exists($data, 'per_page') && $data->{'per_page'} === null) {
            $object->setPerPage(null);
        }
        if (property_exists($data, 'total_pages') && $data->{'total_pages'} !== null) {
            $object->setTotalPages($data->{'total_pages'});
        }
        elseif (property_exists($data, 'total_pages') && $data->{'total_pages'} === null) {
            $object->setTotalPages(null);
        }
        if (property_exists($data, 'total_entries') && $data->{'total_entries'} !== null) {
            $object->setTotalEntries($data->{'total_entries'});
        }
        elseif (property_exists($data, 'total_entries') && $data->{'total_entries'} === null) {
            $object->setTotalEntries(null);
        }
        if (property_exists($data, 'next_page') && $data->{'next_page'} !== null) {
            $object->setNextPage($data->{'next_page'});
        }
        elseif (property_exists($data, 'next_page') && $data->{'next_page'} === null) {
            $object->setNextPage(null);
        }
        if (property_exists($data, 'previous_page') && $data->{'previous_page'} !== null) {
            $object->setPreviousPage($data->{'previous_page'});
        }
        elseif (property_exists($data, 'previous_page') && $data->{'previous_page'} === null) {
            $object->setPreviousPage(null);
        }
        if (property_exists($data, 'page') && $data->{'page'} !== null) {
            $object->setPage($data->{'page'});
        }
        elseif (property_exists($data, 'page') && $data->{'page'} === null) {
            $object->setPage(null);
        }
        if (property_exists($data, 'links') && $data->{'links'} !== null) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks', 'json', $context));
        }
        elseif (property_exists($data, 'links') && $data->{'links'} === null) {
            $object->setLinks(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUserAssignments()) {
            $values = array();
            foreach ($object->getUserAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'user_assignments'} = $values;
        }
        else {
            $data->{'user_assignments'} = null;
        }
        if (null !== $object->getPerPage()) {
            $data->{'per_page'} = $object->getPerPage();
        }
        else {
            $data->{'per_page'} = null;
        }
        if (null !== $object->getTotalPages()) {
            $data->{'total_pages'} = $object->getTotalPages();
        }
        else {
            $data->{'total_pages'} = null;
        }
        if (null !== $object->getTotalEntries()) {
            $data->{'total_entries'} = $object->getTotalEntries();
        }
        else {
            $data->{'total_entries'} = null;
        }
        if (null !== $object->getNextPage()) {
            $data->{'next_page'} = $object->getNextPage();
        }
        else {
            $data->{'next_page'} = null;
        }
        if (null !== $object->getPreviousPage()) {
            $data->{'previous_page'} = $object->getPreviousPage();
        }
        else {
            $data->{'previous_page'} = null;
        }
        if (null !== $object->getPage()) {
            $data->{'page'} = $object->getPage();
        }
        else {
            $data->{'page'} = null;
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        else {
            $data->{'links'} = null;
        }
        return $data;
    }
}
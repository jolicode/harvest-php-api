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
class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks';
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
        $object = new \JoliCode\Harvest\Api\Model\PaginationLinks();
        if (property_exists($data, 'first') && $data->{'first'} !== null) {
            $object->setFirst($data->{'first'});
        }
        elseif (property_exists($data, 'first') && $data->{'first'} === null) {
            $object->setFirst(null);
        }
        if (property_exists($data, 'last') && $data->{'last'} !== null) {
            $object->setLast($data->{'last'});
        }
        elseif (property_exists($data, 'last') && $data->{'last'} === null) {
            $object->setLast(null);
        }
        if (property_exists($data, 'previous') && $data->{'previous'} !== null) {
            $object->setPrevious($data->{'previous'});
        }
        elseif (property_exists($data, 'previous') && $data->{'previous'} === null) {
            $object->setPrevious(null);
        }
        if (property_exists($data, 'next') && $data->{'next'} !== null) {
            $object->setNext($data->{'next'});
        }
        elseif (property_exists($data, 'next') && $data->{'next'} === null) {
            $object->setNext(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFirst()) {
            $data->{'first'} = $object->getFirst();
        }
        else {
            $data->{'first'} = null;
        }
        if (null !== $object->getLast()) {
            $data->{'last'} = $object->getLast();
        }
        else {
            $data->{'last'} = null;
        }
        if (null !== $object->getPrevious()) {
            $data->{'previous'} = $object->getPrevious();
        }
        else {
            $data->{'previous'} = null;
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $object->getNext();
        }
        else {
            $data->{'next'} = null;
        }
        return $data;
    }
}
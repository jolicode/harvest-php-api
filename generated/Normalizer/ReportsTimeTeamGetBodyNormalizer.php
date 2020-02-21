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
class ReportsTimeTeamGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ReportsTimeTeamGetBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ReportsTimeTeamGetBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ReportsTimeTeamGetBody();
        if (property_exists($data, 'from') && $data->{'from'} !== null) {
            $object->setFrom(\DateTime::createFromFormat('Y-m-d', $data->{'from'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'from') && $data->{'from'} === null) {
            $object->setFrom(null);
        }
        if (property_exists($data, 'to') && $data->{'to'} !== null) {
            $object->setTo(\DateTime::createFromFormat('Y-m-d', $data->{'to'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'to') && $data->{'to'} === null) {
            $object->setTo(null);
        }
        if (property_exists($data, 'page') && $data->{'page'} !== null) {
            $object->setPage($data->{'page'});
        }
        elseif (property_exists($data, 'page') && $data->{'page'} === null) {
            $object->setPage(null);
        }
        if (property_exists($data, 'per_page') && $data->{'per_page'} !== null) {
            $object->setPerPage($data->{'per_page'});
        }
        elseif (property_exists($data, 'per_page') && $data->{'per_page'} === null) {
            $object->setPerPage(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFrom()) {
            $data->{'from'} = $object->getFrom()->format('Y-m-d');
        }
        else {
            $data->{'from'} = null;
        }
        if (null !== $object->getTo()) {
            $data->{'to'} = $object->getTo()->format('Y-m-d');
        }
        else {
            $data->{'to'} = null;
        }
        if (null !== $object->getPage()) {
            $data->{'page'} = $object->getPage();
        }
        else {
            $data->{'page'} = null;
        }
        if (null !== $object->getPerPage()) {
            $data->{'per_page'} = $object->getPerPage();
        }
        else {
            $data->{'per_page'} = null;
        }
        return $data;
    }
}
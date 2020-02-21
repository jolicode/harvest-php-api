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
class ReportsProjectBudgetGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\ReportsProjectBudgetGetBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\ReportsProjectBudgetGetBody';
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
        $object = new \JoliCode\Harvest\Api\Model\ReportsProjectBudgetGetBody();
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
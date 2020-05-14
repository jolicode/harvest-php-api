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
class InvoicesPostBodyLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\InvoicesPostBodyLineItemsItem';
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
        $object = new \JoliCode\Harvest\Api\Model\InvoicesPostBodyLineItemsItem();
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        elseif (property_exists($data, 'project_id') && $data->{'project_id'} === null) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'kind') && $data->{'kind'} !== null) {
            $object->setKind($data->{'kind'});
        }
        elseif (property_exists($data, 'kind') && $data->{'kind'} === null) {
            $object->setKind(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        }
        elseif (property_exists($data, 'quantity') && $data->{'quantity'} === null) {
            $object->setQuantity(null);
        }
        if (property_exists($data, 'unit_price') && $data->{'unit_price'} !== null) {
            $object->setUnitPrice($data->{'unit_price'});
        }
        elseif (property_exists($data, 'unit_price') && $data->{'unit_price'} === null) {
            $object->setUnitPrice(null);
        }
        if (property_exists($data, 'taxed') && $data->{'taxed'} !== null) {
            $object->setTaxed($data->{'taxed'});
        }
        elseif (property_exists($data, 'taxed') && $data->{'taxed'} === null) {
            $object->setTaxed(null);
        }
        if (property_exists($data, 'taxed2') && $data->{'taxed2'} !== null) {
            $object->setTaxed2($data->{'taxed2'});
        }
        elseif (property_exists($data, 'taxed2') && $data->{'taxed2'} === null) {
            $object->setTaxed2(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        else {
            $data->{'project_id'} = null;
        }
        if (null !== $object->getKind()) {
            $data->{'kind'} = $object->getKind();
        }
        else {
            $data->{'kind'} = null;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        else {
            $data->{'description'} = null;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        else {
            $data->{'quantity'} = null;
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unit_price'} = $object->getUnitPrice();
        }
        else {
            $data->{'unit_price'} = null;
        }
        if (null !== $object->getTaxed()) {
            $data->{'taxed'} = $object->getTaxed();
        }
        else {
            $data->{'taxed'} = null;
        }
        if (null !== $object->getTaxed2()) {
            $data->{'taxed2'} = $object->getTaxed2();
        }
        else {
            $data->{'taxed2'} = null;
        }
        return $data;
    }
}
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
class EstimateLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem';
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
        $object = new \JoliCode\Harvest\Api\Model\EstimateLineItem();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
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
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        elseif (property_exists($data, 'amount') && $data->{'amount'} === null) {
            $object->setAmount(null);
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
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        else {
            $data->{'id'} = null;
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
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        else {
            $data->{'amount'} = null;
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
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
class EstimatesEstimateIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBody';
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
        $object = new \JoliCode\Harvest\Api\Model\EstimatesEstimateIdPatchBody();
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        elseif (property_exists($data, 'client_id') && $data->{'client_id'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'number') && $data->{'number'} !== null) {
            $object->setNumber($data->{'number'});
        }
        elseif (property_exists($data, 'number') && $data->{'number'} === null) {
            $object->setNumber(null);
        }
        if (property_exists($data, 'purchase_order') && $data->{'purchase_order'} !== null) {
            $object->setPurchaseOrder($data->{'purchase_order'});
        }
        elseif (property_exists($data, 'purchase_order') && $data->{'purchase_order'} === null) {
            $object->setPurchaseOrder(null);
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        }
        elseif (property_exists($data, 'tax') && $data->{'tax'} === null) {
            $object->setTax(null);
        }
        if (property_exists($data, 'tax2') && $data->{'tax2'} !== null) {
            $object->setTax2($data->{'tax2'});
        }
        elseif (property_exists($data, 'tax2') && $data->{'tax2'} === null) {
            $object->setTax2(null);
        }
        if (property_exists($data, 'discount') && $data->{'discount'} !== null) {
            $object->setDiscount($data->{'discount'});
        }
        elseif (property_exists($data, 'discount') && $data->{'discount'} === null) {
            $object->setDiscount(null);
        }
        if (property_exists($data, 'subject') && $data->{'subject'} !== null) {
            $object->setSubject($data->{'subject'});
        }
        elseif (property_exists($data, 'subject') && $data->{'subject'} === null) {
            $object->setSubject(null);
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        elseif (property_exists($data, 'notes') && $data->{'notes'} === null) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        elseif (property_exists($data, 'currency') && $data->{'currency'} === null) {
            $object->setCurrency(null);
        }
        if (property_exists($data, 'issue_date') && $data->{'issue_date'} !== null) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data->{'issue_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'issue_date') && $data->{'issue_date'} === null) {
            $object->setIssueDate(null);
        }
        if (property_exists($data, 'line_items') && $data->{'line_items'} !== null) {
            $values = array();
            foreach ($data->{'line_items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimatesEstimateIdPatchBodyLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        elseif (property_exists($data, 'line_items') && $data->{'line_items'} === null) {
            $object->setLineItems(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        else {
            $data->{'client_id'} = null;
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        else {
            $data->{'number'} = null;
        }
        if (null !== $object->getPurchaseOrder()) {
            $data->{'purchase_order'} = $object->getPurchaseOrder();
        }
        else {
            $data->{'purchase_order'} = null;
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        }
        else {
            $data->{'tax'} = null;
        }
        if (null !== $object->getTax2()) {
            $data->{'tax2'} = $object->getTax2();
        }
        else {
            $data->{'tax2'} = null;
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        else {
            $data->{'discount'} = null;
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        else {
            $data->{'subject'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        else {
            $data->{'currency'} = null;
        }
        if (null !== $object->getIssueDate()) {
            $data->{'issue_date'} = $object->getIssueDate()->format('Y-m-d');
        }
        else {
            $data->{'issue_date'} = null;
        }
        if (null !== $object->getLineItems()) {
            $values = array();
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'line_items'} = $values;
        }
        else {
            $data->{'line_items'} = null;
        }
        return $data;
    }
}
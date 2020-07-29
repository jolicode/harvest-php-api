<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EstimatesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\EstimatesPostBody();
        if (\array_key_exists('client_id', $data) && $data['client_id'] !== null) {
            $object->setClientId($data['client_id']);
        }
        elseif (\array_key_exists('client_id', $data) && $data['client_id'] === null) {
            $object->setClientId(null);
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
        }
        elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('purchase_order', $data) && $data['purchase_order'] !== null) {
            $object->setPurchaseOrder($data['purchase_order']);
        }
        elseif (\array_key_exists('purchase_order', $data) && $data['purchase_order'] === null) {
            $object->setPurchaseOrder(null);
        }
        if (\array_key_exists('tax', $data) && $data['tax'] !== null) {
            $object->setTax($data['tax']);
        }
        elseif (\array_key_exists('tax', $data) && $data['tax'] === null) {
            $object->setTax(null);
        }
        if (\array_key_exists('tax2', $data) && $data['tax2'] !== null) {
            $object->setTax2($data['tax2']);
        }
        elseif (\array_key_exists('tax2', $data) && $data['tax2'] === null) {
            $object->setTax2(null);
        }
        if (\array_key_exists('discount', $data) && $data['discount'] !== null) {
            $object->setDiscount($data['discount']);
        }
        elseif (\array_key_exists('discount', $data) && $data['discount'] === null) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('notes', $data) && $data['notes'] !== null) {
            $object->setNotes($data['notes']);
        }
        elseif (\array_key_exists('notes', $data) && $data['notes'] === null) {
            $object->setNotes(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        }
        elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('issue_date', $data) && $data['issue_date'] !== null) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('issue_date', $data) && $data['issue_date'] === null) {
            $object->setIssueDate(null);
        }
        if (\array_key_exists('line_items', $data) && $data['line_items'] !== null) {
            $values = array();
            foreach ($data['line_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimatesPostBodyLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        elseif (\array_key_exists('line_items', $data) && $data['line_items'] === null) {
            $object->setLineItems(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getTax2()) {
            $data['tax2'] = $object->getTax2();
        }
        if (null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if (null !== $object->getLineItems()) {
            $values = array();
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['line_items'] = $values;
        }
        return $data;
    }
}
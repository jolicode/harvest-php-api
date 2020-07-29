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
class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Invoice';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Invoice';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Invoice();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('client', $data) && $data['client'] !== null) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\InvoiceClient', 'json', $context));
        }
        elseif (\array_key_exists('client', $data) && $data['client'] === null) {
            $object->setClient(null);
        }
        if (\array_key_exists('line_items', $data) && $data['line_items'] !== null) {
            $values = array();
            foreach ($data['line_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        elseif (\array_key_exists('line_items', $data) && $data['line_items'] === null) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('estimate', $data) && $data['estimate'] !== null) {
            $object->setEstimate($this->denormalizer->denormalize($data['estimate'], 'JoliCode\\Harvest\\Api\\Model\\InvoiceEstimate', 'json', $context));
        }
        elseif (\array_key_exists('estimate', $data) && $data['estimate'] === null) {
            $object->setEstimate(null);
        }
        if (\array_key_exists('retainer', $data) && $data['retainer'] !== null) {
            $object->setRetainer($this->denormalizer->denormalize($data['retainer'], 'JoliCode\\Harvest\\Api\\Model\\InvoiceRetainer', 'json', $context));
        }
        elseif (\array_key_exists('retainer', $data) && $data['retainer'] === null) {
            $object->setRetainer(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'JoliCode\\Harvest\\Api\\Model\\InvoiceCreator', 'json', $context));
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('client_key', $data) && $data['client_key'] !== null) {
            $object->setClientKey($data['client_key']);
        }
        elseif (\array_key_exists('client_key', $data) && $data['client_key'] === null) {
            $object->setClientKey(null);
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
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('due_amount', $data) && $data['due_amount'] !== null) {
            $object->setDueAmount($data['due_amount']);
        }
        elseif (\array_key_exists('due_amount', $data) && $data['due_amount'] === null) {
            $object->setDueAmount(null);
        }
        if (\array_key_exists('tax', $data) && $data['tax'] !== null) {
            $object->setTax($data['tax']);
        }
        elseif (\array_key_exists('tax', $data) && $data['tax'] === null) {
            $object->setTax(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        }
        elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('tax2', $data) && $data['tax2'] !== null) {
            $object->setTax2($data['tax2']);
        }
        elseif (\array_key_exists('tax2', $data) && $data['tax2'] === null) {
            $object->setTax2(null);
        }
        if (\array_key_exists('tax2_amount', $data) && $data['tax2_amount'] !== null) {
            $object->setTax2Amount($data['tax2_amount']);
        }
        elseif (\array_key_exists('tax2_amount', $data) && $data['tax2_amount'] === null) {
            $object->setTax2Amount(null);
        }
        if (\array_key_exists('discount', $data) && $data['discount'] !== null) {
            $object->setDiscount($data['discount']);
        }
        elseif (\array_key_exists('discount', $data) && $data['discount'] === null) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
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
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        }
        elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('period_start', $data) && $data['period_start'] !== null) {
            $object->setPeriodStart(\DateTime::createFromFormat('Y-m-d', $data['period_start'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('period_start', $data) && $data['period_start'] === null) {
            $object->setPeriodStart(null);
        }
        if (\array_key_exists('period_end', $data) && $data['period_end'] !== null) {
            $object->setPeriodEnd(\DateTime::createFromFormat('Y-m-d', $data['period_end'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('period_end', $data) && $data['period_end'] === null) {
            $object->setPeriodEnd(null);
        }
        if (\array_key_exists('issue_date', $data) && $data['issue_date'] !== null) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('issue_date', $data) && $data['issue_date'] === null) {
            $object->setIssueDate(null);
        }
        if (\array_key_exists('due_date', $data) && $data['due_date'] !== null) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('due_date', $data) && $data['due_date'] === null) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('payment_term', $data) && $data['payment_term'] !== null) {
            $object->setPaymentTerm($data['payment_term']);
        }
        elseif (\array_key_exists('payment_term', $data) && $data['payment_term'] === null) {
            $object->setPaymentTerm(null);
        }
        if (\array_key_exists('sent_at', $data) && $data['sent_at'] !== null) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['sent_at']));
        }
        elseif (\array_key_exists('sent_at', $data) && $data['sent_at'] === null) {
            $object->setSentAt(null);
        }
        if (\array_key_exists('paid_at', $data) && $data['paid_at'] !== null) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['paid_at']));
        }
        elseif (\array_key_exists('paid_at', $data) && $data['paid_at'] === null) {
            $object->setPaidAt(null);
        }
        if (\array_key_exists('paid_date', $data) && $data['paid_date'] !== null) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data['paid_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('paid_date', $data) && $data['paid_date'] === null) {
            $object->setPaidDate(null);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('recurring_invoice_id', $data) && $data['recurring_invoice_id'] !== null) {
            $object->setRecurringInvoiceId($data['recurring_invoice_id']);
        }
        elseif (\array_key_exists('recurring_invoice_id', $data) && $data['recurring_invoice_id'] === null) {
            $object->setRecurringInvoiceId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getLineItems()) {
            $values = array();
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['line_items'] = $values;
        }
        if (null !== $object->getEstimate()) {
            $data['estimate'] = $this->normalizer->normalize($object->getEstimate(), 'json', $context);
        }
        if (null !== $object->getRetainer()) {
            $data['retainer'] = $this->normalizer->normalize($object->getRetainer(), 'json', $context);
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        if (null !== $object->getClientKey()) {
            $data['client_key'] = $object->getClientKey();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getDueAmount()) {
            $data['due_amount'] = $object->getDueAmount();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTax2()) {
            $data['tax2'] = $object->getTax2();
        }
        if (null !== $object->getTax2Amount()) {
            $data['tax2_amount'] = $object->getTax2Amount();
        }
        if (null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
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
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getPeriodStart()) {
            $data['period_start'] = $object->getPeriodStart()->format('Y-m-d');
        }
        if (null !== $object->getPeriodEnd()) {
            $data['period_end'] = $object->getPeriodEnd()->format('Y-m-d');
        }
        if (null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if (null !== $object->getDueDate()) {
            $data['due_date'] = $object->getDueDate()->format('Y-m-d');
        }
        if (null !== $object->getPaymentTerm()) {
            $data['payment_term'] = $object->getPaymentTerm();
        }
        if (null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPaidDate()) {
            $data['paid_date'] = $object->getPaidDate()->format('Y-m-d');
        }
        if (null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRecurringInvoiceId()) {
            $data['recurring_invoice_id'] = $object->getRecurringInvoiceId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}
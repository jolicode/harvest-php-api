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
class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Invoice();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'client') && $data->{'client'} !== null) {
            $object->setClient($this->denormalizer->denormalize($data->{'client'}, 'JoliCode\\Harvest\\Api\\Model\\InvoiceClient', 'json', $context));
        }
        elseif (property_exists($data, 'client') && $data->{'client'} === null) {
            $object->setClient(null);
        }
        if (property_exists($data, 'line_items') && $data->{'line_items'} !== null) {
            $values = array();
            foreach ($data->{'line_items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoiceLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        elseif (property_exists($data, 'line_items') && $data->{'line_items'} === null) {
            $object->setLineItems(null);
        }
        if (property_exists($data, 'estimate') && $data->{'estimate'} !== null) {
            $object->setEstimate($this->denormalizer->denormalize($data->{'estimate'}, 'JoliCode\\Harvest\\Api\\Model\\InvoiceEstimate', 'json', $context));
        }
        elseif (property_exists($data, 'estimate') && $data->{'estimate'} === null) {
            $object->setEstimate(null);
        }
        if (property_exists($data, 'retainer') && $data->{'retainer'} !== null) {
            $object->setRetainer($this->denormalizer->denormalize($data->{'retainer'}, 'JoliCode\\Harvest\\Api\\Model\\InvoiceRetainer', 'json', $context));
        }
        elseif (property_exists($data, 'retainer') && $data->{'retainer'} === null) {
            $object->setRetainer(null);
        }
        if (property_exists($data, 'creator') && $data->{'creator'} !== null) {
            $object->setCreator($this->denormalizer->denormalize($data->{'creator'}, 'JoliCode\\Harvest\\Api\\Model\\InvoiceCreator', 'json', $context));
        }
        elseif (property_exists($data, 'creator') && $data->{'creator'} === null) {
            $object->setCreator(null);
        }
        if (property_exists($data, 'client_key') && $data->{'client_key'} !== null) {
            $object->setClientKey($data->{'client_key'});
        }
        elseif (property_exists($data, 'client_key') && $data->{'client_key'} === null) {
            $object->setClientKey(null);
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
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        elseif (property_exists($data, 'amount') && $data->{'amount'} === null) {
            $object->setAmount(null);
        }
        if (property_exists($data, 'due_amount') && $data->{'due_amount'} !== null) {
            $object->setDueAmount($data->{'due_amount'});
        }
        elseif (property_exists($data, 'due_amount') && $data->{'due_amount'} === null) {
            $object->setDueAmount(null);
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        }
        elseif (property_exists($data, 'tax') && $data->{'tax'} === null) {
            $object->setTax(null);
        }
        if (property_exists($data, 'tax_amount') && $data->{'tax_amount'} !== null) {
            $object->setTaxAmount($data->{'tax_amount'});
        }
        elseif (property_exists($data, 'tax_amount') && $data->{'tax_amount'} === null) {
            $object->setTaxAmount(null);
        }
        if (property_exists($data, 'tax2') && $data->{'tax2'} !== null) {
            $object->setTax2($data->{'tax2'});
        }
        elseif (property_exists($data, 'tax2') && $data->{'tax2'} === null) {
            $object->setTax2(null);
        }
        if (property_exists($data, 'tax2_amount') && $data->{'tax2_amount'} !== null) {
            $object->setTax2Amount($data->{'tax2_amount'});
        }
        elseif (property_exists($data, 'tax2_amount') && $data->{'tax2_amount'} === null) {
            $object->setTax2Amount(null);
        }
        if (property_exists($data, 'discount') && $data->{'discount'} !== null) {
            $object->setDiscount($data->{'discount'});
        }
        elseif (property_exists($data, 'discount') && $data->{'discount'} === null) {
            $object->setDiscount(null);
        }
        if (property_exists($data, 'discount_amount') && $data->{'discount_amount'} !== null) {
            $object->setDiscountAmount($data->{'discount_amount'});
        }
        elseif (property_exists($data, 'discount_amount') && $data->{'discount_amount'} === null) {
            $object->setDiscountAmount(null);
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
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($data->{'state'});
        }
        elseif (property_exists($data, 'state') && $data->{'state'} === null) {
            $object->setState(null);
        }
        if (property_exists($data, 'period_start') && $data->{'period_start'} !== null) {
            $object->setPeriodStart(\DateTime::createFromFormat('Y-m-d', $data->{'period_start'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'period_start') && $data->{'period_start'} === null) {
            $object->setPeriodStart(null);
        }
        if (property_exists($data, 'period_end') && $data->{'period_end'} !== null) {
            $object->setPeriodEnd(\DateTime::createFromFormat('Y-m-d', $data->{'period_end'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'period_end') && $data->{'period_end'} === null) {
            $object->setPeriodEnd(null);
        }
        if (property_exists($data, 'issue_date') && $data->{'issue_date'} !== null) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data->{'issue_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'issue_date') && $data->{'issue_date'} === null) {
            $object->setIssueDate(null);
        }
        if (property_exists($data, 'due_date') && $data->{'due_date'} !== null) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data->{'due_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'due_date') && $data->{'due_date'} === null) {
            $object->setDueDate(null);
        }
        if (property_exists($data, 'payment_term') && $data->{'payment_term'} !== null) {
            $object->setPaymentTerm($data->{'payment_term'});
        }
        elseif (property_exists($data, 'payment_term') && $data->{'payment_term'} === null) {
            $object->setPaymentTerm(null);
        }
        if (property_exists($data, 'sent_at') && $data->{'sent_at'} !== null) {
            $object->setSentAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'sent_at'}));
        }
        elseif (property_exists($data, 'sent_at') && $data->{'sent_at'} === null) {
            $object->setSentAt(null);
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'paid_at'}));
        }
        elseif (property_exists($data, 'paid_at') && $data->{'paid_at'} === null) {
            $object->setPaidAt(null);
        }
        if (property_exists($data, 'paid_date') && $data->{'paid_date'} !== null) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data->{'paid_date'})->setTime(0, 0, 0));
        }
        elseif (property_exists($data, 'paid_date') && $data->{'paid_date'} === null) {
            $object->setPaidDate(null);
        }
        if (property_exists($data, 'closed_at') && $data->{'closed_at'} !== null) {
            $object->setClosedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'closed_at'}));
        }
        elseif (property_exists($data, 'closed_at') && $data->{'closed_at'} === null) {
            $object->setClosedAt(null);
        }
        if (property_exists($data, 'recurring_invoice_id') && $data->{'recurring_invoice_id'} !== null) {
            $object->setRecurringInvoiceId($data->{'recurring_invoice_id'});
        }
        elseif (property_exists($data, 'recurring_invoice_id') && $data->{'recurring_invoice_id'} === null) {
            $object->setRecurringInvoiceId(null);
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        elseif (property_exists($data, 'created_at') && $data->{'created_at'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }
        elseif (property_exists($data, 'updated_at') && $data->{'updated_at'} === null) {
            $object->setUpdatedAt(null);
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
        if (null !== $object->getClient()) {
            $data->{'client'} = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        else {
            $data->{'client'} = null;
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
        if (null !== $object->getEstimate()) {
            $data->{'estimate'} = $this->normalizer->normalize($object->getEstimate(), 'json', $context);
        }
        else {
            $data->{'estimate'} = null;
        }
        if (null !== $object->getRetainer()) {
            $data->{'retainer'} = $this->normalizer->normalize($object->getRetainer(), 'json', $context);
        }
        else {
            $data->{'retainer'} = null;
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        else {
            $data->{'creator'} = null;
        }
        if (null !== $object->getClientKey()) {
            $data->{'client_key'} = $object->getClientKey();
        }
        else {
            $data->{'client_key'} = null;
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
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        else {
            $data->{'amount'} = null;
        }
        if (null !== $object->getDueAmount()) {
            $data->{'due_amount'} = $object->getDueAmount();
        }
        else {
            $data->{'due_amount'} = null;
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        }
        else {
            $data->{'tax'} = null;
        }
        if (null !== $object->getTaxAmount()) {
            $data->{'tax_amount'} = $object->getTaxAmount();
        }
        else {
            $data->{'tax_amount'} = null;
        }
        if (null !== $object->getTax2()) {
            $data->{'tax2'} = $object->getTax2();
        }
        else {
            $data->{'tax2'} = null;
        }
        if (null !== $object->getTax2Amount()) {
            $data->{'tax2_amount'} = $object->getTax2Amount();
        }
        else {
            $data->{'tax2_amount'} = null;
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        else {
            $data->{'discount'} = null;
        }
        if (null !== $object->getDiscountAmount()) {
            $data->{'discount_amount'} = $object->getDiscountAmount();
        }
        else {
            $data->{'discount_amount'} = null;
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
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        else {
            $data->{'state'} = null;
        }
        if (null !== $object->getPeriodStart()) {
            $data->{'period_start'} = $object->getPeriodStart()->format('Y-m-d');
        }
        else {
            $data->{'period_start'} = null;
        }
        if (null !== $object->getPeriodEnd()) {
            $data->{'period_end'} = $object->getPeriodEnd()->format('Y-m-d');
        }
        else {
            $data->{'period_end'} = null;
        }
        if (null !== $object->getIssueDate()) {
            $data->{'issue_date'} = $object->getIssueDate()->format('Y-m-d');
        }
        else {
            $data->{'issue_date'} = null;
        }
        if (null !== $object->getDueDate()) {
            $data->{'due_date'} = $object->getDueDate()->format('Y-m-d');
        }
        else {
            $data->{'due_date'} = null;
        }
        if (null !== $object->getPaymentTerm()) {
            $data->{'payment_term'} = $object->getPaymentTerm();
        }
        else {
            $data->{'payment_term'} = null;
        }
        if (null !== $object->getSentAt()) {
            $data->{'sent_at'} = $object->getSentAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'sent_at'} = null;
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'paid_at'} = null;
        }
        if (null !== $object->getPaidDate()) {
            $data->{'paid_date'} = $object->getPaidDate()->format('Y-m-d');
        }
        else {
            $data->{'paid_date'} = null;
        }
        if (null !== $object->getClosedAt()) {
            $data->{'closed_at'} = $object->getClosedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'closed_at'} = null;
        }
        if (null !== $object->getRecurringInvoiceId()) {
            $data->{'recurring_invoice_id'} = $object->getRecurringInvoiceId();
        }
        else {
            $data->{'recurring_invoice_id'} = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'created_at'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        else {
            $data->{'updated_at'} = null;
        }
        return $data;
    }
}
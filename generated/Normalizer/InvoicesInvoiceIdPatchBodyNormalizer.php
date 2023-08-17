<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Harvest\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InvoicesInvoiceIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBody' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBody' === $data::class;
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody();
        if (\array_key_exists('tax', $data) && \is_int($data['tax'])) {
            $data['tax'] = (float) $data['tax'];
        }
        if (\array_key_exists('tax2', $data) && \is_int($data['tax2'])) {
            $data['tax2'] = (float) $data['tax2'];
        }
        if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
            $data['discount'] = (float) $data['discount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
            unset($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('retainer_id', $data) && null !== $data['retainer_id']) {
            $object->setRetainerId($data['retainer_id']);
            unset($data['retainer_id']);
        } elseif (\array_key_exists('retainer_id', $data) && null === $data['retainer_id']) {
            $object->setRetainerId(null);
        }
        if (\array_key_exists('estimate_id', $data) && null !== $data['estimate_id']) {
            $object->setEstimateId($data['estimate_id']);
            unset($data['estimate_id']);
        } elseif (\array_key_exists('estimate_id', $data) && null === $data['estimate_id']) {
            $object->setEstimateId(null);
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
            unset($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('purchase_order', $data) && null !== $data['purchase_order']) {
            $object->setPurchaseOrder($data['purchase_order']);
            unset($data['purchase_order']);
        } elseif (\array_key_exists('purchase_order', $data) && null === $data['purchase_order']) {
            $object->setPurchaseOrder(null);
        }
        if (\array_key_exists('tax', $data) && null !== $data['tax']) {
            $object->setTax($data['tax']);
            unset($data['tax']);
        } elseif (\array_key_exists('tax', $data) && null === $data['tax']) {
            $object->setTax(null);
        }
        if (\array_key_exists('tax2', $data) && null !== $data['tax2']) {
            $object->setTax2($data['tax2']);
            unset($data['tax2']);
        } elseif (\array_key_exists('tax2', $data) && null === $data['tax2']) {
            $object->setTax2(null);
        }
        if (\array_key_exists('discount', $data) && null !== $data['discount']) {
            $object->setDiscount($data['discount']);
            unset($data['discount']);
        } elseif (\array_key_exists('discount', $data) && null === $data['discount']) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('subject', $data) && null !== $data['subject']) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && null === $data['subject']) {
            $object->setSubject(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
            unset($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('issue_date', $data) && null !== $data['issue_date']) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
            unset($data['issue_date']);
        } elseif (\array_key_exists('issue_date', $data) && null === $data['issue_date']) {
            $object->setIssueDate(null);
        }
        if (\array_key_exists('due_date', $data) && null !== $data['due_date']) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0));
            unset($data['due_date']);
        } elseif (\array_key_exists('due_date', $data) && null === $data['due_date']) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('payment_term', $data) && null !== $data['payment_term']) {
            $object->setPaymentTerm($data['payment_term']);
            unset($data['payment_term']);
        } elseif (\array_key_exists('payment_term', $data) && null === $data['payment_term']) {
            $object->setPaymentTerm(null);
        }
        if (\array_key_exists('payment_options', $data) && null !== $data['payment_options']) {
            $values = [];
            foreach ($data['payment_options'] as $value) {
                $values[] = $value;
            }
            $object->setPaymentOptions($values);
            unset($data['payment_options']);
        } elseif (\array_key_exists('payment_options', $data) && null === $data['payment_options']) {
            $object->setPaymentOptions(null);
        }
        if (\array_key_exists('line_items', $data) && null !== $data['line_items']) {
            $values_1 = [];
            foreach ($data['line_items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBodyLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values_1);
            unset($data['line_items']);
        } elseif (\array_key_exists('line_items', $data) && null === $data['line_items']) {
            $object->setLineItems(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if ($object->isInitialized('retainerId') && null !== $object->getRetainerId()) {
            $data['retainer_id'] = $object->getRetainerId();
        }
        if ($object->isInitialized('estimateId') && null !== $object->getEstimateId()) {
            $data['estimate_id'] = $object->getEstimateId();
        }
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if ($object->isInitialized('purchaseOrder') && null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        if ($object->isInitialized('tax') && null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if ($object->isInitialized('tax2') && null !== $object->getTax2()) {
            $data['tax2'] = $object->getTax2();
        }
        if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if ($object->isInitialized('issueDate') && null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if ($object->isInitialized('dueDate') && null !== $object->getDueDate()) {
            $data['due_date'] = $object->getDueDate()->format('Y-m-d');
        }
        if ($object->isInitialized('paymentTerm') && null !== $object->getPaymentTerm()) {
            $data['payment_term'] = $object->getPaymentTerm();
        }
        if ($object->isInitialized('paymentOptions') && null !== $object->getPaymentOptions()) {
            $values = [];
            foreach ($object->getPaymentOptions() as $value) {
                $values[] = $value;
            }
            $data['payment_options'] = $values;
        }
        if ($object->isInitialized('lineItems') && null !== $object->getLineItems()) {
            $values_1 = [];
            foreach ($object->getLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['line_items'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['JoliCode\\Harvest\\Api\\Model\\InvoicesInvoiceIdPatchBody' => false];
    }
}

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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBodyLineItemsItem::class, 'json', $context);
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

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['client_id'] = $data->getClientId();
        }
        if ($data->isInitialized('retainerId') && null !== $data->getRetainerId()) {
            $dataArray['retainer_id'] = $data->getRetainerId();
        }
        if ($data->isInitialized('estimateId') && null !== $data->getEstimateId()) {
            $dataArray['estimate_id'] = $data->getEstimateId();
        }
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('purchaseOrder') && null !== $data->getPurchaseOrder()) {
            $dataArray['purchase_order'] = $data->getPurchaseOrder();
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = $data->getTax();
        }
        if ($data->isInitialized('tax2') && null !== $data->getTax2()) {
            $dataArray['tax2'] = $data->getTax2();
        }
        if ($data->isInitialized('discount') && null !== $data->getDiscount()) {
            $dataArray['discount'] = $data->getDiscount();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('notes') && null !== $data->getNotes()) {
            $dataArray['notes'] = $data->getNotes();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('issueDate') && null !== $data->getIssueDate()) {
            $dataArray['issue_date'] = $data->getIssueDate()->format('Y-m-d');
        }
        if ($data->isInitialized('dueDate') && null !== $data->getDueDate()) {
            $dataArray['due_date'] = $data->getDueDate()->format('Y-m-d');
        }
        if ($data->isInitialized('paymentTerm') && null !== $data->getPaymentTerm()) {
            $dataArray['payment_term'] = $data->getPaymentTerm();
        }
        if ($data->isInitialized('paymentOptions') && null !== $data->getPaymentOptions()) {
            $values = [];
            foreach ($data->getPaymentOptions() as $value) {
                $values[] = $value;
            }
            $dataArray['payment_options'] = $values;
        }
        if ($data->isInitialized('lineItems') && null !== $data->getLineItems()) {
            $values_1 = [];
            foreach ($data->getLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['line_items'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\JoliCode\Harvest\Api\Model\InvoicesInvoiceIdPatchBody::class => false];
    }
}

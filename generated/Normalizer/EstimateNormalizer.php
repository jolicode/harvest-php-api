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

class EstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'JoliCode\\Harvest\\Api\\Model\\Estimate' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'JoliCode\\Harvest\\Api\\Model\\Estimate' === \get_class($data);
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
        $object = new \JoliCode\Harvest\Api\Model\Estimate();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (float) $data['amount'];
        }
        if (\array_key_exists('tax', $data) && \is_int($data['tax'])) {
            $data['tax'] = (float) $data['tax'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (\array_key_exists('tax2', $data) && \is_int($data['tax2'])) {
            $data['tax2'] = (float) $data['tax2'];
        }
        if (\array_key_exists('tax2_amount', $data) && \is_int($data['tax2_amount'])) {
            $data['tax2_amount'] = (float) $data['tax2_amount'];
        }
        if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
            $data['discount'] = (float) $data['discount'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('client', $data) && null !== $data['client']) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'JoliCode\\Harvest\\Api\\Model\\EstimateClient', 'json', $context));
            unset($data['client']);
        } elseif (\array_key_exists('client', $data) && null === $data['client']) {
            $object->setClient(null);
        }
        if (\array_key_exists('line_items', $data) && null !== $data['line_items']) {
            $values = [];
            foreach ($data['line_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem', 'json', $context);
            }
            $object->setLineItems($values);
            unset($data['line_items']);
        } elseif (\array_key_exists('line_items', $data) && null === $data['line_items']) {
            $object->setLineItems(null);
        }
        if (\array_key_exists('creator', $data) && null !== $data['creator']) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'JoliCode\\Harvest\\Api\\Model\\EstimateCreator', 'json', $context));
            unset($data['creator']);
        } elseif (\array_key_exists('creator', $data) && null === $data['creator']) {
            $object->setCreator(null);
        }
        if (\array_key_exists('client_key', $data) && null !== $data['client_key']) {
            $object->setClientKey($data['client_key']);
            unset($data['client_key']);
        } elseif (\array_key_exists('client_key', $data) && null === $data['client_key']) {
            $object->setClientKey(null);
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
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('tax', $data) && null !== $data['tax']) {
            $object->setTax($data['tax']);
            unset($data['tax']);
        } elseif (\array_key_exists('tax', $data) && null === $data['tax']) {
            $object->setTax(null);
        }
        if (\array_key_exists('tax_amount', $data) && null !== $data['tax_amount']) {
            $object->setTaxAmount($data['tax_amount']);
            unset($data['tax_amount']);
        } elseif (\array_key_exists('tax_amount', $data) && null === $data['tax_amount']) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('tax2', $data) && null !== $data['tax2']) {
            $object->setTax2($data['tax2']);
            unset($data['tax2']);
        } elseif (\array_key_exists('tax2', $data) && null === $data['tax2']) {
            $object->setTax2(null);
        }
        if (\array_key_exists('tax2_amount', $data) && null !== $data['tax2_amount']) {
            $object->setTax2Amount($data['tax2_amount']);
            unset($data['tax2_amount']);
        } elseif (\array_key_exists('tax2_amount', $data) && null === $data['tax2_amount']) {
            $object->setTax2Amount(null);
        }
        if (\array_key_exists('discount', $data) && null !== $data['discount']) {
            $object->setDiscount($data['discount']);
            unset($data['discount']);
        } elseif (\array_key_exists('discount', $data) && null === $data['discount']) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('discount_amount', $data) && null !== $data['discount_amount']) {
            $object->setDiscountAmount($data['discount_amount']);
            unset($data['discount_amount']);
        } elseif (\array_key_exists('discount_amount', $data) && null === $data['discount_amount']) {
            $object->setDiscountAmount(null);
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
        if (\array_key_exists('state', $data) && null !== $data['state']) {
            $object->setState($data['state']);
            unset($data['state']);
        } elseif (\array_key_exists('state', $data) && null === $data['state']) {
            $object->setState(null);
        }
        if (\array_key_exists('issue_date', $data) && null !== $data['issue_date']) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
            unset($data['issue_date']);
        } elseif (\array_key_exists('issue_date', $data) && null === $data['issue_date']) {
            $object->setIssueDate(null);
        }
        if (\array_key_exists('sent_at', $data) && null !== $data['sent_at']) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['sent_at']));
            unset($data['sent_at']);
        } elseif (\array_key_exists('sent_at', $data) && null === $data['sent_at']) {
            $object->setSentAt(null);
        }
        if (\array_key_exists('accepted_at', $data) && null !== $data['accepted_at']) {
            $object->setAcceptedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['accepted_at']));
            unset($data['accepted_at']);
        } elseif (\array_key_exists('accepted_at', $data) && null === $data['accepted_at']) {
            $object->setAcceptedAt(null);
        }
        if (\array_key_exists('declined_at', $data) && null !== $data['declined_at']) {
            $object->setDeclinedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['declined_at']));
            unset($data['declined_at']);
        } elseif (\array_key_exists('declined_at', $data) && null === $data['declined_at']) {
            $object->setDeclinedAt(null);
        }
        if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
            unset($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
            unset($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('client') && null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if ($object->isInitialized('lineItems') && null !== $object->getLineItems()) {
            $values = [];
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['line_items'] = $values;
        }
        if ($object->isInitialized('creator') && null !== $object->getCreator()) {
            $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        if ($object->isInitialized('clientKey') && null !== $object->getClientKey()) {
            $data['client_key'] = $object->getClientKey();
        }
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if ($object->isInitialized('purchaseOrder') && null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('tax') && null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if ($object->isInitialized('tax2') && null !== $object->getTax2()) {
            $data['tax2'] = $object->getTax2();
        }
        if ($object->isInitialized('tax2Amount') && null !== $object->getTax2Amount()) {
            $data['tax2_amount'] = $object->getTax2Amount();
        }
        if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if ($object->isInitialized('discountAmount') && null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
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
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('issueDate') && null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if ($object->isInitialized('sentAt') && null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('acceptedAt') && null !== $object->getAcceptedAt()) {
            $data['accepted_at'] = $object->getAcceptedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('declinedAt') && null !== $object->getDeclinedAt()) {
            $data['declined_at'] = $object->getDeclinedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}

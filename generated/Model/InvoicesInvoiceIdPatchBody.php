<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPatchBody
{
    /**
     * The ID of the client this invoice belongs to.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The ID of the retainer associated with this invoice.
     *
     * @var int|null
     */
    protected $retainerId;
    /**
     * The ID of the estimate associated with this invoice.
     *
     * @var int|null
     */
    protected $estimateId;
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @var string|null
     */
    protected $number;
    /**
     * The purchase order number.
     *
     * @var string|null
     */
    protected $purchaseOrder;
    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @var float|null
     */
    protected $tax;
    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     *
     * @var float|null
     */
    protected $tax2;
    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     *
     * @var float|null
     */
    protected $discount;
    /**
     * The invoice subject.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * Any additional notes to include on the invoice.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * The currency used by the invoice. If not provided, the client’s currency will be used. See a list of supported currencies.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Date the invoice was issued.
     *
     * @var \DateTime|null
     */
    protected $issueDate;
    /**
     * Date the invoice is due.
     *
     * @var \DateTime|null
     */
    protected $dueDate;
    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, or net 60.
     *
     * @var string|null
     */
    protected $paymentTerm;
    /**
     * Array of line item parameters.
     *
     * @var InvoicesInvoiceIdPatchBodyLineItemsItem[]|null
     */
    protected $lineItems;

    /**
     * The ID of the client this invoice belongs to.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client this invoice belongs to.
     */
    public function setClientId(?int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The ID of the retainer associated with this invoice.
     */
    public function getRetainerId(): ?int
    {
        return $this->retainerId;
    }

    /**
     * The ID of the retainer associated with this invoice.
     */
    public function setRetainerId(?int $retainerId): self
    {
        $this->retainerId = $retainerId;

        return $this;
    }

    /**
     * The ID of the estimate associated with this invoice.
     */
    public function getEstimateId(): ?int
    {
        return $this->estimateId;
    }

    /**
     * The ID of the estimate associated with this invoice.
     */
    public function setEstimateId(?int $estimateId): self
    {
        $this->estimateId = $estimateId;

        return $this;
    }

    /**
     * If no value is set, the number will be automatically generated.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * If no value is set, the number will be automatically generated.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The purchase order number.
     */
    public function getPurchaseOrder(): ?string
    {
        return $this->purchaseOrder;
    }

    /**
     * The purchase order number.
     */
    public function setPurchaseOrder(?string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     */
    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     */
    public function getTax2(): ?float
    {
        return $this->tax2;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts. Example: use 10.0 for 10.0%.
     */
    public function setTax2(?float $tax2): self
    {
        $this->tax2 = $tax2;

        return $this;
    }

    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * This percentage is subtracted from the subtotal. Example: use 10.0 for 10.0%.
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * The invoice subject.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The invoice subject.
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Any additional notes to include on the invoice.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any additional notes to include on the invoice.
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * The currency used by the invoice. If not provided, the client’s currency will be used. See a list of supported currencies.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency used by the invoice. If not provided, the client’s currency will be used. See a list of supported currencies.
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Date the invoice was issued.
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * Date the invoice was issued.
     */
    public function setIssueDate(?\DateTime $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Date the invoice is due.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Date the invoice is due.
     */
    public function setDueDate(?\DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, or net 60.
     */
    public function getPaymentTerm(): ?string
    {
        return $this->paymentTerm;
    }

    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, or net 60.
     */
    public function setPaymentTerm(?string $paymentTerm): self
    {
        $this->paymentTerm = $paymentTerm;

        return $this;
    }

    /**
     * Array of line item parameters.
     *
     * @return InvoicesInvoiceIdPatchBodyLineItemsItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Array of line item parameters.
     *
     * @param InvoicesInvoiceIdPatchBodyLineItemsItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}

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

class Invoice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the invoice.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing invoice’s client id and name.
     *
     * @var InvoiceClient|null
     */
    protected $client;
    /**
     * Array of invoice line items.
     *
     * @var InvoiceLineItem[]|null
     */
    protected $lineItems;
    /**
     * An object containing the associated estimate’s id.
     *
     * @var InvoiceEstimate|null
     */
    protected $estimate;
    /**
     * An object containing the associated retainer’s id.
     *
     * @var InvoiceRetainer|null
     */
    protected $retainer;
    /**
     * An object containing the id and name of the person that created the invoice.
     *
     * @var InvoiceCreator|null
     */
    protected $creator;
    /**
     * Used to build a URL to the public web invoice for your client by adding /client/invoices/{CLIENT_KEY} to your account URL https://{SUBDOMAIN}.harvestapp.com/ Note: you can also add .pdf to the end of this URL to access a PDF version of the invoice.
     *
     * @var string|null
     */
    protected $clientKey;
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
     * The total amount for the invoice, including any discounts and taxes.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The total amount due at this time for this invoice.
     *
     * @var float|null
     */
    protected $dueAmount;
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @var float|null
     */
    protected $tax;
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @var float|null
     */
    protected $tax2;
    /**
     * The amount calculated from tax2.
     *
     * @var float|null
     */
    protected $tax2Amount;
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @var float|null
     */
    protected $discount;
    /**
     * The amount calculated from discount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * The invoice subject.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * Any additional notes included on the invoice.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * The currency code associated with this invoice.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The current state of the invoice: draft, open, paid, or closed.
     *
     * @var string|null
     */
    protected $state;
    /**
     * Start of the period during which time entries were added to this invoice.
     *
     * @var \DateTime|null
     */
    protected $periodStart;
    /**
     * End of the period during which time entries were added to this invoice.
     *
     * @var \DateTime|null
     */
    protected $periodEnd;
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
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     *
     * @var string|null
     */
    protected $paymentTerm;
    /**
     * The list of payment options enabled for the invoice. Options: [ach, credit_card, paypal].
     *
     * @var string[]|null
     */
    protected $paymentOptions;
    /**
     * Date and time the invoice was sent.
     *
     * @var \DateTime|null
     */
    protected $sentAt;
    /**
     * Date and time the invoice was paid.
     *
     * @var \DateTime|null
     */
    protected $paidAt;
    /**
     * Date the invoice was paid.
     *
     * @var \DateTime|null
     */
    protected $paidDate;
    /**
     * Date and time the invoice was closed.
     *
     * @var \DateTime|null
     */
    protected $closedAt;
    /**
     * Unique ID of the associated recurring invoice.
     *
     * @var int|null
     */
    protected $recurringInvoiceId;
    /**
     * Date and time the invoice was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the invoice was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the invoice.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the invoice.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * An object containing invoice’s client id and name.
     */
    public function getClient(): ?InvoiceClient
    {
        return $this->client;
    }

    /**
     * An object containing invoice’s client id and name.
     */
    public function setClient(?InvoiceClient $client): self
    {
        $this->initialized['client'] = true;
        $this->client = $client;

        return $this;
    }

    /**
     * Array of invoice line items.
     *
     * @return InvoiceLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Array of invoice line items.
     *
     * @param InvoiceLineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * An object containing the associated estimate’s id.
     */
    public function getEstimate(): ?InvoiceEstimate
    {
        return $this->estimate;
    }

    /**
     * An object containing the associated estimate’s id.
     */
    public function setEstimate(?InvoiceEstimate $estimate): self
    {
        $this->initialized['estimate'] = true;
        $this->estimate = $estimate;

        return $this;
    }

    /**
     * An object containing the associated retainer’s id.
     */
    public function getRetainer(): ?InvoiceRetainer
    {
        return $this->retainer;
    }

    /**
     * An object containing the associated retainer’s id.
     */
    public function setRetainer(?InvoiceRetainer $retainer): self
    {
        $this->initialized['retainer'] = true;
        $this->retainer = $retainer;

        return $this;
    }

    /**
     * An object containing the id and name of the person that created the invoice.
     */
    public function getCreator(): ?InvoiceCreator
    {
        return $this->creator;
    }

    /**
     * An object containing the id and name of the person that created the invoice.
     */
    public function setCreator(?InvoiceCreator $creator): self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;

        return $this;
    }

    /**
     * Used to build a URL to the public web invoice for your client by adding /client/invoices/{CLIENT_KEY} to your account URL https://{SUBDOMAIN}.harvestapp.com/ Note: you can also add .pdf to the end of this URL to access a PDF version of the invoice.
     */
    public function getClientKey(): ?string
    {
        return $this->clientKey;
    }

    /**
     * Used to build a URL to the public web invoice for your client by adding /client/invoices/{CLIENT_KEY} to your account URL https://{SUBDOMAIN}.harvestapp.com/ Note: you can also add .pdf to the end of this URL to access a PDF version of the invoice.
     */
    public function setClientKey(?string $clientKey): self
    {
        $this->initialized['clientKey'] = true;
        $this->clientKey = $clientKey;

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
        $this->initialized['number'] = true;
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
        $this->initialized['purchaseOrder'] = true;
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * The total amount for the invoice, including any discounts and taxes.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The total amount for the invoice, including any discounts and taxes.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * The total amount due at this time for this invoice.
     */
    public function getDueAmount(): ?float
    {
        return $this->dueAmount;
    }

    /**
     * The total amount due at this time for this invoice.
     */
    public function setDueAmount(?float $dueAmount): self
    {
        $this->initialized['dueAmount'] = true;
        $this->dueAmount = $dueAmount;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     */
    public function setTax(?float $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;

        return $this;
    }

    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     */
    public function setTaxAmount(?float $taxAmount): self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     */
    public function getTax2(): ?float
    {
        return $this->tax2;
    }

    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     */
    public function setTax2(?float $tax2): self
    {
        $this->initialized['tax2'] = true;
        $this->tax2 = $tax2;

        return $this;
    }

    /**
     * The amount calculated from tax2.
     */
    public function getTax2Amount(): ?float
    {
        return $this->tax2Amount;
    }

    /**
     * The amount calculated from tax2.
     */
    public function setTax2Amount(?float $tax2Amount): self
    {
        $this->initialized['tax2Amount'] = true;
        $this->tax2Amount = $tax2Amount;

        return $this;
    }

    /**
     * This percentage is subtracted from the subtotal.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * This percentage is subtracted from the subtotal.
     */
    public function setDiscount(?float $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }

    /**
     * The amount calculated from discount.
     */
    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }

    /**
     * The amount calculated from discount.
     */
    public function setDiscountAmount(?float $discountAmount): self
    {
        $this->initialized['discountAmount'] = true;
        $this->discountAmount = $discountAmount;

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
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * Any additional notes included on the invoice.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any additional notes included on the invoice.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * The currency code associated with this invoice.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with this invoice.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * The current state of the invoice: draft, open, paid, or closed.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * The current state of the invoice: draft, open, paid, or closed.
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * Start of the period during which time entries were added to this invoice.
     */
    public function getPeriodStart(): ?\DateTime
    {
        return $this->periodStart;
    }

    /**
     * Start of the period during which time entries were added to this invoice.
     */
    public function setPeriodStart(?\DateTime $periodStart): self
    {
        $this->initialized['periodStart'] = true;
        $this->periodStart = $periodStart;

        return $this;
    }

    /**
     * End of the period during which time entries were added to this invoice.
     */
    public function getPeriodEnd(): ?\DateTime
    {
        return $this->periodEnd;
    }

    /**
     * End of the period during which time entries were added to this invoice.
     */
    public function setPeriodEnd(?\DateTime $periodEnd): self
    {
        $this->initialized['periodEnd'] = true;
        $this->periodEnd = $periodEnd;

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
        $this->initialized['issueDate'] = true;
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
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     */
    public function getPaymentTerm(): ?string
    {
        return $this->paymentTerm;
    }

    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     */
    public function setPaymentTerm(?string $paymentTerm): self
    {
        $this->initialized['paymentTerm'] = true;
        $this->paymentTerm = $paymentTerm;

        return $this;
    }

    /**
     * The list of payment options enabled for the invoice. Options: [ach, credit_card, paypal].
     *
     * @return string[]|null
     */
    public function getPaymentOptions(): ?array
    {
        return $this->paymentOptions;
    }

    /**
     * The list of payment options enabled for the invoice. Options: [ach, credit_card, paypal].
     *
     * @param string[]|null $paymentOptions
     */
    public function setPaymentOptions(?array $paymentOptions): self
    {
        $this->initialized['paymentOptions'] = true;
        $this->paymentOptions = $paymentOptions;

        return $this;
    }

    /**
     * Date and time the invoice was sent.
     */
    public function getSentAt(): ?\DateTime
    {
        return $this->sentAt;
    }

    /**
     * Date and time the invoice was sent.
     */
    public function setSentAt(?\DateTime $sentAt): self
    {
        $this->initialized['sentAt'] = true;
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * Date and time the invoice was paid.
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * Date and time the invoice was paid.
     */
    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->initialized['paidAt'] = true;
        $this->paidAt = $paidAt;

        return $this;
    }

    /**
     * Date the invoice was paid.
     */
    public function getPaidDate(): ?\DateTime
    {
        return $this->paidDate;
    }

    /**
     * Date the invoice was paid.
     */
    public function setPaidDate(?\DateTime $paidDate): self
    {
        $this->initialized['paidDate'] = true;
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Date and time the invoice was closed.
     */
    public function getClosedAt(): ?\DateTime
    {
        return $this->closedAt;
    }

    /**
     * Date and time the invoice was closed.
     */
    public function setClosedAt(?\DateTime $closedAt): self
    {
        $this->initialized['closedAt'] = true;
        $this->closedAt = $closedAt;

        return $this;
    }

    /**
     * Unique ID of the associated recurring invoice.
     */
    public function getRecurringInvoiceId(): ?int
    {
        return $this->recurringInvoiceId;
    }

    /**
     * Unique ID of the associated recurring invoice.
     */
    public function setRecurringInvoiceId(?int $recurringInvoiceId): self
    {
        $this->initialized['recurringInvoiceId'] = true;
        $this->recurringInvoiceId = $recurringInvoiceId;

        return $this;
    }

    /**
     * Date and time the invoice was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the invoice was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the invoice was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the invoice was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

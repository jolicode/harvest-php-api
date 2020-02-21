<?php

namespace JoliCode\Harvest\Api\Model;

class Estimate
{
    /**
     * Unique ID for the estimate.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing estimate’s client id and name.
     *
     * @var EstimateClient|null
     */
    protected $client;
    /**
     * Array of estimate line items.
     *
     * @var EstimateLineItem[]|null
     */
    protected $lineItems;
    /**
     * An object containing the id and name of the person that created the estimate.
     *
     * @var EstimateCreator|null
     */
    protected $creator;
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456
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
     * The total amount for the estimate, including any discounts and taxes.
     *
     * @var float|null
     */
    protected $amount;
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
     * The amount calcuated from discount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * The estimate subject.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * Any additional notes included on the estimate.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * The currency code associated with this estimate.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The current state of the estimate: draft, sent, accepted, or declined.
     *
     * @var string|null
     */
    protected $state;
    /**
     * Date the estimate was issued.
     *
     * @var \DateTime|null
     */
    protected $issueDate;
    /**
     * Date and time the estimate was sent.
     *
     * @var \DateTime|null
     */
    protected $sentAt;
    /**
     * Date and time the estimate was accepted.
     *
     * @var \DateTime|null
     */
    protected $acceptedAt;
    /**
     * Date and time the estimate was declined.
     *
     * @var \DateTime|null
     */
    protected $declinedAt;
    /**
     * Date and time the estimate was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the estimate was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the estimate.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the estimate.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * An object containing estimate’s client id and name.
     *
     * @return EstimateClient|null
     */
    public function getClient() : ?EstimateClient
    {
        return $this->client;
    }
    /**
     * An object containing estimate’s client id and name.
     *
     * @param EstimateClient|null $client
     *
     * @return self
     */
    public function setClient(?EstimateClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * Array of estimate line items.
     *
     * @return EstimateLineItem[]|null
     */
    public function getLineItems() : ?array
    {
        return $this->lineItems;
    }
    /**
     * Array of estimate line items.
     *
     * @param EstimateLineItem[]|null $lineItems
     *
     * @return self
     */
    public function setLineItems(?array $lineItems) : self
    {
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * An object containing the id and name of the person that created the estimate.
     *
     * @return EstimateCreator|null
     */
    public function getCreator() : ?EstimateCreator
    {
        return $this->creator;
    }
    /**
     * An object containing the id and name of the person that created the estimate.
     *
     * @param EstimateCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?EstimateCreator $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456
     *
     * @return string|null
     */
    public function getClientKey() : ?string
    {
        return $this->clientKey;
    }
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456
     *
     * @param string|null $clientKey
     *
     * @return self
     */
    public function setClientKey(?string $clientKey) : self
    {
        $this->clientKey = $clientKey;
        return $this;
    }
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * The purchase order number.
     *
     * @return string|null
     */
    public function getPurchaseOrder() : ?string
    {
        return $this->purchaseOrder;
    }
    /**
     * The purchase order number.
     *
     * @param string|null $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(?string $purchaseOrder) : self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    /**
     * The total amount for the estimate, including any discounts and taxes.
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * The total amount for the estimate, including any discounts and taxes.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @return float|null
     */
    public function getTax() : ?float
    {
        return $this->tax;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @param float|null $tax
     *
     * @return self
     */
    public function setTax(?float $tax) : self
    {
        $this->tax = $tax;
        return $this;
    }
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @return float|null
     */
    public function getTaxAmount() : ?float
    {
        return $this->taxAmount;
    }
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @param float|null $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?float $taxAmount) : self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @return float|null
     */
    public function getTax2() : ?float
    {
        return $this->tax2;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @param float|null $tax2
     *
     * @return self
     */
    public function setTax2(?float $tax2) : self
    {
        $this->tax2 = $tax2;
        return $this;
    }
    /**
     * The amount calculated from tax2.
     *
     * @return float|null
     */
    public function getTax2Amount() : ?float
    {
        return $this->tax2Amount;
    }
    /**
     * The amount calculated from tax2.
     *
     * @param float|null $tax2Amount
     *
     * @return self
     */
    public function setTax2Amount(?float $tax2Amount) : self
    {
        $this->tax2Amount = $tax2Amount;
        return $this;
    }
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @return float|null
     */
    public function getDiscount() : ?float
    {
        return $this->discount;
    }
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @param float|null $discount
     *
     * @return self
     */
    public function setDiscount(?float $discount) : self
    {
        $this->discount = $discount;
        return $this;
    }
    /**
     * The amount calcuated from discount.
     *
     * @return float|null
     */
    public function getDiscountAmount() : ?float
    {
        return $this->discountAmount;
    }
    /**
     * The amount calcuated from discount.
     *
     * @param float|null $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(?float $discountAmount) : self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * The estimate subject.
     *
     * @return string|null
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * The estimate subject.
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * Any additional notes included on the estimate.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Any additional notes included on the estimate.
     *
     * @param string|null $notes
     *
     * @return self
     */
    public function setNotes(?string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * The currency code associated with this estimate.
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with this estimate.
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * The current state of the estimate: draft, sent, accepted, or declined.
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * The current state of the estimate: draft, sent, accepted, or declined.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Date the estimate was issued.
     *
     * @return \DateTime|null
     */
    public function getIssueDate() : ?\DateTime
    {
        return $this->issueDate;
    }
    /**
     * Date the estimate was issued.
     *
     * @param \DateTime|null $issueDate
     *
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate) : self
    {
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * Date and time the estimate was sent.
     *
     * @return \DateTime|null
     */
    public function getSentAt() : ?\DateTime
    {
        return $this->sentAt;
    }
    /**
     * Date and time the estimate was sent.
     *
     * @param \DateTime|null $sentAt
     *
     * @return self
     */
    public function setSentAt(?\DateTime $sentAt) : self
    {
        $this->sentAt = $sentAt;
        return $this;
    }
    /**
     * Date and time the estimate was accepted.
     *
     * @return \DateTime|null
     */
    public function getAcceptedAt() : ?\DateTime
    {
        return $this->acceptedAt;
    }
    /**
     * Date and time the estimate was accepted.
     *
     * @param \DateTime|null $acceptedAt
     *
     * @return self
     */
    public function setAcceptedAt(?\DateTime $acceptedAt) : self
    {
        $this->acceptedAt = $acceptedAt;
        return $this;
    }
    /**
     * Date and time the estimate was declined.
     *
     * @return \DateTime|null
     */
    public function getDeclinedAt() : ?\DateTime
    {
        return $this->declinedAt;
    }
    /**
     * Date and time the estimate was declined.
     *
     * @param \DateTime|null $declinedAt
     *
     * @return self
     */
    public function setDeclinedAt(?\DateTime $declinedAt) : self
    {
        $this->declinedAt = $declinedAt;
        return $this;
    }
    /**
     * Date and time the estimate was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the estimate was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the estimate was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the estimate was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
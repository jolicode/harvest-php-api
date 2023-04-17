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

class Estimate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456.
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
     * The amount calculated from discount.
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the estimate.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the estimate.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * An object containing estimate’s client id and name.
     */
    public function getClient(): ?EstimateClient
    {
        return $this->client;
    }

    /**
     * An object containing estimate’s client id and name.
     */
    public function setClient(?EstimateClient $client): self
    {
        $this->initialized['client'] = true;
        $this->client = $client;

        return $this;
    }

    /**
     * Array of estimate line items.
     *
     * @return EstimateLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Array of estimate line items.
     *
     * @param EstimateLineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * An object containing the id and name of the person that created the estimate.
     */
    public function getCreator(): ?EstimateCreator
    {
        return $this->creator;
    }

    /**
     * An object containing the id and name of the person that created the estimate.
     */
    public function setCreator(?EstimateCreator $creator): self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;

        return $this;
    }

    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456.
     */
    public function getClientKey(): ?string
    {
        return $this->clientKey;
    }

    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/estimates/abc123456.
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
     * The total amount for the estimate, including any discounts and taxes.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The total amount for the estimate, including any discounts and taxes.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

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
     * The estimate subject.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The estimate subject.
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * Any additional notes included on the estimate.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any additional notes included on the estimate.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * The currency code associated with this estimate.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with this estimate.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * The current state of the estimate: draft, sent, accepted, or declined.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * The current state of the estimate: draft, sent, accepted, or declined.
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * Date the estimate was issued.
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * Date the estimate was issued.
     */
    public function setIssueDate(?\DateTime $issueDate): self
    {
        $this->initialized['issueDate'] = true;
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Date and time the estimate was sent.
     */
    public function getSentAt(): ?\DateTime
    {
        return $this->sentAt;
    }

    /**
     * Date and time the estimate was sent.
     */
    public function setSentAt(?\DateTime $sentAt): self
    {
        $this->initialized['sentAt'] = true;
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * Date and time the estimate was accepted.
     */
    public function getAcceptedAt(): ?\DateTime
    {
        return $this->acceptedAt;
    }

    /**
     * Date and time the estimate was accepted.
     */
    public function setAcceptedAt(?\DateTime $acceptedAt): self
    {
        $this->initialized['acceptedAt'] = true;
        $this->acceptedAt = $acceptedAt;

        return $this;
    }

    /**
     * Date and time the estimate was declined.
     */
    public function getDeclinedAt(): ?\DateTime
    {
        return $this->declinedAt;
    }

    /**
     * Date and time the estimate was declined.
     */
    public function setDeclinedAt(?\DateTime $declinedAt): self
    {
        $this->initialized['declinedAt'] = true;
        $this->declinedAt = $declinedAt;

        return $this;
    }

    /**
     * Date and time the estimate was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the estimate was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the estimate was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the estimate was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

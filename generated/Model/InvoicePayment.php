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

class InvoicePayment
{
    /**
     * Unique ID for the payment.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The amount of the payment.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Date and time the payment was made.
     *
     * @var \DateTime|null
     */
    protected $paidAt;
    /**
     * Date the payment was made.
     *
     * @var \DateTime|null
     */
    protected $paidDate;
    /**
     * The name of the person who recorded the payment.
     *
     * @var string|null
     */
    protected $recordedBy;
    /**
     * The email of the person who recorded the payment.
     *
     * @var string|null
     */
    protected $recordedByEmail;
    /**
     * Any notes associated with the payment.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * Either the card authorization or PayPal transaction ID.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The payment gateway id and name used to process the payment.
     *
     * @var InvoicePaymentPaymentGateway|null
     */
    protected $paymentGateway;
    /**
     * Date and time the payment was recorded.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the payment was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * Unique ID for the payment.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the payment.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The amount of the payment.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The amount of the payment.
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Date and time the payment was made.
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * Date and time the payment was made.
     */
    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    /**
     * Date the payment was made.
     */
    public function getPaidDate(): ?\DateTime
    {
        return $this->paidDate;
    }

    /**
     * Date the payment was made.
     */
    public function setPaidDate(?\DateTime $paidDate): self
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * The name of the person who recorded the payment.
     */
    public function getRecordedBy(): ?string
    {
        return $this->recordedBy;
    }

    /**
     * The name of the person who recorded the payment.
     */
    public function setRecordedBy(?string $recordedBy): self
    {
        $this->recordedBy = $recordedBy;

        return $this;
    }

    /**
     * The email of the person who recorded the payment.
     */
    public function getRecordedByEmail(): ?string
    {
        return $this->recordedByEmail;
    }

    /**
     * The email of the person who recorded the payment.
     */
    public function setRecordedByEmail(?string $recordedByEmail): self
    {
        $this->recordedByEmail = $recordedByEmail;

        return $this;
    }

    /**
     * Any notes associated with the payment.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any notes associated with the payment.
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Either the card authorization or PayPal transaction ID.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Either the card authorization or PayPal transaction ID.
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * The payment gateway id and name used to process the payment.
     */
    public function getPaymentGateway(): ?InvoicePaymentPaymentGateway
    {
        return $this->paymentGateway;
    }

    /**
     * The payment gateway id and name used to process the payment.
     */
    public function setPaymentGateway(?InvoicePaymentPaymentGateway $paymentGateway): self
    {
        $this->paymentGateway = $paymentGateway;

        return $this;
    }

    /**
     * Date and time the payment was recorded.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the payment was recorded.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the payment was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the payment was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

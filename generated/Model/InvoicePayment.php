<?php

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
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the payment.
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
     * The amount of the payment.
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * The amount of the payment.
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
     * Date and time the payment was made.
     *
     * @return \DateTime|null
     */
    public function getPaidAt() : ?\DateTime
    {
        return $this->paidAt;
    }
    /**
     * Date and time the payment was made.
     *
     * @param \DateTime|null $paidAt
     *
     * @return self
     */
    public function setPaidAt(?\DateTime $paidAt) : self
    {
        $this->paidAt = $paidAt;
        return $this;
    }
    /**
     * Date the payment was made.
     *
     * @return \DateTime|null
     */
    public function getPaidDate() : ?\DateTime
    {
        return $this->paidDate;
    }
    /**
     * Date the payment was made.
     *
     * @param \DateTime|null $paidDate
     *
     * @return self
     */
    public function setPaidDate(?\DateTime $paidDate) : self
    {
        $this->paidDate = $paidDate;
        return $this;
    }
    /**
     * The name of the person who recorded the payment.
     *
     * @return string|null
     */
    public function getRecordedBy() : ?string
    {
        return $this->recordedBy;
    }
    /**
     * The name of the person who recorded the payment.
     *
     * @param string|null $recordedBy
     *
     * @return self
     */
    public function setRecordedBy(?string $recordedBy) : self
    {
        $this->recordedBy = $recordedBy;
        return $this;
    }
    /**
     * The email of the person who recorded the payment.
     *
     * @return string|null
     */
    public function getRecordedByEmail() : ?string
    {
        return $this->recordedByEmail;
    }
    /**
     * The email of the person who recorded the payment.
     *
     * @param string|null $recordedByEmail
     *
     * @return self
     */
    public function setRecordedByEmail(?string $recordedByEmail) : self
    {
        $this->recordedByEmail = $recordedByEmail;
        return $this;
    }
    /**
     * Any notes associated with the payment.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Any notes associated with the payment.
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
     * Either the card authorization or PayPal transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    /**
     * Either the card authorization or PayPal transaction ID.
     *
     * @param string|null $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId) : self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * The payment gateway id and name used to process the payment.
     *
     * @return InvoicePaymentPaymentGateway|null
     */
    public function getPaymentGateway() : ?InvoicePaymentPaymentGateway
    {
        return $this->paymentGateway;
    }
    /**
     * The payment gateway id and name used to process the payment.
     *
     * @param InvoicePaymentPaymentGateway|null $paymentGateway
     *
     * @return self
     */
    public function setPaymentGateway(?InvoicePaymentPaymentGateway $paymentGateway) : self
    {
        $this->paymentGateway = $paymentGateway;
        return $this;
    }
    /**
     * Date and time the payment was recorded.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the payment was recorded.
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
     * Date and time the payment was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the payment was last updated.
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
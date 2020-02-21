<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPaymentsPostBody
{
    /**
     * The amount of the payment.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @var \DateTime|null
     */
    protected $paidAt;
    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @var \DateTime|null
     */
    protected $paidDate;
    /**
     * Any notes to be associated with the payment.
     *
     * @var string|null
     */
    protected $notes;
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
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @return \DateTime|null
     */
    public function getPaidAt() : ?\DateTime
    {
        return $this->paidAt;
    }
    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
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
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     *
     * @return \DateTime|null
     */
    public function getPaidDate() : ?\DateTime
    {
        return $this->paidDate;
    }
    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
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
     * Any notes to be associated with the payment.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Any notes to be associated with the payment.
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
}
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

class InvoicesInvoiceIdPaymentsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     */
    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    /**
     * Date and time the payment was made. Pass either paid_at or paid_date, but not both.
     */
    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->initialized['paidAt'] = true;
        $this->paidAt = $paidAt;

        return $this;
    }

    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     */
    public function getPaidDate(): ?\DateTime
    {
        return $this->paidDate;
    }

    /**
     * Date the payment was made. Pass either paid_at or paid_date, but not both.
     */
    public function setPaidDate(?\DateTime $paidDate): self
    {
        $this->initialized['paidDate'] = true;
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Any notes to be associated with the payment.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any notes to be associated with the payment.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }
}

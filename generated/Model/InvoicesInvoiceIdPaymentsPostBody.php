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
    /**
     * Whether or not to send a thank you email (if enabled for your account in Invoices > Configure > Messages). Only sends an email if the invoice will be fully paid after creating this payment. Defaults to true.
     *
     * @var bool|null
     */
    protected $sendThankYou;

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

    /**
     * Whether or not to send a thank you email (if enabled for your account in Invoices > Configure > Messages). Only sends an email if the invoice will be fully paid after creating this payment. Defaults to true.
     */
    public function getSendThankYou(): ?bool
    {
        return $this->sendThankYou;
    }

    /**
     * Whether or not to send a thank you email (if enabled for your account in Invoices > Configure > Messages). Only sends an email if the invoice will be fully paid after creating this payment. Defaults to true.
     */
    public function setSendThankYou(?bool $sendThankYou): self
    {
        $this->initialized['sendThankYou'] = true;
        $this->sendThankYou = $sendThankYou;

        return $this;
    }
}

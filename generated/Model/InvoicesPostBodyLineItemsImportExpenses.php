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

class InvoicesPostBodyLineItemsImportExpenses
{
    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     *
     * @var string
     */
    protected $summaryType;
    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @var \DateTime
     */
    protected $to;
    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     *
     * @var bool
     */
    protected $attachReceipt;

    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     */
    public function getSummaryType(): string
    {
        return $this->summaryType;
    }

    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     */
    public function setSummaryType(string $summaryType): self
    {
        $this->summaryType = $summaryType;

        return $this;
    }

    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     */
    public function setFrom(\DateTime $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }

    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     */
    public function setTo(\DateTime $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     */
    public function getAttachReceipt(): bool
    {
        return $this->attachReceipt;
    }

    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     */
    public function setAttachReceipt(bool $attachReceipt): self
    {
        $this->attachReceipt = $attachReceipt;

        return $this;
    }
}

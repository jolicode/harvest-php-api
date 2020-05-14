<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesPostBodyLineItemsImportExpenses
{
    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     *
     * @var string|null
     */
    protected $summaryType;
    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @var \DateTime|null
     */
    protected $to;
    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     *
     * @var bool|null
     */
    protected $attachReceipt;
    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     *
     * @return string|null
     */
    public function getSummaryType() : ?string
    {
        return $this->summaryType;
    }
    /**
     * How to summarize the expenses per line item. Options: project, category, people, or detailed.
     *
     * @param string|null $summaryType
     *
     * @return self
     */
    public function setSummaryType(?string $summaryType) : self
    {
        $this->summaryType = $summaryType;
        return $this;
    }
    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @return \DateTime|null
     */
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    /**
     * Start date for included expenses. Must be provided if to is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @param \DateTime|null $from
     *
     * @return self
     */
    public function setFrom(?\DateTime $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @return \DateTime|null
     */
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    /**
     * End date for included expenses. Must be provided if from is present. If neither from or to are provided, all unbilled expenses will be included.
     *
     * @param \DateTime|null $to
     *
     * @return self
     */
    public function setTo(?\DateTime $to) : self
    {
        $this->to = $to;
        return $this;
    }
    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     *
     * @return bool|null
     */
    public function getAttachReceipt() : ?bool
    {
        return $this->attachReceipt;
    }
    /**
     * If set to true, a PDF containing an expense report with receipts will be attached to the invoice. Defaults to false.
     *
     * @param bool|null $attachReceipt
     *
     * @return self
     */
    public function setAttachReceipt(?bool $attachReceipt) : self
    {
        $this->attachReceipt = $attachReceipt;
        return $this;
    }
}
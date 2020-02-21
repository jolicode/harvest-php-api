<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPatchBodyLineItemsItemTime
{
    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     *
     * @var string|null
     */
    protected $summaryType;
    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var \DateTime|null
     */
    protected $to;
    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     *
     * @return string|null
     */
    public function getSummaryType() : ?string
    {
        return $this->summaryType;
    }
    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
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
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @return \DateTime|null
     */
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
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
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @return \DateTime|null
     */
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
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
}
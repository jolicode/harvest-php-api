<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPatchBodyLineItemsItemTime
{
    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     *
     * @var string
     */
    protected $summaryType;
    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var string
     */
    protected $from;
    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var string
     */
    protected $to;

    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     *
     * @return string|null
     */
    public function getSummaryType(): ?string
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
    public function setSummaryType(?string $summaryType): self
    {
        $this->summaryType = $summaryType;

        return $this;
    }

    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }
}

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

class InvoicesPostBodyLineItemsImportTime extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     *
     * @var string
     */
    protected $summaryType;
    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     *
     * @var \DateTime
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     */
    public function getSummaryType(): string
    {
        return $this->summaryType;
    }

    /**
     * How to summarize the time entries per line item. Options: project, task, people, or detailed.
     */
    public function setSummaryType(string $summaryType): self
    {
        $this->initialized['summaryType'] = true;
        $this->summaryType = $summaryType;

        return $this;
    }

    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * Start date for included time entries. Must be provided if to is present. If neither from or to are provided, all unbilled time entries will be included.
     */
    public function setFrom(\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }

    /**
     * End date for included time entries. Must be provided if from is present. If neither from or to are provided, all unbilled time entries will be included.
     */
    public function setTo(\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }
}

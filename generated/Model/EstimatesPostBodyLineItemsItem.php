<?php

namespace JoliCode\Harvest\Api\Model;

class EstimatesPostBodyLineItemsItem
{
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @var int[]|null
     */
    protected $projectIds;
    /**
     * An time import object.
     *
     * @var EstimatesPostBodyLineItemsItemTime|null
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var EstimatesPostBodyLineItemsItemExpenses|null
     */
    protected $expenses;
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @return int[]|null
     */
    public function getProjectIds() : ?array
    {
        return $this->projectIds;
    }
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @param int[]|null $projectIds
     *
     * @return self
     */
    public function setProjectIds(?array $projectIds) : self
    {
        $this->projectIds = $projectIds;
        return $this;
    }
    /**
     * An time import object.
     *
     * @return EstimatesPostBodyLineItemsItemTime|null
     */
    public function getTime() : ?EstimatesPostBodyLineItemsItemTime
    {
        return $this->time;
    }
    /**
     * An time import object.
     *
     * @param EstimatesPostBodyLineItemsItemTime|null $time
     *
     * @return self
     */
    public function setTime(?EstimatesPostBodyLineItemsItemTime $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * An expense import object.
     *
     * @return EstimatesPostBodyLineItemsItemExpenses|null
     */
    public function getExpenses() : ?EstimatesPostBodyLineItemsItemExpenses
    {
        return $this->expenses;
    }
    /**
     * An expense import object.
     *
     * @param EstimatesPostBodyLineItemsItemExpenses|null $expenses
     *
     * @return self
     */
    public function setExpenses(?EstimatesPostBodyLineItemsItemExpenses $expenses) : self
    {
        $this->expenses = $expenses;
        return $this;
    }
}
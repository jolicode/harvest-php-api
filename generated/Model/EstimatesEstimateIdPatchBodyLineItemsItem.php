<?php

namespace JoliCode\Harvest\Api\Model;

class EstimatesEstimateIdPatchBodyLineItemsItem
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
     * @var EstimatesEstimateIdPatchBodyLineItemsItemTime|null
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var EstimatesEstimateIdPatchBodyLineItemsItemExpenses|null
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
     * @return EstimatesEstimateIdPatchBodyLineItemsItemTime|null
     */
    public function getTime() : ?EstimatesEstimateIdPatchBodyLineItemsItemTime
    {
        return $this->time;
    }
    /**
     * An time import object.
     *
     * @param EstimatesEstimateIdPatchBodyLineItemsItemTime|null $time
     *
     * @return self
     */
    public function setTime(?EstimatesEstimateIdPatchBodyLineItemsItemTime $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * An expense import object.
     *
     * @return EstimatesEstimateIdPatchBodyLineItemsItemExpenses|null
     */
    public function getExpenses() : ?EstimatesEstimateIdPatchBodyLineItemsItemExpenses
    {
        return $this->expenses;
    }
    /**
     * An expense import object.
     *
     * @param EstimatesEstimateIdPatchBodyLineItemsItemExpenses|null $expenses
     *
     * @return self
     */
    public function setExpenses(?EstimatesEstimateIdPatchBodyLineItemsItemExpenses $expenses) : self
    {
        $this->expenses = $expenses;
        return $this;
    }
}
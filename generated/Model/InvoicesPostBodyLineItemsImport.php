<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesPostBodyLineItemsImport
{
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @var int[]
     */
    protected $projectIds;
    /**
     * An time import object.
     *
     * @var InvoicesPostBodyLineItemsImportTime
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var InvoicesPostBodyLineItemsImportExpenses
     */
    protected $expenses;
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @return int[]
     */
    public function getProjectIds() : array
    {
        return $this->projectIds;
    }
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @param int[] $projectIds
     *
     * @return self
     */
    public function setProjectIds(array $projectIds) : self
    {
        $this->projectIds = $projectIds;
        return $this;
    }
    /**
     * An time import object.
     *
     * @return InvoicesPostBodyLineItemsImportTime
     */
    public function getTime() : InvoicesPostBodyLineItemsImportTime
    {
        return $this->time;
    }
    /**
     * An time import object.
     *
     * @param InvoicesPostBodyLineItemsImportTime $time
     *
     * @return self
     */
    public function setTime(InvoicesPostBodyLineItemsImportTime $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * An expense import object.
     *
     * @return InvoicesPostBodyLineItemsImportExpenses
     */
    public function getExpenses() : InvoicesPostBodyLineItemsImportExpenses
    {
        return $this->expenses;
    }
    /**
     * An expense import object.
     *
     * @param InvoicesPostBodyLineItemsImportExpenses $expenses
     *
     * @return self
     */
    public function setExpenses(InvoicesPostBodyLineItemsImportExpenses $expenses) : self
    {
        $this->expenses = $expenses;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesPostBodyLineItemsImport
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
     * @var InvoicesPostBodyLineItemsImportTime|null
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var InvoicesPostBodyLineItemsImportExpenses|null
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
     * @return InvoicesPostBodyLineItemsImportTime|null
     */
    public function getTime() : ?InvoicesPostBodyLineItemsImportTime
    {
        return $this->time;
    }
    /**
     * An time import object.
     *
     * @param InvoicesPostBodyLineItemsImportTime|null $time
     *
     * @return self
     */
    public function setTime(?InvoicesPostBodyLineItemsImportTime $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * An expense import object.
     *
     * @return InvoicesPostBodyLineItemsImportExpenses|null
     */
    public function getExpenses() : ?InvoicesPostBodyLineItemsImportExpenses
    {
        return $this->expenses;
    }
    /**
     * An expense import object.
     *
     * @param InvoicesPostBodyLineItemsImportExpenses|null $expenses
     *
     * @return self
     */
    public function setExpenses(?InvoicesPostBodyLineItemsImportExpenses $expenses) : self
    {
        $this->expenses = $expenses;
        return $this;
    }
}
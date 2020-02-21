<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdPatchBodyLineItemsItem
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
     * @var InvoicesInvoiceIdPatchBodyLineItemsItemTime|null
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var InvoicesInvoiceIdPatchBodyLineItemsItemExpenses|null
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
     * @return InvoicesInvoiceIdPatchBodyLineItemsItemTime|null
     */
    public function getTime() : ?InvoicesInvoiceIdPatchBodyLineItemsItemTime
    {
        return $this->time;
    }
    /**
     * An time import object.
     *
     * @param InvoicesInvoiceIdPatchBodyLineItemsItemTime|null $time
     *
     * @return self
     */
    public function setTime(?InvoicesInvoiceIdPatchBodyLineItemsItemTime $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * An expense import object.
     *
     * @return InvoicesInvoiceIdPatchBodyLineItemsItemExpenses|null
     */
    public function getExpenses() : ?InvoicesInvoiceIdPatchBodyLineItemsItemExpenses
    {
        return $this->expenses;
    }
    /**
     * An expense import object.
     *
     * @param InvoicesInvoiceIdPatchBodyLineItemsItemExpenses|null $expenses
     *
     * @return self
     */
    public function setExpenses(?InvoicesInvoiceIdPatchBodyLineItemsItemExpenses $expenses) : self
    {
        $this->expenses = $expenses;
        return $this;
    }
}
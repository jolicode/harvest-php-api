<?php

namespace JoliCode\Harvest\Api\Model;

class ExpensesPostBody
{
    /**
     * The ID of the user associated with this expense.  Defaults to the ID of the currently authenticated user.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The ID of the project associated with this expense.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The ID of the expense category this expense is being tracked against.
     *
     * @var int|null
     */
    protected $expenseCategoryId;
    /**
     * Date the expense occurred.
     *
     * @var \DateTime|null
     */
    protected $spentDate;
    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     *
     * @var int|null
     */
    protected $units;
    /**
     * The total amount of the expense.
     *
     * @var float|null
     */
    protected $totalCost;
    /**
     * Textual notes used to describe the expense.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * Whether this expense is billable or not. Defaults to true.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * A receipt file to attach to the expense. If including a receipt, you must submit a multipart/form-data request.
     *
     * @var string|null
     */
    protected $receipt;
    /**
     * The ID of the user associated with this expense.  Defaults to the ID of the currently authenticated user.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user associated with this expense.  Defaults to the ID of the currently authenticated user.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * The ID of the project associated with this expense.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with this expense.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The ID of the expense category this expense is being tracked against.
     *
     * @return int|null
     */
    public function getExpenseCategoryId() : ?int
    {
        return $this->expenseCategoryId;
    }
    /**
     * The ID of the expense category this expense is being tracked against.
     *
     * @param int|null $expenseCategoryId
     *
     * @return self
     */
    public function setExpenseCategoryId(?int $expenseCategoryId) : self
    {
        $this->expenseCategoryId = $expenseCategoryId;
        return $this;
    }
    /**
     * Date the expense occurred.
     *
     * @return \DateTime|null
     */
    public function getSpentDate() : ?\DateTime
    {
        return $this->spentDate;
    }
    /**
     * Date the expense occurred.
     *
     * @param \DateTime|null $spentDate
     *
     * @return self
     */
    public function setSpentDate(?\DateTime $spentDate) : self
    {
        $this->spentDate = $spentDate;
        return $this;
    }
    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     *
     * @return int|null
     */
    public function getUnits() : ?int
    {
        return $this->units;
    }
    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     *
     * @param int|null $units
     *
     * @return self
     */
    public function setUnits(?int $units) : self
    {
        $this->units = $units;
        return $this;
    }
    /**
     * The total amount of the expense.
     *
     * @return float|null
     */
    public function getTotalCost() : ?float
    {
        return $this->totalCost;
    }
    /**
     * The total amount of the expense.
     *
     * @param float|null $totalCost
     *
     * @return self
     */
    public function setTotalCost(?float $totalCost) : self
    {
        $this->totalCost = $totalCost;
        return $this;
    }
    /**
     * Textual notes used to describe the expense.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Textual notes used to describe the expense.
     *
     * @param string|null $notes
     *
     * @return self
     */
    public function setNotes(?string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Whether this expense is billable or not. Defaults to true.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether this expense is billable or not. Defaults to true.
     *
     * @param bool|null $billable
     *
     * @return self
     */
    public function setBillable(?bool $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * A receipt file to attach to the expense. If including a receipt, you must submit a multipart/form-data request.
     *
     * @return string|null
     */
    public function getReceipt() : ?string
    {
        return $this->receipt;
    }
    /**
     * A receipt file to attach to the expense. If including a receipt, you must submit a multipart/form-data request.
     *
     * @param string|null $receipt
     *
     * @return self
     */
    public function setReceipt(?string $receipt) : self
    {
        $this->receipt = $receipt;
        return $this;
    }
}
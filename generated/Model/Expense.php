<?php

namespace JoliCode\Harvest\Api\Model;

class Expense
{
    /**
     * Unique ID for the expense.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing the expense’s client id, name, and currency.
     *
     * @var ExpenseClient|null
     */
    protected $client;
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @var ExpenseProject|null
     */
    protected $project;
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @var ExpenseExpenseCategory|null
     */
    protected $expenseCategory;
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @var ExpenseUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var UserAssignment|null
     */
    protected $userAssignment;
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @var ExpenseReceipt|null
     */
    protected $receipt;
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @var ExpenseInvoice|null
     */
    protected $invoice;
    /**
     * Textual notes used to describe the expense.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * The total amount of the expense.
     *
     * @var float|null
     */
    protected $totalCost;
    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     *
     * @var int|null
     */
    protected $units;
    /**
     * Whether the expense is billable or not.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * Whether the expense has been approved or closed for some other reason.
     *
     * @var bool|null
     */
    protected $isClosed;
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @var bool|null
     */
    protected $isLocked;
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @var bool|null
     */
    protected $isBilled;
    /**
     * An explanation of why the expense has been locked.
     *
     * @var string|null
     */
    protected $lockedReason;
    /**
     * Date the expense occurred.
     *
     * @var \DateTime|null
     */
    protected $spentDate;
    /**
     * Date and time the expense was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the expense was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the expense.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the expense.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * An object containing the expense’s client id, name, and currency.
     *
     * @return ExpenseClient|null
     */
    public function getClient() : ?ExpenseClient
    {
        return $this->client;
    }
    /**
     * An object containing the expense’s client id, name, and currency.
     *
     * @param ExpenseClient|null $client
     *
     * @return self
     */
    public function setClient(?ExpenseClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @return ExpenseProject|null
     */
    public function getProject() : ?ExpenseProject
    {
        return $this->project;
    }
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @param ExpenseProject|null $project
     *
     * @return self
     */
    public function setProject(?ExpenseProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @return ExpenseExpenseCategory|null
     */
    public function getExpenseCategory() : ?ExpenseExpenseCategory
    {
        return $this->expenseCategory;
    }
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @param ExpenseExpenseCategory|null $expenseCategory
     *
     * @return self
     */
    public function setExpenseCategory(?ExpenseExpenseCategory $expenseCategory) : self
    {
        $this->expenseCategory = $expenseCategory;
        return $this;
    }
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @return ExpenseUser|null
     */
    public function getUser() : ?ExpenseUser
    {
        return $this->user;
    }
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @param ExpenseUser|null $user
     *
     * @return self
     */
    public function setUser(?ExpenseUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return UserAssignment|null
     */
    public function getUserAssignment() : ?UserAssignment
    {
        return $this->userAssignment;
    }
    /**
     * 
     *
     * @param UserAssignment|null $userAssignment
     *
     * @return self
     */
    public function setUserAssignment(?UserAssignment $userAssignment) : self
    {
        $this->userAssignment = $userAssignment;
        return $this;
    }
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @return ExpenseReceipt|null
     */
    public function getReceipt() : ?ExpenseReceipt
    {
        return $this->receipt;
    }
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @param ExpenseReceipt|null $receipt
     *
     * @return self
     */
    public function setReceipt(?ExpenseReceipt $receipt) : self
    {
        $this->receipt = $receipt;
        return $this;
    }
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @return ExpenseInvoice|null
     */
    public function getInvoice() : ?ExpenseInvoice
    {
        return $this->invoice;
    }
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @param ExpenseInvoice|null $invoice
     *
     * @return self
     */
    public function setInvoice(?ExpenseInvoice $invoice) : self
    {
        $this->invoice = $invoice;
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
     * Whether the expense is billable or not.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether the expense is billable or not.
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
     * Whether the expense has been approved or closed for some other reason.
     *
     * @return bool|null
     */
    public function getIsClosed() : ?bool
    {
        return $this->isClosed;
    }
    /**
     * Whether the expense has been approved or closed for some other reason.
     *
     * @param bool|null $isClosed
     *
     * @return self
     */
    public function setIsClosed(?bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @return bool|null
     */
    public function getIsLocked() : ?bool
    {
        return $this->isLocked;
    }
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @param bool|null $isLocked
     *
     * @return self
     */
    public function setIsLocked(?bool $isLocked) : self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @return bool|null
     */
    public function getIsBilled() : ?bool
    {
        return $this->isBilled;
    }
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @param bool|null $isBilled
     *
     * @return self
     */
    public function setIsBilled(?bool $isBilled) : self
    {
        $this->isBilled = $isBilled;
        return $this;
    }
    /**
     * An explanation of why the expense has been locked.
     *
     * @return string|null
     */
    public function getLockedReason() : ?string
    {
        return $this->lockedReason;
    }
    /**
     * An explanation of why the expense has been locked.
     *
     * @param string|null $lockedReason
     *
     * @return self
     */
    public function setLockedReason(?string $lockedReason) : self
    {
        $this->lockedReason = $lockedReason;
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
     * Date and time the expense was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the expense was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the expense was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the expense was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
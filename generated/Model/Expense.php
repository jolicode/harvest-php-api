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

class Expense extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * A user assignment object of the user that recorded the expense.
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
     * The quantity of units used to calculate the total_cost of the expense.
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
     * Whether the expense is billable or not.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * Whether the expense has been approved or not. Deprecated, use approval_status instead.
     *
     * @var bool|null
     */
    protected $isClosed;
    /**
     * The approval status of the expense. Possible values: “unsubmitted”, “submitted”, or “approved”.
     *
     * @var string|null
     */
    protected $approvalStatus;
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the expense.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the expense.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * An object containing the expense’s client id, name, and currency.
     */
    public function getClient(): ?ExpenseClient
    {
        return $this->client;
    }

    /**
     * An object containing the expense’s client id, name, and currency.
     */
    public function setClient(?ExpenseClient $client): self
    {
        $this->initialized['client'] = true;
        $this->client = $client;

        return $this;
    }

    /**
     * An object containing the expense’s project id, name, and code.
     */
    public function getProject(): ?ExpenseProject
    {
        return $this->project;
    }

    /**
     * An object containing the expense’s project id, name, and code.
     */
    public function setProject(?ExpenseProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     */
    public function getExpenseCategory(): ?ExpenseExpenseCategory
    {
        return $this->expenseCategory;
    }

    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     */
    public function setExpenseCategory(?ExpenseExpenseCategory $expenseCategory): self
    {
        $this->initialized['expenseCategory'] = true;
        $this->expenseCategory = $expenseCategory;

        return $this;
    }

    /**
     * An object containing the id and name of the user that recorded the expense.
     */
    public function getUser(): ?ExpenseUser
    {
        return $this->user;
    }

    /**
     * An object containing the id and name of the user that recorded the expense.
     */
    public function setUser(?ExpenseUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * A user assignment object of the user that recorded the expense.
     */
    public function getUserAssignment(): ?UserAssignment
    {
        return $this->userAssignment;
    }

    /**
     * A user assignment object of the user that recorded the expense.
     */
    public function setUserAssignment(?UserAssignment $userAssignment): self
    {
        $this->initialized['userAssignment'] = true;
        $this->userAssignment = $userAssignment;

        return $this;
    }

    /**
     * An object containing the expense’s receipt URL and file name.
     */
    public function getReceipt(): ?ExpenseReceipt
    {
        return $this->receipt;
    }

    /**
     * An object containing the expense’s receipt URL and file name.
     */
    public function setReceipt(?ExpenseReceipt $receipt): self
    {
        $this->initialized['receipt'] = true;
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     */
    public function getInvoice(): ?ExpenseInvoice
    {
        return $this->invoice;
    }

    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     */
    public function setInvoice(?ExpenseInvoice $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Textual notes used to describe the expense.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Textual notes used to describe the expense.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * The quantity of units used to calculate the total_cost of the expense.
     */
    public function getUnits(): ?int
    {
        return $this->units;
    }

    /**
     * The quantity of units used to calculate the total_cost of the expense.
     */
    public function setUnits(?int $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

    /**
     * The total amount of the expense.
     */
    public function getTotalCost(): ?float
    {
        return $this->totalCost;
    }

    /**
     * The total amount of the expense.
     */
    public function setTotalCost(?float $totalCost): self
    {
        $this->initialized['totalCost'] = true;
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Whether the expense is billable or not.
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    /**
     * Whether the expense is billable or not.
     */
    public function setBillable(?bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    /**
     * Whether the expense has been approved or not. Deprecated, use approval_status instead.
     */
    public function getIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    /**
     * Whether the expense has been approved or not. Deprecated, use approval_status instead.
     */
    public function setIsClosed(?bool $isClosed): self
    {
        $this->initialized['isClosed'] = true;
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * The approval status of the expense. Possible values: “unsubmitted”, “submitted”, or “approved”.
     */
    public function getApprovalStatus(): ?string
    {
        return $this->approvalStatus;
    }

    /**
     * The approval status of the expense. Possible values: “unsubmitted”, “submitted”, or “approved”.
     */
    public function setApprovalStatus(?string $approvalStatus): self
    {
        $this->initialized['approvalStatus'] = true;
        $this->approvalStatus = $approvalStatus;

        return $this;
    }

    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     */
    public function setIsLocked(?bool $isLocked): self
    {
        $this->initialized['isLocked'] = true;
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * Whether or not the expense has been marked as invoiced.
     */
    public function getIsBilled(): ?bool
    {
        return $this->isBilled;
    }

    /**
     * Whether or not the expense has been marked as invoiced.
     */
    public function setIsBilled(?bool $isBilled): self
    {
        $this->initialized['isBilled'] = true;
        $this->isBilled = $isBilled;

        return $this;
    }

    /**
     * An explanation of why the expense has been locked.
     */
    public function getLockedReason(): ?string
    {
        return $this->lockedReason;
    }

    /**
     * An explanation of why the expense has been locked.
     */
    public function setLockedReason(?string $lockedReason): self
    {
        $this->initialized['lockedReason'] = true;
        $this->lockedReason = $lockedReason;

        return $this;
    }

    /**
     * Date the expense occurred.
     */
    public function getSpentDate(): ?\DateTime
    {
        return $this->spentDate;
    }

    /**
     * Date the expense occurred.
     */
    public function setSpentDate(?\DateTime $spentDate): self
    {
        $this->initialized['spentDate'] = true;
        $this->spentDate = $spentDate;

        return $this;
    }

    /**
     * Date and time the expense was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the expense was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the expense was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the expense was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

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

class ExpensesPostBody
{
    /**
     * The ID of the user associated with this expense. Defaults to the ID of the currently authenticated user.
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
     * The ID of the user associated with this expense. Defaults to the ID of the currently authenticated user.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * The ID of the user associated with this expense. Defaults to the ID of the currently authenticated user.
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * The ID of the project associated with this expense.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project associated with this expense.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The ID of the expense category this expense is being tracked against.
     */
    public function getExpenseCategoryId(): ?int
    {
        return $this->expenseCategoryId;
    }

    /**
     * The ID of the expense category this expense is being tracked against.
     */
    public function setExpenseCategoryId(?int $expenseCategoryId): self
    {
        $this->expenseCategoryId = $expenseCategoryId;

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
        $this->spentDate = $spentDate;

        return $this;
    }

    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     */
    public function getUnits(): ?int
    {
        return $this->units;
    }

    /**
     * The quantity of units to use in calculating the total_cost of the expense.
     */
    public function setUnits(?int $units): self
    {
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
        $this->totalCost = $totalCost;

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
        $this->notes = $notes;

        return $this;
    }

    /**
     * Whether this expense is billable or not. Defaults to true.
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    /**
     * Whether this expense is billable or not. Defaults to true.
     */
    public function setBillable(?bool $billable): self
    {
        $this->billable = $billable;

        return $this;
    }

    /**
     * A receipt file to attach to the expense. If including a receipt, you must submit a multipart/form-data request.
     */
    public function getReceipt(): ?string
    {
        return $this->receipt;
    }

    /**
     * A receipt file to attach to the expense. If including a receipt, you must submit a multipart/form-data request.
     */
    public function setReceipt(?string $receipt): self
    {
        $this->receipt = $receipt;

        return $this;
    }
}

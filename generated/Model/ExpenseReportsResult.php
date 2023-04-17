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

class ExpenseReportsResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @var int|null
     */
    protected $expenseCategoryId;
    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     *
     * @var string|null
     */
    protected $expenseCategoryName;
    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var string|null
     */
    protected $userName;
    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     *
     * @var bool|null
     */
    protected $isContractor;
    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @var float|null
     */
    protected $totalAmount;
    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     *
     * @var float|null
     */
    protected $billableAmount;
    /**
     * The currency code associated with the expenses for this result.
     *
     * @var string|null
     */
    protected $currency;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function setClientId(?int $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    /**
     * The name of the client associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function setClientName(?string $clientName): self
    {
        $this->initialized['clientName'] = true;
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * The name of the project associated with the reported expenses. Only returned in the Client and Project reports.
     */
    public function setProjectName(?string $projectName): self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     */
    public function getExpenseCategoryId(): ?int
    {
        return $this->expenseCategoryId;
    }

    /**
     * The ID of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     */
    public function setExpenseCategoryId(?int $expenseCategoryId): self
    {
        $this->initialized['expenseCategoryId'] = true;
        $this->expenseCategoryId = $expenseCategoryId;

        return $this;
    }

    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     */
    public function getExpenseCategoryName(): ?string
    {
        return $this->expenseCategoryName;
    }

    /**
     * The name of the expense category associated with the reported expenses. Only returned in the Expense Category report.
     */
    public function setExpenseCategoryName(?string $expenseCategoryName): self
    {
        $this->initialized['expenseCategoryName'] = true;
        $this->expenseCategoryName = $expenseCategoryName;

        return $this;
    }

    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * The ID of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function setUserId(?int $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * The name of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function setUserName(?string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;

        return $this;
    }

    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function getIsContractor(): ?bool
    {
        return $this->isContractor;
    }

    /**
     * The contractor status of the user associated with the reported expenses. Only returned in the Team report.
     */
    public function setIsContractor(?bool $isContractor): self
    {
        $this->initialized['isContractor'] = true;
        $this->isContractor = $isContractor;

        return $this;
    }

    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * The totaled cost for all expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     */
    public function setTotalAmount(?float $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     */
    public function getBillableAmount(): ?float
    {
        return $this->billableAmount;
    }

    /**
     * The totaled cost for billable expenses for the given timeframe, subject (client, project, expense category, or user), and currency.
     */
    public function setBillableAmount(?float $billableAmount): self
    {
        $this->initialized['billableAmount'] = true;
        $this->billableAmount = $billableAmount;

        return $this;
    }

    /**
     * The currency code associated with the expenses for this result.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with the expenses for this result.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}

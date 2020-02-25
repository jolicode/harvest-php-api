<?php

namespace JoliCode\Harvest\Api\Model;

class ProjectBudgetReportResult
{
    /**
     * The ID of the client associated with this project.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the client associated with this project.
     *
     * @var string|null
     */
    protected $clientName;
    /**
     * The ID of the project.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the project.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * Whether the budget is reset every month.
     *
     * @var bool|null
     */
    protected $budgetIsMonthly;
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @var string|null
     */
    protected $budgetBy;
    /**
     * Whether the project is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float|null
     */
    protected $budget;
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float|null
     */
    protected $budgetSpent;
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float|null
     */
    protected $budgetRemaining;
    /**
     * The ID of the client associated with this project.
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with this project.
     *
     * @param int|null $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the client associated with this project.
     *
     * @return string|null
     */
    public function getClientName() : ?string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with this project.
     *
     * @param string|null $clientName
     *
     * @return self
     */
    public function setClientName(?string $clientName) : self
    {
        $this->clientName = $clientName;
        return $this;
    }
    /**
     * The ID of the project.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project.
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
     * The name of the project.
     *
     * @return string|null
     */
    public function getProjectName() : ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project.
     *
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * Whether the budget is reset every month.
     *
     * @return bool|null
     */
    public function getBudgetIsMonthly() : ?bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * Whether the budget is reset every month.
     *
     * @param bool|null $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(?bool $budgetIsMonthly) : self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;
        return $this;
    }
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @return string|null
     */
    public function getBudgetBy() : ?string
    {
        return $this->budgetBy;
    }
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @param string|null $budgetBy
     *
     * @return self
     */
    public function setBudgetBy(?string $budgetBy) : self
    {
        $this->budgetBy = $budgetBy;
        return $this;
    }
    /**
     * Whether the project is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the project is active or archived.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float|null
     */
    public function getBudget() : ?float
    {
        return $this->budget;
    }
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float|null $budget
     *
     * @return self
     */
    public function setBudget(?float $budget) : self
    {
        $this->budget = $budget;
        return $this;
    }
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float|null
     */
    public function getBudgetSpent() : ?float
    {
        return $this->budgetSpent;
    }
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float|null $budgetSpent
     *
     * @return self
     */
    public function setBudgetSpent(?float $budgetSpent) : self
    {
        $this->budgetSpent = $budgetSpent;
        return $this;
    }
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float|null
     */
    public function getBudgetRemaining() : ?float
    {
        return $this->budgetRemaining;
    }
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float|null $budgetRemaining
     *
     * @return self
     */
    public function setBudgetRemaining(?float $budgetRemaining) : self
    {
        $this->budgetRemaining = $budgetRemaining;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class ProjectsProjectIdTaskAssignmentsTaskAssignmentIdPatchBody
{
    /**
     * Whether the task assignment is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Whether the task assignment is billable or not.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * Rate used when the project’s bill_by is Tasks.
     *
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * Budget used when the project’s budget_by is task or task_fees.
     *
     * @var float|null
     */
    protected $budget;
    /**
     * Whether the task assignment is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the task assignment is active or archived.
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
     * Whether the task assignment is billable or not.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether the task assignment is billable or not.
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
     * Rate used when the project’s bill_by is Tasks.
     *
     * @return float|null
     */
    public function getHourlyRate() : ?float
    {
        return $this->hourlyRate;
    }
    /**
     * Rate used when the project’s bill_by is Tasks.
     *
     * @param float|null $hourlyRate
     *
     * @return self
     */
    public function setHourlyRate(?float $hourlyRate) : self
    {
        $this->hourlyRate = $hourlyRate;
        return $this;
    }
    /**
     * Budget used when the project’s budget_by is task or task_fees.
     *
     * @return float|null
     */
    public function getBudget() : ?float
    {
        return $this->budget;
    }
    /**
     * Budget used when the project’s budget_by is task or task_fees.
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
}
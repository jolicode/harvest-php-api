<?php

namespace JoliCode\Harvest\Api\Model;

class ProjectsProjectIdTaskAssignmentsPostBody
{
    /**
     * The ID of the task to associate with the project.
     *
     * @var int|null
     */
    protected $taskId;
    /**
     * Whether the task assignment is active or archived. Defaults to true.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Whether the task assignment is billable or not. Defaults to false.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * Rate used when the project’s bill_by is Tasks. Defaults to null when billing by task hourly rate, otherwise 0.
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
     * The ID of the task to associate with the project.
     *
     * @return int|null
     */
    public function getTaskId() : ?int
    {
        return $this->taskId;
    }
    /**
     * The ID of the task to associate with the project.
     *
     * @param int|null $taskId
     *
     * @return self
     */
    public function setTaskId(?int $taskId) : self
    {
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * Whether the task assignment is active or archived. Defaults to true.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the task assignment is active or archived. Defaults to true.
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
     * Whether the task assignment is billable or not. Defaults to false.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether the task assignment is billable or not. Defaults to false.
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
     * Rate used when the project’s bill_by is Tasks. Defaults to null when billing by task hourly rate, otherwise 0.
     *
     * @return float|null
     */
    public function getHourlyRate() : ?float
    {
        return $this->hourlyRate;
    }
    /**
     * Rate used when the project’s bill_by is Tasks. Defaults to null when billing by task hourly rate, otherwise 0.
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
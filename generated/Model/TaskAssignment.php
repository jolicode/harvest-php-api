<?php

namespace JoliCode\Harvest\Api\Model;

class TaskAssignment
{
    /**
     * Unique ID for the task assignment.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing the id, name, and code of the associated project.
     *
     * @var TaskAssignmentProject|null
     */
    protected $project;
    /**
     * An object containing the id and name of the associated task.
     *
     * @var TaskAssignmentTask|null
     */
    protected $task;
    /**
     * Whether the task assignment is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Whether the task assignment is billable or not.  For example: if set to true, all time tracked on this project for the associated task will be marked as billable.
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
     * Date and time the task assignment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the task assignment was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the task assignment.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the task assignment.
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
     * An object containing the id, name, and code of the associated project.
     *
     * @return TaskAssignmentProject|null
     */
    public function getProject() : ?TaskAssignmentProject
    {
        return $this->project;
    }
    /**
     * An object containing the id, name, and code of the associated project.
     *
     * @param TaskAssignmentProject|null $project
     *
     * @return self
     */
    public function setProject(?TaskAssignmentProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @return TaskAssignmentTask|null
     */
    public function getTask() : ?TaskAssignmentTask
    {
        return $this->task;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @param TaskAssignmentTask|null $task
     *
     * @return self
     */
    public function setTask(?TaskAssignmentTask $task) : self
    {
        $this->task = $task;
        return $this;
    }
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
     * Whether the task assignment is billable or not.  For example: if set to true, all time tracked on this project for the associated task will be marked as billable.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether the task assignment is billable or not.  For example: if set to true, all time tracked on this project for the associated task will be marked as billable.
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
    /**
     * Date and time the task assignment was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the task assignment was created.
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
     * Date and time the task assignment was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the task assignment was last updated.
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
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

class ProjectsProjectIdTaskAssignmentsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the task to associate with the project.
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * The ID of the task to associate with the project.
     */
    public function setTaskId(?int $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Whether the task assignment is active or archived. Defaults to true.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the task assignment is active or archived. Defaults to true.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Whether the task assignment is billable or not. Defaults to false.
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    /**
     * Whether the task assignment is billable or not. Defaults to false.
     */
    public function setBillable(?bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    /**
     * Rate used when the project’s bill_by is Tasks. Defaults to null when billing by task hourly rate, otherwise 0.
     */
    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    /**
     * Rate used when the project’s bill_by is Tasks. Defaults to null when billing by task hourly rate, otherwise 0.
     */
    public function setHourlyRate(?float $hourlyRate): self
    {
        $this->initialized['hourlyRate'] = true;
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    /**
     * Budget used when the project’s budget_by is task or task_fees.
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * Budget used when the project’s budget_by is task or task_fees.
     */
    public function setBudget(?float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }
}

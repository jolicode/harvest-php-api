<?php

namespace JoliCode\Harvest\Api\Model;

class TasksTaskIdPatchBody
{
    /**
     * The name of the task.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @var bool|null
     */
    protected $billableByDefault;
    /**
     * The default hourly rate to use for this task when it is added to a project.
     *
     * @var float|null
     */
    protected $defaultHourlyRate;
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * Whether this task is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The name of the task.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the task.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @return bool|null
     */
    public function getBillableByDefault() : ?bool
    {
        return $this->billableByDefault;
    }
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @param bool|null $billableByDefault
     *
     * @return self
     */
    public function setBillableByDefault(?bool $billableByDefault) : self
    {
        $this->billableByDefault = $billableByDefault;
        return $this;
    }
    /**
     * The default hourly rate to use for this task when it is added to a project.
     *
     * @return float|null
     */
    public function getDefaultHourlyRate() : ?float
    {
        return $this->defaultHourlyRate;
    }
    /**
     * The default hourly rate to use for this task when it is added to a project.
     *
     * @param float|null $defaultHourlyRate
     *
     * @return self
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate) : self
    {
        $this->defaultHourlyRate = $defaultHourlyRate;
        return $this;
    }
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @return bool|null
     */
    public function getIsDefault() : ?bool
    {
        return $this->isDefault;
    }
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Whether this task is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether this task is active or archived.
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
}
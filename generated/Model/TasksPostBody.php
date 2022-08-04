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

class TasksPostBody
{
    /**
     * The name of the task.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project. Defaults to true.
     *
     * @var bool|null
     */
    protected $billableByDefault;
    /**
     * The default hourly rate to use for this task when it is added to a project. Defaults to 0.
     *
     * @var float|null
     */
    protected $defaultHourlyRate;
    /**
     * Whether this task should be automatically added to future projects. Defaults to false.
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * Whether this task is active or archived. Defaults to true.
     *
     * @var bool|null
     */
    protected $isActive;

    /**
     * The name of the task.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the task.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Used in determining whether default tasks should be marked billable when creating a new project. Defaults to true.
     */
    public function getBillableByDefault(): ?bool
    {
        return $this->billableByDefault;
    }

    /**
     * Used in determining whether default tasks should be marked billable when creating a new project. Defaults to true.
     */
    public function setBillableByDefault(?bool $billableByDefault): self
    {
        $this->billableByDefault = $billableByDefault;

        return $this;
    }

    /**
     * The default hourly rate to use for this task when it is added to a project. Defaults to 0.
     */
    public function getDefaultHourlyRate(): ?float
    {
        return $this->defaultHourlyRate;
    }

    /**
     * The default hourly rate to use for this task when it is added to a project. Defaults to 0.
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate): self
    {
        $this->defaultHourlyRate = $defaultHourlyRate;

        return $this;
    }

    /**
     * Whether this task should be automatically added to future projects. Defaults to false.
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Whether this task should be automatically added to future projects. Defaults to false.
     */
    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Whether this task is active or archived. Defaults to true.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether this task is active or archived. Defaults to true.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}

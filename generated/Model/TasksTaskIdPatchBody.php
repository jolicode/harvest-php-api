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

class TasksTaskIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

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
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     */
    public function getBillableByDefault(): ?bool
    {
        return $this->billableByDefault;
    }

    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     */
    public function setBillableByDefault(?bool $billableByDefault): self
    {
        $this->initialized['billableByDefault'] = true;
        $this->billableByDefault = $billableByDefault;

        return $this;
    }

    /**
     * The default hourly rate to use for this task when it is added to a project.
     */
    public function getDefaultHourlyRate(): ?float
    {
        return $this->defaultHourlyRate;
    }

    /**
     * The default hourly rate to use for this task when it is added to a project.
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate): self
    {
        $this->initialized['defaultHourlyRate'] = true;
        $this->defaultHourlyRate = $defaultHourlyRate;

        return $this;
    }

    /**
     * Whether this task should be automatically added to future projects.
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Whether this task should be automatically added to future projects.
     */
    public function setIsDefault(?bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Whether this task is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether this task is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }
}

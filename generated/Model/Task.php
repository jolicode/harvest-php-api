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

class Task
{
    /**
     * Unique ID for the task.
     *
     * @var int|null
     */
    protected $id;
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
     * The hourly rate to use for this task when it is added to a project.
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
     * Date and time the task was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the task was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * Unique ID for the task.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the task.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
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
        $this->billableByDefault = $billableByDefault;

        return $this;
    }

    /**
     * The hourly rate to use for this task when it is added to a project.
     */
    public function getDefaultHourlyRate(): ?float
    {
        return $this->defaultHourlyRate;
    }

    /**
     * The hourly rate to use for this task when it is added to a project.
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate): self
    {
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
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Date and time the task was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the task was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the task was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the task was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

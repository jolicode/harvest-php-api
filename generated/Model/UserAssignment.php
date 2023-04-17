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

class UserAssignment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the user assignment.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing the id, name, and code of the associated project.
     *
     * @var UserAssignmentProject|null
     */
    protected $project;
    /**
     * An object containing the id and name of the associated user.
     *
     * @var UserAssignmentUser|null
     */
    protected $user;
    /**
     * Whether the user assignment is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Determines if the user has Project Manager permissions for the project.
     *
     * @var bool|null
     */
    protected $isProjectManager;
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     *
     * @var bool|null
     */
    protected $useDefaultRates;
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     *
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * Budget used when the project’s budget_by is person.
     *
     * @var float|null
     */
    protected $budget;
    /**
     * Date and time the user assignment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the user assignment was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the user assignment.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the user assignment.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * An object containing the id, name, and code of the associated project.
     */
    public function getProject(): ?UserAssignmentProject
    {
        return $this->project;
    }

    /**
     * An object containing the id, name, and code of the associated project.
     */
    public function setProject(?UserAssignmentProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * An object containing the id and name of the associated user.
     */
    public function getUser(): ?UserAssignmentUser
    {
        return $this->user;
    }

    /**
     * An object containing the id and name of the associated user.
     */
    public function setUser(?UserAssignmentUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * Whether the user assignment is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the user assignment is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Determines if the user has Project Manager permissions for the project.
     */
    public function getIsProjectManager(): ?bool
    {
        return $this->isProjectManager;
    }

    /**
     * Determines if the user has Project Manager permissions for the project.
     */
    public function setIsProjectManager(?bool $isProjectManager): self
    {
        $this->initialized['isProjectManager'] = true;
        $this->isProjectManager = $isProjectManager;

        return $this;
    }

    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     */
    public function getUseDefaultRates(): ?bool
    {
        return $this->useDefaultRates;
    }

    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     */
    public function setUseDefaultRates(?bool $useDefaultRates): self
    {
        $this->initialized['useDefaultRates'] = true;
        $this->useDefaultRates = $useDefaultRates;

        return $this;
    }

    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     */
    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     */
    public function setHourlyRate(?float $hourlyRate): self
    {
        $this->initialized['hourlyRate'] = true;
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    /**
     * Budget used when the project’s budget_by is person.
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * Budget used when the project’s budget_by is person.
     */
    public function setBudget(?float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * Date and time the user assignment was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the user assignment was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the user assignment was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the user assignment was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

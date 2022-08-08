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

class User
{
    /**
     * Unique ID for the user.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The first name of the user.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The last name of the user.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The email address of the user.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The user’s telephone number.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * The user’s timezone.
     *
     * @var string|null
     */
    protected $timezone;
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @var bool|null
     */
    protected $hasAccessToAllFutureProjects;
    /**
     * Whether the user is a contractor or an employee.
     *
     * @var bool|null
     */
    protected $isContractor;
    /**
     * Whether the user is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * The billable rate to use for this user when they are added to a project.
     *
     * @var float|null
     */
    protected $defaultHourlyRate;
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @var float|null
     */
    protected $costRate;
    /**
     * The role names assigned to this person.
     *
     * @var string[]|null
     */
    protected $roles;
    /**
     * The URL to the user’s avatar image.
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * Date and time the user was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the user was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Whether the user has Admin permissions.
     *
     * @var bool|null
     */
    protected $isAdmin;
    /**
     * Whether the user has Project Manager permissions.
     *
     * @var bool|null
     */
    protected $isProjectManager;

    /**
     * Unique ID for the user.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the user.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The first name of the user.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The first name of the user.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the user.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The last name of the user.
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The email address of the user.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email address of the user.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The user’s telephone number.
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * The user’s telephone number.
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * The user’s timezone.
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * The user’s timezone.
     */
    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Whether the user should be automatically added to future projects.
     */
    public function getHasAccessToAllFutureProjects(): ?bool
    {
        return $this->hasAccessToAllFutureProjects;
    }

    /**
     * Whether the user should be automatically added to future projects.
     */
    public function setHasAccessToAllFutureProjects(?bool $hasAccessToAllFutureProjects): self
    {
        $this->hasAccessToAllFutureProjects = $hasAccessToAllFutureProjects;

        return $this;
    }

    /**
     * Whether the user is a contractor or an employee.
     */
    public function getIsContractor(): ?bool
    {
        return $this->isContractor;
    }

    /**
     * Whether the user is a contractor or an employee.
     */
    public function setIsContractor(?bool $isContractor): self
    {
        $this->isContractor = $isContractor;

        return $this;
    }

    /**
     * Whether the user is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the user is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     */
    public function setWeeklyCapacity(?int $weeklyCapacity): self
    {
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * The billable rate to use for this user when they are added to a project.
     */
    public function getDefaultHourlyRate(): ?float
    {
        return $this->defaultHourlyRate;
    }

    /**
     * The billable rate to use for this user when they are added to a project.
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate): self
    {
        $this->defaultHourlyRate = $defaultHourlyRate;

        return $this;
    }

    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     */
    public function getCostRate(): ?float
    {
        return $this->costRate;
    }

    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     */
    public function setCostRate(?float $costRate): self
    {
        $this->costRate = $costRate;

        return $this;
    }

    /**
     * The role names assigned to this person.
     *
     * @return string[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * The role names assigned to this person.
     *
     * @param string[]|null $roles
     */
    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * The URL to the user’s avatar image.
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * The URL to the user’s avatar image.
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Date and time the user was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the user was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the user was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the user was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Whether the user has Admin permissions.
     */
    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    /**
     * Whether the user has Admin permissions.
     */
    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Whether the user has Project Manager permissions.
     */
    public function getIsProjectManager(): ?bool
    {
        return $this->isProjectManager;
    }

    /**
     * Whether the user has Project Manager permissions.
     */
    public function setIsProjectManager(?bool $isProjectManager): self
    {
        $this->isProjectManager = $isProjectManager;

        return $this;
    }
}

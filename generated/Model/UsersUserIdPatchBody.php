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

class UsersUserIdPatchBody
{
    /**
     * The first name of the user. Can’t be updated if the user is inactive.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The last name of the user. Can’t be updated if the user is inactive.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The email address of the user. Can’t be updated if the user is inactive.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
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
     * The number of hours per week this person is available to work in seconds.
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
     * The first name of the user. Can’t be updated if the user is inactive.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The first name of the user. Can’t be updated if the user is inactive.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the user. Can’t be updated if the user is inactive.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The last name of the user. Can’t be updated if the user is inactive.
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The email address of the user. Can’t be updated if the user is inactive.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email address of the user. Can’t be updated if the user is inactive.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
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
     * The number of hours per week this person is available to work in seconds.
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * The number of hours per week this person is available to work in seconds.
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
}

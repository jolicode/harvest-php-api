<?php

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
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * The first name of the user. Can’t be updated if the user is inactive.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The last name of the user. Can’t be updated if the user is inactive.
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * The last name of the user. Can’t be updated if the user is inactive.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The email address of the user. Can’t be updated if the user is inactive.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The email address of the user. Can’t be updated if the user is inactive.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
     *
     * @return string|null
     */
    public function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
     *
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @return bool|null
     */
    public function getHasAccessToAllFutureProjects() : ?bool
    {
        return $this->hasAccessToAllFutureProjects;
    }
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @param bool|null $hasAccessToAllFutureProjects
     *
     * @return self
     */
    public function setHasAccessToAllFutureProjects(?bool $hasAccessToAllFutureProjects) : self
    {
        $this->hasAccessToAllFutureProjects = $hasAccessToAllFutureProjects;
        return $this;
    }
    /**
     * Whether the user is a contractor or an employee.
     *
     * @return bool|null
     */
    public function getIsContractor() : ?bool
    {
        return $this->isContractor;
    }
    /**
     * Whether the user is a contractor or an employee.
     *
     * @param bool|null $isContractor
     *
     * @return self
     */
    public function setIsContractor(?bool $isContractor) : self
    {
        $this->isContractor = $isContractor;
        return $this;
    }
    /**
     * Whether the user is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the user is active or archived.
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
     * The number of hours per week this person is available to work in seconds.
     *
     * @return int|null
     */
    public function getWeeklyCapacity() : ?int
    {
        return $this->weeklyCapacity;
    }
    /**
     * The number of hours per week this person is available to work in seconds.
     *
     * @param int|null $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(?int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * The billable rate to use for this user when they are added to a project.
     *
     * @return float|null
     */
    public function getDefaultHourlyRate() : ?float
    {
        return $this->defaultHourlyRate;
    }
    /**
     * The billable rate to use for this user when they are added to a project.
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
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @return float|null
     */
    public function getCostRate() : ?float
    {
        return $this->costRate;
    }
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @param float|null $costRate
     *
     * @return self
     */
    public function setCostRate(?float $costRate) : self
    {
        $this->costRate = $costRate;
        return $this;
    }
    /**
     * The role names assigned to this person.
     *
     * @return string[]|null
     */
    public function getRoles() : ?array
    {
        return $this->roles;
    }
    /**
     * The role names assigned to this person.
     *
     * @param string[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}
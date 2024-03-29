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

class UsersPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * The user’s timezone. Defaults to the company’s timezone. See a list of supported time zones.
     *
     * @var string|null
     */
    protected $timezone;
    /**
     * Whether the user should be automatically added to future projects. Defaults to false.
     *
     * @var bool|null
     */
    protected $hasAccessToAllFutureProjects;
    /**
     * Whether the user is a contractor or an employee. Defaults to false.
     *
     * @var bool|null
     */
    protected $isContractor;
    /**
     * Whether the user is active or archived. Defaults to true.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The number of hours per week this person is available to work in seconds. Defaults to 126000 seconds (35 hours).
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * The billable rate to use for this user when they are added to a project. Defaults to 0.
     *
     * @var float|null
     */
    protected $defaultHourlyRate;
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount. Defaults to 0.
     *
     * @var float|null
     */
    protected $costRate;
    /**
     * Descriptive names of the business roles assigned to this person. They can be used for filtering reports, and have no effect in their permissions in Harvest.
     *
     * @var list<string>|null
     */
    protected $roles;
    /**
     * Access role(s) that determine the user’s permissions in Harvest. Possible values: administrator, manager or member. Users with the manager role can additionally be granted one or more of these roles: project_creator, billable_rates_manager, managed_projects_invoice_drafter, managed_projects_invoice_manager, client_and_task_manager, time_and_expenses_manager, estimates_manager.
     *
     * @var list<string>|null
     */
    protected $accessRoles;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
        $this->initialized['firstName'] = true;
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
        $this->initialized['lastName'] = true;
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
        $this->initialized['email'] = true;
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
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Whether the user should be automatically added to future projects. Defaults to false.
     */
    public function getHasAccessToAllFutureProjects(): ?bool
    {
        return $this->hasAccessToAllFutureProjects;
    }

    /**
     * Whether the user should be automatically added to future projects. Defaults to false.
     */
    public function setHasAccessToAllFutureProjects(?bool $hasAccessToAllFutureProjects): self
    {
        $this->initialized['hasAccessToAllFutureProjects'] = true;
        $this->hasAccessToAllFutureProjects = $hasAccessToAllFutureProjects;

        return $this;
    }

    /**
     * Whether the user is a contractor or an employee. Defaults to false.
     */
    public function getIsContractor(): ?bool
    {
        return $this->isContractor;
    }

    /**
     * Whether the user is a contractor or an employee. Defaults to false.
     */
    public function setIsContractor(?bool $isContractor): self
    {
        $this->initialized['isContractor'] = true;
        $this->isContractor = $isContractor;

        return $this;
    }

    /**
     * Whether the user is active or archived. Defaults to true.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the user is active or archived. Defaults to true.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The number of hours per week this person is available to work in seconds. Defaults to 126000 seconds (35 hours).
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * The number of hours per week this person is available to work in seconds. Defaults to 126000 seconds (35 hours).
     */
    public function setWeeklyCapacity(?int $weeklyCapacity): self
    {
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * The billable rate to use for this user when they are added to a project. Defaults to 0.
     */
    public function getDefaultHourlyRate(): ?float
    {
        return $this->defaultHourlyRate;
    }

    /**
     * The billable rate to use for this user when they are added to a project. Defaults to 0.
     */
    public function setDefaultHourlyRate(?float $defaultHourlyRate): self
    {
        $this->initialized['defaultHourlyRate'] = true;
        $this->defaultHourlyRate = $defaultHourlyRate;

        return $this;
    }

    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount. Defaults to 0.
     */
    public function getCostRate(): ?float
    {
        return $this->costRate;
    }

    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount. Defaults to 0.
     */
    public function setCostRate(?float $costRate): self
    {
        $this->initialized['costRate'] = true;
        $this->costRate = $costRate;

        return $this;
    }

    /**
     * Descriptive names of the business roles assigned to this person. They can be used for filtering reports, and have no effect in their permissions in Harvest.
     *
     * @return list<string>|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * Descriptive names of the business roles assigned to this person. They can be used for filtering reports, and have no effect in their permissions in Harvest.
     *
     * @param list<string>|null $roles
     */
    public function setRoles(?array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    /**
     * Access role(s) that determine the user’s permissions in Harvest. Possible values: administrator, manager or member. Users with the manager role can additionally be granted one or more of these roles: project_creator, billable_rates_manager, managed_projects_invoice_drafter, managed_projects_invoice_manager, client_and_task_manager, time_and_expenses_manager, estimates_manager.
     *
     * @return list<string>|null
     */
    public function getAccessRoles(): ?array
    {
        return $this->accessRoles;
    }

    /**
     * Access role(s) that determine the user’s permissions in Harvest. Possible values: administrator, manager or member. Users with the manager role can additionally be granted one or more of these roles: project_creator, billable_rates_manager, managed_projects_invoice_drafter, managed_projects_invoice_manager, client_and_task_manager, time_and_expenses_manager, estimates_manager.
     *
     * @param list<string>|null $accessRoles
     */
    public function setAccessRoles(?array $accessRoles): self
    {
        $this->initialized['accessRoles'] = true;
        $this->accessRoles = $accessRoles;

        return $this;
    }
}

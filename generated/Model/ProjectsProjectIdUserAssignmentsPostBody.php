<?php

namespace JoliCode\Harvest\Api\Model;

class ProjectsProjectIdUserAssignmentsPostBody
{
    /**
     * The ID of the user to associate with the project.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * Whether the user assignment is active or archived. Defaults to true.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Determines if the user has Project Manager permissions for the project. Defaults to false for users with Regular User permissions and true for those with Project Managers or Administrator permissions.
     *
     * @var bool|null
     */
    protected $isProjectManager;
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment. Defaults to true.
     *
     * @var bool|null
     */
    protected $useDefaultRates;
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false. Defaults to 0.
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
     * The ID of the user to associate with the project.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user to associate with the project.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * Whether the user assignment is active or archived. Defaults to true.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the user assignment is active or archived. Defaults to true.
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
     * Determines if the user has Project Manager permissions for the project. Defaults to false for users with Regular User permissions and true for those with Project Managers or Administrator permissions.
     *
     * @return bool|null
     */
    public function getIsProjectManager() : ?bool
    {
        return $this->isProjectManager;
    }
    /**
     * Determines if the user has Project Manager permissions for the project. Defaults to false for users with Regular User permissions and true for those with Project Managers or Administrator permissions.
     *
     * @param bool|null $isProjectManager
     *
     * @return self
     */
    public function setIsProjectManager(?bool $isProjectManager) : self
    {
        $this->isProjectManager = $isProjectManager;
        return $this;
    }
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment. Defaults to true.
     *
     * @return bool|null
     */
    public function getUseDefaultRates() : ?bool
    {
        return $this->useDefaultRates;
    }
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment. Defaults to true.
     *
     * @param bool|null $useDefaultRates
     *
     * @return self
     */
    public function setUseDefaultRates(?bool $useDefaultRates) : self
    {
        $this->useDefaultRates = $useDefaultRates;
        return $this;
    }
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false. Defaults to 0.
     *
     * @return float|null
     */
    public function getHourlyRate() : ?float
    {
        return $this->hourlyRate;
    }
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false. Defaults to 0.
     *
     * @param float|null $hourlyRate
     *
     * @return self
     */
    public function setHourlyRate(?float $hourlyRate) : self
    {
        $this->hourlyRate = $hourlyRate;
        return $this;
    }
    /**
     * Budget used when the project’s budget_by is person.
     *
     * @return float|null
     */
    public function getBudget() : ?float
    {
        return $this->budget;
    }
    /**
     * Budget used when the project’s budget_by is person.
     *
     * @param float|null $budget
     *
     * @return self
     */
    public function setBudget(?float $budget) : self
    {
        $this->budget = $budget;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class ProjectAssignment
{
    /**
     * Unique ID for the project assignment.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Whether the project assignment is active or archived.
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
     * Date and time the project assignment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the project assignment was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * An object containing the assigned project id, name, and code.
     *
     * @var ProjectAssignmentProject|null
     */
    protected $project;
    /**
     * An object containing the project’s client id and name.
     *
     * @var ProjectAssignmentClient|null
     */
    protected $client;
    /**
     * Array of task assignment objects associated with the project.
     *
     * @var TaskAssignment[]|null
     */
    protected $taskAssignments;
    /**
     * Unique ID for the project assignment.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the project assignment.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Whether the project assignment is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the project assignment is active or archived.
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
     * Determines if the user has Project Manager permissions for the project.
     *
     * @return bool|null
     */
    public function getIsProjectManager() : ?bool
    {
        return $this->isProjectManager;
    }
    /**
     * Determines if the user has Project Manager permissions for the project.
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
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     *
     * @return bool|null
     */
    public function getUseDefaultRates() : ?bool
    {
        return $this->useDefaultRates;
    }
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
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
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     *
     * @return float|null
     */
    public function getHourlyRate() : ?float
    {
        return $this->hourlyRate;
    }
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
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
    /**
     * Date and time the project assignment was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the project assignment was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the project assignment was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the project assignment was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * An object containing the assigned project id, name, and code.
     *
     * @return ProjectAssignmentProject|null
     */
    public function getProject() : ?ProjectAssignmentProject
    {
        return $this->project;
    }
    /**
     * An object containing the assigned project id, name, and code.
     *
     * @param ProjectAssignmentProject|null $project
     *
     * @return self
     */
    public function setProject(?ProjectAssignmentProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the project’s client id and name.
     *
     * @return ProjectAssignmentClient|null
     */
    public function getClient() : ?ProjectAssignmentClient
    {
        return $this->client;
    }
    /**
     * An object containing the project’s client id and name.
     *
     * @param ProjectAssignmentClient|null $client
     *
     * @return self
     */
    public function setClient(?ProjectAssignmentClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * Array of task assignment objects associated with the project.
     *
     * @return TaskAssignment[]|null
     */
    public function getTaskAssignments() : ?array
    {
        return $this->taskAssignments;
    }
    /**
     * Array of task assignment objects associated with the project.
     *
     * @param TaskAssignment[]|null $taskAssignments
     *
     * @return self
     */
    public function setTaskAssignments(?array $taskAssignments) : self
    {
        $this->taskAssignments = $taskAssignments;
        return $this;
    }
}
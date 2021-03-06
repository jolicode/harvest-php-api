<?php

namespace JoliCode\Harvest\Api\Model;

class Project
{
    /**
     * Unique ID for the project.
     *
     * @var int|null
     */
    protected $id;
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @var ProjectClient|null
     */
    protected $client;
    /**
     * Unique name for the project.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The code associated with the project.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Whether the project is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Whether the project is billable or not.
     *
     * @var bool|null
     */
    protected $isBillable;
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @var bool|null
     */
    protected $isFixedFee;
    /**
     * The method by which the project is invoiced.
     *
     * @var string|null
     */
    protected $billBy;
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * The budget in hours for the project when budgeting by time.
     *
     * @var float|null
     */
    protected $budget;
    /**
     * The method by which the project is budgeted.
     *
     * @var string|null
     */
    protected $budgetBy;
    /**
     * Option to have the budget reset every month.
     *
     * @var bool|null
     */
    protected $budgetIsMonthly;
    /**
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @var bool|null
     */
    protected $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts.
     *
     * @var float|null
     */
    protected $overBudgetNotificationPercentage;
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @var \DateTime|null
     */
    protected $overBudgetNotificationDate;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     *
     * @var bool|null
     */
    protected $showBudgetToAll;
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @var float|null
     */
    protected $costBudget;
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     *
     * @var bool|null
     */
    protected $costBudgetIncludeExpenses;
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @var float|null
     */
    protected $fee;
    /**
     * Project notes.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * Date the project was started.
     *
     * @var \DateTime|null
     */
    protected $startsOn;
    /**
     * Date the project will end.
     *
     * @var \DateTime|null
     */
    protected $endsOn;
    /**
     * Date and time the project was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the project was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the project.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the project.
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
     * An object containing the project’s client id, name, and currency.
     *
     * @return ProjectClient|null
     */
    public function getClient() : ?ProjectClient
    {
        return $this->client;
    }
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @param ProjectClient|null $client
     *
     * @return self
     */
    public function setClient(?ProjectClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * Unique name for the project.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Unique name for the project.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The code associated with the project.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The code associated with the project.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Whether the project is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the project is active or archived.
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
     * Whether the project is billable or not.
     *
     * @return bool|null
     */
    public function getIsBillable() : ?bool
    {
        return $this->isBillable;
    }
    /**
     * Whether the project is billable or not.
     *
     * @param bool|null $isBillable
     *
     * @return self
     */
    public function setIsBillable(?bool $isBillable) : self
    {
        $this->isBillable = $isBillable;
        return $this;
    }
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @return bool|null
     */
    public function getIsFixedFee() : ?bool
    {
        return $this->isFixedFee;
    }
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @param bool|null $isFixedFee
     *
     * @return self
     */
    public function setIsFixedFee(?bool $isFixedFee) : self
    {
        $this->isFixedFee = $isFixedFee;
        return $this;
    }
    /**
     * The method by which the project is invoiced.
     *
     * @return string|null
     */
    public function getBillBy() : ?string
    {
        return $this->billBy;
    }
    /**
     * The method by which the project is invoiced.
     *
     * @param string|null $billBy
     *
     * @return self
     */
    public function setBillBy(?string $billBy) : self
    {
        $this->billBy = $billBy;
        return $this;
    }
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @return float|null
     */
    public function getHourlyRate() : ?float
    {
        return $this->hourlyRate;
    }
    /**
     * Rate for projects billed by Project Hourly Rate.
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
     * The budget in hours for the project when budgeting by time.
     *
     * @return float|null
     */
    public function getBudget() : ?float
    {
        return $this->budget;
    }
    /**
     * The budget in hours for the project when budgeting by time.
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
     * The method by which the project is budgeted.
     *
     * @return string|null
     */
    public function getBudgetBy() : ?string
    {
        return $this->budgetBy;
    }
    /**
     * The method by which the project is budgeted.
     *
     * @param string|null $budgetBy
     *
     * @return self
     */
    public function setBudgetBy(?string $budgetBy) : self
    {
        $this->budgetBy = $budgetBy;
        return $this;
    }
    /**
     * Option to have the budget reset every month.
     *
     * @return bool|null
     */
    public function getBudgetIsMonthly() : ?bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * Option to have the budget reset every month.
     *
     * @param bool|null $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(?bool $budgetIsMonthly) : self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;
        return $this;
    }
    /**
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @return bool|null
     */
    public function getNotifyWhenOverBudget() : ?bool
    {
        return $this->notifyWhenOverBudget;
    }
    /**
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @param bool|null $notifyWhenOverBudget
     *
     * @return self
     */
    public function setNotifyWhenOverBudget(?bool $notifyWhenOverBudget) : self
    {
        $this->notifyWhenOverBudget = $notifyWhenOverBudget;
        return $this;
    }
    /**
     * Percentage value used to trigger over budget email alerts.
     *
     * @return float|null
     */
    public function getOverBudgetNotificationPercentage() : ?float
    {
        return $this->overBudgetNotificationPercentage;
    }
    /**
     * Percentage value used to trigger over budget email alerts.
     *
     * @param float|null $overBudgetNotificationPercentage
     *
     * @return self
     */
    public function setOverBudgetNotificationPercentage(?float $overBudgetNotificationPercentage) : self
    {
        $this->overBudgetNotificationPercentage = $overBudgetNotificationPercentage;
        return $this;
    }
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @return \DateTime|null
     */
    public function getOverBudgetNotificationDate() : ?\DateTime
    {
        return $this->overBudgetNotificationDate;
    }
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @param \DateTime|null $overBudgetNotificationDate
     *
     * @return self
     */
    public function setOverBudgetNotificationDate(?\DateTime $overBudgetNotificationDate) : self
    {
        $this->overBudgetNotificationDate = $overBudgetNotificationDate;
        return $this;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     *
     * @return bool|null
     */
    public function getShowBudgetToAll() : ?bool
    {
        return $this->showBudgetToAll;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     *
     * @param bool|null $showBudgetToAll
     *
     * @return self
     */
    public function setShowBudgetToAll(?bool $showBudgetToAll) : self
    {
        $this->showBudgetToAll = $showBudgetToAll;
        return $this;
    }
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @return float|null
     */
    public function getCostBudget() : ?float
    {
        return $this->costBudget;
    }
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @param float|null $costBudget
     *
     * @return self
     */
    public function setCostBudget(?float $costBudget) : self
    {
        $this->costBudget = $costBudget;
        return $this;
    }
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     *
     * @return bool|null
     */
    public function getCostBudgetIncludeExpenses() : ?bool
    {
        return $this->costBudgetIncludeExpenses;
    }
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     *
     * @param bool|null $costBudgetIncludeExpenses
     *
     * @return self
     */
    public function setCostBudgetIncludeExpenses(?bool $costBudgetIncludeExpenses) : self
    {
        $this->costBudgetIncludeExpenses = $costBudgetIncludeExpenses;
        return $this;
    }
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @return float|null
     */
    public function getFee() : ?float
    {
        return $this->fee;
    }
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @param float|null $fee
     *
     * @return self
     */
    public function setFee(?float $fee) : self
    {
        $this->fee = $fee;
        return $this;
    }
    /**
     * Project notes.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Project notes.
     *
     * @param string|null $notes
     *
     * @return self
     */
    public function setNotes(?string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Date the project was started.
     *
     * @return \DateTime|null
     */
    public function getStartsOn() : ?\DateTime
    {
        return $this->startsOn;
    }
    /**
     * Date the project was started.
     *
     * @param \DateTime|null $startsOn
     *
     * @return self
     */
    public function setStartsOn(?\DateTime $startsOn) : self
    {
        $this->startsOn = $startsOn;
        return $this;
    }
    /**
     * Date the project will end.
     *
     * @return \DateTime|null
     */
    public function getEndsOn() : ?\DateTime
    {
        return $this->endsOn;
    }
    /**
     * Date the project will end.
     *
     * @param \DateTime|null $endsOn
     *
     * @return self
     */
    public function setEndsOn(?\DateTime $endsOn) : self
    {
        $this->endsOn = $endsOn;
        return $this;
    }
    /**
     * Date and time the project was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the project was created.
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
     * Date and time the project was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the project was last updated.
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
}
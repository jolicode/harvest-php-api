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

class Project extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * The budget in hours for the project when budgeting by time.
     *
     * @var float|null
     */
    protected $budget;
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the project.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the project.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * An object containing the project’s client id, name, and currency.
     */
    public function getClient(): ?ProjectClient
    {
        return $this->client;
    }

    /**
     * An object containing the project’s client id, name, and currency.
     */
    public function setClient(?ProjectClient $client): self
    {
        $this->initialized['client'] = true;
        $this->client = $client;

        return $this;
    }

    /**
     * Unique name for the project.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Unique name for the project.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The code associated with the project.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The code associated with the project.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Whether the project is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the project is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Whether the project is billable or not.
     */
    public function getIsBillable(): ?bool
    {
        return $this->isBillable;
    }

    /**
     * Whether the project is billable or not.
     */
    public function setIsBillable(?bool $isBillable): self
    {
        $this->initialized['isBillable'] = true;
        $this->isBillable = $isBillable;

        return $this;
    }

    /**
     * Whether the project is a fixed-fee project or not.
     */
    public function getIsFixedFee(): ?bool
    {
        return $this->isFixedFee;
    }

    /**
     * Whether the project is a fixed-fee project or not.
     */
    public function setIsFixedFee(?bool $isFixedFee): self
    {
        $this->initialized['isFixedFee'] = true;
        $this->isFixedFee = $isFixedFee;

        return $this;
    }

    /**
     * The method by which the project is invoiced.
     */
    public function getBillBy(): ?string
    {
        return $this->billBy;
    }

    /**
     * The method by which the project is invoiced.
     */
    public function setBillBy(?string $billBy): self
    {
        $this->initialized['billBy'] = true;
        $this->billBy = $billBy;

        return $this;
    }

    /**
     * Rate for projects billed by Project Hourly Rate.
     */
    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    /**
     * Rate for projects billed by Project Hourly Rate.
     */
    public function setHourlyRate(?float $hourlyRate): self
    {
        $this->initialized['hourlyRate'] = true;
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    /**
     * The method by which the project is budgeted.
     */
    public function getBudgetBy(): ?string
    {
        return $this->budgetBy;
    }

    /**
     * The method by which the project is budgeted.
     */
    public function setBudgetBy(?string $budgetBy): self
    {
        $this->initialized['budgetBy'] = true;
        $this->budgetBy = $budgetBy;

        return $this;
    }

    /**
     * Option to have the budget reset every month.
     */
    public function getBudgetIsMonthly(): ?bool
    {
        return $this->budgetIsMonthly;
    }

    /**
     * Option to have the budget reset every month.
     */
    public function setBudgetIsMonthly(?bool $budgetIsMonthly): self
    {
        $this->initialized['budgetIsMonthly'] = true;
        $this->budgetIsMonthly = $budgetIsMonthly;

        return $this;
    }

    /**
     * The budget in hours for the project when budgeting by time.
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * The budget in hours for the project when budgeting by time.
     */
    public function setBudget(?float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * The monetary budget for the project when budgeting by money.
     */
    public function getCostBudget(): ?float
    {
        return $this->costBudget;
    }

    /**
     * The monetary budget for the project when budgeting by money.
     */
    public function setCostBudget(?float $costBudget): self
    {
        $this->initialized['costBudget'] = true;
        $this->costBudget = $costBudget;

        return $this;
    }

    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     */
    public function getCostBudgetIncludeExpenses(): ?bool
    {
        return $this->costBudgetIncludeExpenses;
    }

    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     */
    public function setCostBudgetIncludeExpenses(?bool $costBudgetIncludeExpenses): self
    {
        $this->initialized['costBudgetIncludeExpenses'] = true;
        $this->costBudgetIncludeExpenses = $costBudgetIncludeExpenses;

        return $this;
    }

    /**
     * Whether Project Managers should be notified when the project goes over budget.
     */
    public function getNotifyWhenOverBudget(): ?bool
    {
        return $this->notifyWhenOverBudget;
    }

    /**
     * Whether Project Managers should be notified when the project goes over budget.
     */
    public function setNotifyWhenOverBudget(?bool $notifyWhenOverBudget): self
    {
        $this->initialized['notifyWhenOverBudget'] = true;
        $this->notifyWhenOverBudget = $notifyWhenOverBudget;

        return $this;
    }

    /**
     * Percentage value used to trigger over budget email alerts.
     */
    public function getOverBudgetNotificationPercentage(): ?float
    {
        return $this->overBudgetNotificationPercentage;
    }

    /**
     * Percentage value used to trigger over budget email alerts.
     */
    public function setOverBudgetNotificationPercentage(?float $overBudgetNotificationPercentage): self
    {
        $this->initialized['overBudgetNotificationPercentage'] = true;
        $this->overBudgetNotificationPercentage = $overBudgetNotificationPercentage;

        return $this;
    }

    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     */
    public function getOverBudgetNotificationDate(): ?\DateTime
    {
        return $this->overBudgetNotificationDate;
    }

    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     */
    public function setOverBudgetNotificationDate(?\DateTime $overBudgetNotificationDate): self
    {
        $this->initialized['overBudgetNotificationDate'] = true;
        $this->overBudgetNotificationDate = $overBudgetNotificationDate;

        return $this;
    }

    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     */
    public function getShowBudgetToAll(): ?bool
    {
        return $this->showBudgetToAll;
    }

    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     */
    public function setShowBudgetToAll(?bool $showBudgetToAll): self
    {
        $this->initialized['showBudgetToAll'] = true;
        $this->showBudgetToAll = $showBudgetToAll;

        return $this;
    }

    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     */
    public function getFee(): ?float
    {
        return $this->fee;
    }

    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     */
    public function setFee(?float $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;

        return $this;
    }

    /**
     * Project notes.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Project notes.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * Date the project was started.
     */
    public function getStartsOn(): ?\DateTime
    {
        return $this->startsOn;
    }

    /**
     * Date the project was started.
     */
    public function setStartsOn(?\DateTime $startsOn): self
    {
        $this->initialized['startsOn'] = true;
        $this->startsOn = $startsOn;

        return $this;
    }

    /**
     * Date the project will end.
     */
    public function getEndsOn(): ?\DateTime
    {
        return $this->endsOn;
    }

    /**
     * Date the project will end.
     */
    public function setEndsOn(?\DateTime $endsOn): self
    {
        $this->initialized['endsOn'] = true;
        $this->endsOn = $endsOn;

        return $this;
    }

    /**
     * Date and time the project was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the project was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the project was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the project was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

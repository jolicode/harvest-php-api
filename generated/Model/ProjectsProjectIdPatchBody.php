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

class ProjectsProjectIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the client to associate this project with.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the project.
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
     * Whether the project is active or archived. Defaults to true.
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
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
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
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @var string|null
     */
    protected $budgetBy;
    /**
     * Option to have the budget reset every month. Defaults to false.
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
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     *
     * @var bool|null
     */
    protected $costBudgetIncludeExpenses;
    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     *
     * @var bool|null
     */
    protected $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     *
     * @var float|null
     */
    protected $overBudgetNotificationPercentage;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the client to associate this project with.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client to associate this project with.
     */
    public function setClientId(?int $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The name of the project.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the project.
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
     * Whether the project is active or archived. Defaults to true.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the project is active or archived. Defaults to true.
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
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
     */
    public function getBillBy(): ?string
    {
        return $this->billBy;
    }

    /**
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
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
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     */
    public function getBudgetBy(): ?string
    {
        return $this->budgetBy;
    }

    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     */
    public function setBudgetBy(?string $budgetBy): self
    {
        $this->initialized['budgetBy'] = true;
        $this->budgetBy = $budgetBy;

        return $this;
    }

    /**
     * Option to have the budget reset every month. Defaults to false.
     */
    public function getBudgetIsMonthly(): ?bool
    {
        return $this->budgetIsMonthly;
    }

    /**
     * Option to have the budget reset every month. Defaults to false.
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
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     */
    public function getCostBudgetIncludeExpenses(): ?bool
    {
        return $this->costBudgetIncludeExpenses;
    }

    /**
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     */
    public function setCostBudgetIncludeExpenses(?bool $costBudgetIncludeExpenses): self
    {
        $this->initialized['costBudgetIncludeExpenses'] = true;
        $this->costBudgetIncludeExpenses = $costBudgetIncludeExpenses;

        return $this;
    }

    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     */
    public function getNotifyWhenOverBudget(): ?bool
    {
        return $this->notifyWhenOverBudget;
    }

    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     */
    public function setNotifyWhenOverBudget(?bool $notifyWhenOverBudget): self
    {
        $this->initialized['notifyWhenOverBudget'] = true;
        $this->notifyWhenOverBudget = $notifyWhenOverBudget;

        return $this;
    }

    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     */
    public function getOverBudgetNotificationPercentage(): ?float
    {
        return $this->overBudgetNotificationPercentage;
    }

    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     */
    public function setOverBudgetNotificationPercentage(?float $overBudgetNotificationPercentage): self
    {
        $this->initialized['overBudgetNotificationPercentage'] = true;
        $this->overBudgetNotificationPercentage = $overBudgetNotificationPercentage;

        return $this;
    }

    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
     */
    public function getShowBudgetToAll(): ?bool
    {
        return $this->showBudgetToAll;
    }

    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
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
}

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

class TimeEntry
{
    /**
     * Unique ID for the time entry.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Date of the time entry.
     *
     * @var \DateTime|null
     */
    protected $spentDate;
    /**
     * An object containing the id and name of the associated user.
     *
     * @var TimeEntryUser|null
     */
    protected $user;
    /**
     * @var UserAssignment
     */
    protected $userAssignment;
    /**
     * An object containing the id and name of the associated client.
     *
     * @var TimeEntryClient|null
     */
    protected $client;
    /**
     * An object containing the id and name of the associated project.
     *
     * @var TimeEntryProject|null
     */
    protected $project;
    /**
     * An object containing the id and name of the associated task.
     *
     * @var TimeEntryTask|null
     */
    protected $task;
    /**
     * @var TaskAssignment
     */
    protected $taskAssignment;
    /**
     * An object containing the id, group_id, account_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @var TimeEntryExternalReference|null
     */
    protected $externalReference;
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @var TimeEntryInvoice|null
     */
    protected $invoice;
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @var float|null
     */
    protected $hours;
    /**
     * Number of (decimal time) hours already tracked in this time entry, before the timer was last started.
     *
     * @var float|null
     */
    protected $hoursWithoutTimer;
    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     *
     * @var float|null
     */
    protected $roundedHours;
    /**
     * Notes attached to the time entry.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * Whether or not the time entry has been locked.
     *
     * @var bool|null
     */
    protected $isLocked;
    /**
     * Why the time entry has been locked.
     *
     * @var string|null
     */
    protected $lockedReason;
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @var bool|null
     */
    protected $isClosed;
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @var bool|null
     */
    protected $isBilled;
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @var \DateTime|null
     */
    protected $timerStartedAt;
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @var string|null
     */
    protected $startedTime;
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @var string|null
     */
    protected $endedTime;
    /**
     * Whether or not the time entry is currently running.
     *
     * @var bool|null
     */
    protected $isRunning;
    /**
     * Whether or not the time entry is billable.
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @var bool|null
     */
    protected $budgeted;
    /**
     * The billable rate for the time entry.
     *
     * @var float|null
     */
    protected $billableRate;
    /**
     * The cost rate for the time entry.
     *
     * @var float|null
     */
    protected $costRate;
    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * Unique ID for the time entry.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the time entry.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Date of the time entry.
     */
    public function getSpentDate(): ?\DateTime
    {
        return $this->spentDate;
    }

    /**
     * Date of the time entry.
     */
    public function setSpentDate(?\DateTime $spentDate): self
    {
        $this->spentDate = $spentDate;

        return $this;
    }

    /**
     * An object containing the id and name of the associated user.
     */
    public function getUser(): ?TimeEntryUser
    {
        return $this->user;
    }

    /**
     * An object containing the id and name of the associated user.
     */
    public function setUser(?TimeEntryUser $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUserAssignment(): UserAssignment
    {
        return $this->userAssignment;
    }

    public function setUserAssignment(UserAssignment $userAssignment): self
    {
        $this->userAssignment = $userAssignment;

        return $this;
    }

    /**
     * An object containing the id and name of the associated client.
     */
    public function getClient(): ?TimeEntryClient
    {
        return $this->client;
    }

    /**
     * An object containing the id and name of the associated client.
     */
    public function setClient(?TimeEntryClient $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * An object containing the id and name of the associated project.
     */
    public function getProject(): ?TimeEntryProject
    {
        return $this->project;
    }

    /**
     * An object containing the id and name of the associated project.
     */
    public function setProject(?TimeEntryProject $project): self
    {
        $this->project = $project;

        return $this;
    }

    /**
     * An object containing the id and name of the associated task.
     */
    public function getTask(): ?TimeEntryTask
    {
        return $this->task;
    }

    /**
     * An object containing the id and name of the associated task.
     */
    public function setTask(?TimeEntryTask $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getTaskAssignment(): TaskAssignment
    {
        return $this->taskAssignment;
    }

    public function setTaskAssignment(TaskAssignment $taskAssignment): self
    {
        $this->taskAssignment = $taskAssignment;

        return $this;
    }

    /**
     * An object containing the id, group_id, account_id, permalink, service, and service_icon_url of the associated external reference.
     */
    public function getExternalReference(): ?TimeEntryExternalReference
    {
        return $this->externalReference;
    }

    /**
     * An object containing the id, group_id, account_id, permalink, service, and service_icon_url of the associated external reference.
     */
    public function setExternalReference(?TimeEntryExternalReference $externalReference): self
    {
        $this->externalReference = $externalReference;

        return $this;
    }

    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     */
    public function getInvoice(): ?TimeEntryInvoice
    {
        return $this->invoice;
    }

    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     */
    public function setInvoice(?TimeEntryInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Number of (decimal time) hours tracked in this time entry.
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * Number of (decimal time) hours tracked in this time entry.
     */
    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Number of (decimal time) hours already tracked in this time entry, before the timer was last started.
     */
    public function getHoursWithoutTimer(): ?float
    {
        return $this->hoursWithoutTimer;
    }

    /**
     * Number of (decimal time) hours already tracked in this time entry, before the timer was last started.
     */
    public function setHoursWithoutTimer(?float $hoursWithoutTimer): self
    {
        $this->hoursWithoutTimer = $hoursWithoutTimer;

        return $this;
    }

    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     */
    public function getRoundedHours(): ?float
    {
        return $this->roundedHours;
    }

    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     */
    public function setRoundedHours(?float $roundedHours): self
    {
        $this->roundedHours = $roundedHours;

        return $this;
    }

    /**
     * Notes attached to the time entry.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Notes attached to the time entry.
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Whether or not the time entry has been locked.
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    /**
     * Whether or not the time entry has been locked.
     */
    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * Why the time entry has been locked.
     */
    public function getLockedReason(): ?string
    {
        return $this->lockedReason;
    }

    /**
     * Why the time entry has been locked.
     */
    public function setLockedReason(?string $lockedReason): self
    {
        $this->lockedReason = $lockedReason;

        return $this;
    }

    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     */
    public function getIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     */
    public function setIsClosed(?bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Whether or not the time entry has been marked as invoiced.
     */
    public function getIsBilled(): ?bool
    {
        return $this->isBilled;
    }

    /**
     * Whether or not the time entry has been marked as invoiced.
     */
    public function setIsBilled(?bool $isBilled): self
    {
        $this->isBilled = $isBilled;

        return $this;
    }

    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     */
    public function getTimerStartedAt(): ?\DateTime
    {
        return $this->timerStartedAt;
    }

    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     */
    public function setTimerStartedAt(?\DateTime $timerStartedAt): self
    {
        $this->timerStartedAt = $timerStartedAt;

        return $this;
    }

    /**
     * Time the time entry was started (if tracking by start/end times).
     */
    public function getStartedTime(): ?string
    {
        return $this->startedTime;
    }

    /**
     * Time the time entry was started (if tracking by start/end times).
     */
    public function setStartedTime(?string $startedTime): self
    {
        $this->startedTime = $startedTime;

        return $this;
    }

    /**
     * Time the time entry was ended (if tracking by start/end times).
     */
    public function getEndedTime(): ?string
    {
        return $this->endedTime;
    }

    /**
     * Time the time entry was ended (if tracking by start/end times).
     */
    public function setEndedTime(?string $endedTime): self
    {
        $this->endedTime = $endedTime;

        return $this;
    }

    /**
     * Whether or not the time entry is currently running.
     */
    public function getIsRunning(): ?bool
    {
        return $this->isRunning;
    }

    /**
     * Whether or not the time entry is currently running.
     */
    public function setIsRunning(?bool $isRunning): self
    {
        $this->isRunning = $isRunning;

        return $this;
    }

    /**
     * Whether or not the time entry is billable.
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }

    /**
     * Whether or not the time entry is billable.
     */
    public function setBillable(?bool $billable): self
    {
        $this->billable = $billable;

        return $this;
    }

    /**
     * Whether or not the time entry counts towards the project budget.
     */
    public function getBudgeted(): ?bool
    {
        return $this->budgeted;
    }

    /**
     * Whether or not the time entry counts towards the project budget.
     */
    public function setBudgeted(?bool $budgeted): self
    {
        $this->budgeted = $budgeted;

        return $this;
    }

    /**
     * The billable rate for the time entry.
     */
    public function getBillableRate(): ?float
    {
        return $this->billableRate;
    }

    /**
     * The billable rate for the time entry.
     */
    public function setBillableRate(?float $billableRate): self
    {
        $this->billableRate = $billableRate;

        return $this;
    }

    /**
     * The cost rate for the time entry.
     */
    public function getCostRate(): ?float
    {
        return $this->costRate;
    }

    /**
     * The cost rate for the time entry.
     */
    public function setCostRate(?float $costRate): self
    {
        $this->costRate = $costRate;

        return $this;
    }

    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

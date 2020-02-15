<?php

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
     * 
     *
     * @var UserAssignment|null
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
     * 
     *
     * @var TaskAssignment|null
     */
    protected $taskAssignment;
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
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
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the time entry.
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
     * Date of the time entry.
     *
     * @return \DateTime|null
     */
    public function getSpentDate() : ?\DateTime
    {
        return $this->spentDate;
    }
    /**
     * Date of the time entry.
     *
     * @param \DateTime|null $spentDate
     *
     * @return self
     */
    public function setSpentDate(?\DateTime $spentDate) : self
    {
        $this->spentDate = $spentDate;
        return $this;
    }
    /**
     * An object containing the id and name of the associated user.
     *
     * @return TimeEntryUser|null
     */
    public function getUser() : ?TimeEntryUser
    {
        return $this->user;
    }
    /**
     * An object containing the id and name of the associated user.
     *
     * @param TimeEntryUser|null $user
     *
     * @return self
     */
    public function setUser(?TimeEntryUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return UserAssignment|null
     */
    public function getUserAssignment() : ?UserAssignment
    {
        return $this->userAssignment;
    }
    /**
     * 
     *
     * @param UserAssignment|null $userAssignment
     *
     * @return self
     */
    public function setUserAssignment(?UserAssignment $userAssignment) : self
    {
        $this->userAssignment = $userAssignment;
        return $this;
    }
    /**
     * An object containing the id and name of the associated client.
     *
     * @return TimeEntryClient|null
     */
    public function getClient() : ?TimeEntryClient
    {
        return $this->client;
    }
    /**
     * An object containing the id and name of the associated client.
     *
     * @param TimeEntryClient|null $client
     *
     * @return self
     */
    public function setClient(?TimeEntryClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * An object containing the id and name of the associated project.
     *
     * @return TimeEntryProject|null
     */
    public function getProject() : ?TimeEntryProject
    {
        return $this->project;
    }
    /**
     * An object containing the id and name of the associated project.
     *
     * @param TimeEntryProject|null $project
     *
     * @return self
     */
    public function setProject(?TimeEntryProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @return TimeEntryTask|null
     */
    public function getTask() : ?TimeEntryTask
    {
        return $this->task;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @param TimeEntryTask|null $task
     *
     * @return self
     */
    public function setTask(?TimeEntryTask $task) : self
    {
        $this->task = $task;
        return $this;
    }
    /**
     * 
     *
     * @return TaskAssignment|null
     */
    public function getTaskAssignment() : ?TaskAssignment
    {
        return $this->taskAssignment;
    }
    /**
     * 
     *
     * @param TaskAssignment|null $taskAssignment
     *
     * @return self
     */
    public function setTaskAssignment(?TaskAssignment $taskAssignment) : self
    {
        $this->taskAssignment = $taskAssignment;
        return $this;
    }
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @return TimeEntryExternalReference|null
     */
    public function getExternalReference() : ?TimeEntryExternalReference
    {
        return $this->externalReference;
    }
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @param TimeEntryExternalReference|null $externalReference
     *
     * @return self
     */
    public function setExternalReference(?TimeEntryExternalReference $externalReference) : self
    {
        $this->externalReference = $externalReference;
        return $this;
    }
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @return TimeEntryInvoice|null
     */
    public function getInvoice() : ?TimeEntryInvoice
    {
        return $this->invoice;
    }
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @param TimeEntryInvoice|null $invoice
     *
     * @return self
     */
    public function setInvoice(?TimeEntryInvoice $invoice) : self
    {
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @return float|null
     */
    public function getHours() : ?float
    {
        return $this->hours;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @param float|null $hours
     *
     * @return self
     */
    public function setHours(?float $hours) : self
    {
        $this->hours = $hours;
        return $this;
    }
    /**
     * Notes attached to the time entry.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Notes attached to the time entry.
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
     * Whether or not the time entry has been locked.
     *
     * @return bool|null
     */
    public function getIsLocked() : ?bool
    {
        return $this->isLocked;
    }
    /**
     * Whether or not the time entry has been locked.
     *
     * @param bool|null $isLocked
     *
     * @return self
     */
    public function setIsLocked(?bool $isLocked) : self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * Why the time entry has been locked.
     *
     * @return string|null
     */
    public function getLockedReason() : ?string
    {
        return $this->lockedReason;
    }
    /**
     * Why the time entry has been locked.
     *
     * @param string|null $lockedReason
     *
     * @return self
     */
    public function setLockedReason(?string $lockedReason) : self
    {
        $this->lockedReason = $lockedReason;
        return $this;
    }
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @return bool|null
     */
    public function getIsClosed() : ?bool
    {
        return $this->isClosed;
    }
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @param bool|null $isClosed
     *
     * @return self
     */
    public function setIsClosed(?bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @return bool|null
     */
    public function getIsBilled() : ?bool
    {
        return $this->isBilled;
    }
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @param bool|null $isBilled
     *
     * @return self
     */
    public function setIsBilled(?bool $isBilled) : self
    {
        $this->isBilled = $isBilled;
        return $this;
    }
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @return \DateTime|null
     */
    public function getTimerStartedAt() : ?\DateTime
    {
        return $this->timerStartedAt;
    }
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @param \DateTime|null $timerStartedAt
     *
     * @return self
     */
    public function setTimerStartedAt(?\DateTime $timerStartedAt) : self
    {
        $this->timerStartedAt = $timerStartedAt;
        return $this;
    }
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @return string|null
     */
    public function getStartedTime() : ?string
    {
        return $this->startedTime;
    }
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @param string|null $startedTime
     *
     * @return self
     */
    public function setStartedTime(?string $startedTime) : self
    {
        $this->startedTime = $startedTime;
        return $this;
    }
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @return string|null
     */
    public function getEndedTime() : ?string
    {
        return $this->endedTime;
    }
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @param string|null $endedTime
     *
     * @return self
     */
    public function setEndedTime(?string $endedTime) : self
    {
        $this->endedTime = $endedTime;
        return $this;
    }
    /**
     * Whether or not the time entry is currently running.
     *
     * @return bool|null
     */
    public function getIsRunning() : ?bool
    {
        return $this->isRunning;
    }
    /**
     * Whether or not the time entry is currently running.
     *
     * @param bool|null $isRunning
     *
     * @return self
     */
    public function setIsRunning(?bool $isRunning) : self
    {
        $this->isRunning = $isRunning;
        return $this;
    }
    /**
     * Whether or not the time entry is billable.
     *
     * @return bool|null
     */
    public function getBillable() : ?bool
    {
        return $this->billable;
    }
    /**
     * Whether or not the time entry is billable.
     *
     * @param bool|null $billable
     *
     * @return self
     */
    public function setBillable(?bool $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @return bool|null
     */
    public function getBudgeted() : ?bool
    {
        return $this->budgeted;
    }
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @param bool|null $budgeted
     *
     * @return self
     */
    public function setBudgeted(?bool $budgeted) : self
    {
        $this->budgeted = $budgeted;
        return $this;
    }
    /**
     * The billable rate for the time entry.
     *
     * @return float|null
     */
    public function getBillableRate() : ?float
    {
        return $this->billableRate;
    }
    /**
     * The billable rate for the time entry.
     *
     * @param float|null $billableRate
     *
     * @return self
     */
    public function setBillableRate(?float $billableRate) : self
    {
        $this->billableRate = $billableRate;
        return $this;
    }
    /**
     * The cost rate for the time entry.
     *
     * @return float|null
     */
    public function getCostRate() : ?float
    {
        return $this->costRate;
    }
    /**
     * The cost rate for the time entry.
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
     * Date and time the time entry was created. Use the ISO 8601 Format.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
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
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
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
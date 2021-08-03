<?php

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesPostBody
{
    /**
     * The ID of the user to associate with the time entry. Defaults to the currently authenticated user’s ID.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The ID of the project to associate with the time entry.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The ID of the task to associate with the time entry.
     *
     * @var int|null
     */
    protected $taskId;
    /**
     * The ISO 8601 formatted date the time entry was spent.
     *
     * @var \DateTime|null
     */
    protected $spentDate;
    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     *
     * @var string|null
     */
    protected $startedTime;
    /**
     * The time the entry ended. If provided, is_running will be set to false. If not provided, is_running will be set to true.
     *
     * @var string|null
     */
    protected $endedTime;
    /**
     * Any notes to be associated with the time entry.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     *
     * @var TimeEntriesPostBodyExternalReference|null
     */
    protected $externalReference;
    /**
     * The current amount of time tracked. If provided, the time entry will be created with the specified hours and is_running will be set to false. If not provided, hours will be set to 0.0 and is_running will be set to true.
     *
     * @var float|null
     */
    protected $hours;
    /**
     * The ID of the user to associate with the time entry. Defaults to the currently authenticated user’s ID.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user to associate with the time entry. Defaults to the currently authenticated user’s ID.
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
     * The ID of the project to associate with the time entry.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project to associate with the time entry.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The ID of the task to associate with the time entry.
     *
     * @return int|null
     */
    public function getTaskId() : ?int
    {
        return $this->taskId;
    }
    /**
     * The ID of the task to associate with the time entry.
     *
     * @param int|null $taskId
     *
     * @return self
     */
    public function setTaskId(?int $taskId) : self
    {
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * The ISO 8601 formatted date the time entry was spent.
     *
     * @return \DateTime|null
     */
    public function getSpentDate() : ?\DateTime
    {
        return $this->spentDate;
    }
    /**
     * The ISO 8601 formatted date the time entry was spent.
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
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     *
     * @return string|null
     */
    public function getStartedTime() : ?string
    {
        return $this->startedTime;
    }
    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
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
     * The time the entry ended. If provided, is_running will be set to false. If not provided, is_running will be set to true.
     *
     * @return string|null
     */
    public function getEndedTime() : ?string
    {
        return $this->endedTime;
    }
    /**
     * The time the entry ended. If provided, is_running will be set to false. If not provided, is_running will be set to true.
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
     * Any notes to be associated with the time entry.
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * Any notes to be associated with the time entry.
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
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     *
     * @return TimeEntriesPostBodyExternalReference|null
     */
    public function getExternalReference() : ?TimeEntriesPostBodyExternalReference
    {
        return $this->externalReference;
    }
    /**
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     *
     * @param TimeEntriesPostBodyExternalReference|null $externalReference
     *
     * @return self
     */
    public function setExternalReference(?TimeEntriesPostBodyExternalReference $externalReference) : self
    {
        $this->externalReference = $externalReference;
        return $this;
    }
    /**
     * The current amount of time tracked. If provided, the time entry will be created with the specified hours and is_running will be set to false. If not provided, hours will be set to 0.0 and is_running will be set to true.
     *
     * @return float|null
     */
    public function getHours() : ?float
    {
        return $this->hours;
    }
    /**
     * The current amount of time tracked. If provided, the time entry will be created with the specified hours and is_running will be set to false. If not provided, hours will be set to 0.0 and is_running will be set to true.
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
}
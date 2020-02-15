<?php

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesTimeEntryIdPatchBody
{
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
     * The time the entry ended.
     *
     * @var string|null
     */
    protected $endedTime;
    /**
     * The current amount of time tracked.
     *
     * @var float|null
     */
    protected $hours;
    /**
     * Any notes to be associated with the time entry.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @var TimeEntriesTimeEntryIdPatchBodyExternalReference|null
     */
    protected $externalReference;
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
     * The time the entry ended.
     *
     * @return string|null
     */
    public function getEndedTime() : ?string
    {
        return $this->endedTime;
    }
    /**
     * The time the entry ended.
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
     * The current amount of time tracked.
     *
     * @return float|null
     */
    public function getHours() : ?float
    {
        return $this->hours;
    }
    /**
     * The current amount of time tracked.
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
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @return TimeEntriesTimeEntryIdPatchBodyExternalReference|null
     */
    public function getExternalReference() : ?TimeEntriesTimeEntryIdPatchBodyExternalReference
    {
        return $this->externalReference;
    }
    /**
     * An object containing the id, group_id, and permalink of the external reference.
     *
     * @param TimeEntriesTimeEntryIdPatchBodyExternalReference|null $externalReference
     *
     * @return self
     */
    public function setExternalReference(?TimeEntriesTimeEntryIdPatchBodyExternalReference $externalReference) : self
    {
        $this->externalReference = $externalReference;
        return $this;
    }
}
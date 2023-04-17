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

class TimeEntriesTimeEntryIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     *
     * @var TimeEntriesTimeEntryIdPatchBodyExternalReference|null
     */
    protected $externalReference;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the project to associate with the time entry.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project to associate with the time entry.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The ID of the task to associate with the time entry.
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * The ID of the task to associate with the time entry.
     */
    public function setTaskId(?int $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * The ISO 8601 formatted date the time entry was spent.
     */
    public function getSpentDate(): ?\DateTime
    {
        return $this->spentDate;
    }

    /**
     * The ISO 8601 formatted date the time entry was spent.
     */
    public function setSpentDate(?\DateTime $spentDate): self
    {
        $this->initialized['spentDate'] = true;
        $this->spentDate = $spentDate;

        return $this;
    }

    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     */
    public function getStartedTime(): ?string
    {
        return $this->startedTime;
    }

    /**
     * The time the entry started. Defaults to the current time. Example: “8:00am”.
     */
    public function setStartedTime(?string $startedTime): self
    {
        $this->initialized['startedTime'] = true;
        $this->startedTime = $startedTime;

        return $this;
    }

    /**
     * The time the entry ended.
     */
    public function getEndedTime(): ?string
    {
        return $this->endedTime;
    }

    /**
     * The time the entry ended.
     */
    public function setEndedTime(?string $endedTime): self
    {
        $this->initialized['endedTime'] = true;
        $this->endedTime = $endedTime;

        return $this;
    }

    /**
     * The current amount of time tracked.
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * The current amount of time tracked.
     */
    public function setHours(?float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    /**
     * Any notes to be associated with the time entry.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Any notes to be associated with the time entry.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     */
    public function getExternalReference(): ?TimeEntriesTimeEntryIdPatchBodyExternalReference
    {
        return $this->externalReference;
    }

    /**
     * An object containing the id, group_id, account_id, and permalink of the external reference.
     */
    public function setExternalReference(?TimeEntriesTimeEntryIdPatchBodyExternalReference $externalReference): self
    {
        $this->initialized['externalReference'] = true;
        $this->externalReference = $externalReference;

        return $this;
    }
}

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

class TimeReportsResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     *
     * @var int|null
     */
    protected $taskId;
    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @var string|null
     */
    protected $taskName;
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var string|null
     */
    protected $userName;
    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds. Only returned in the Team report.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * The URL to the user’s avatar image. Only returned in the Team report.
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var bool|null
     */
    protected $isContractor;
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float|null
     */
    protected $totalHours;
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float|null
     */
    protected $billableHours;
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float|null
     */
    protected $billableAmount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function setClientId(?int $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function setClientName(?string $clientName): self
    {
        $this->initialized['clientName'] = true;
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     */
    public function setProjectName(?string $projectName): self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     */
    public function setTaskId(?int $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     */
    public function setTaskName(?string $taskName): self
    {
        $this->initialized['taskName'] = true;
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     */
    public function setUserId(?int $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     */
    public function setUserName(?string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;

        return $this;
    }

    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds. Only returned in the Team report.
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds. Only returned in the Team report.
     */
    public function setWeeklyCapacity(?int $weeklyCapacity): self
    {
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * The URL to the user’s avatar image. Only returned in the Team report.
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * The URL to the user’s avatar image. Only returned in the Team report.
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     */
    public function getIsContractor(): ?bool
    {
        return $this->isContractor;
    }

    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     */
    public function setIsContractor(?bool $isContractor): self
    {
        $this->initialized['isContractor'] = true;
        $this->isContractor = $isContractor;

        return $this;
    }

    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function getTotalHours(): ?float
    {
        return $this->totalHours;
    }

    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function setTotalHours(?float $totalHours): self
    {
        $this->initialized['totalHours'] = true;
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function getBillableHours(): ?float
    {
        return $this->billableHours;
    }

    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function setBillableHours(?float $billableHours): self
    {
        $this->initialized['billableHours'] = true;
        $this->billableHours = $billableHours;

        return $this;
    }

    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     */
    public function getBillableAmount(): ?float
    {
        return $this->billableAmount;
    }

    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     */
    public function setBillableAmount(?float $billableAmount): self
    {
        $this->initialized['billableAmount'] = true;
        $this->billableAmount = $billableAmount;

        return $this;
    }
}

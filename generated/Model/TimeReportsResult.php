<?php

namespace JoliCode\Harvest\Api\Model;

class TimeReportsResult
{
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
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param int|null $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return string|null
     */
    public function getClientName() : ?string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param string|null $clientName
     *
     * @return self
     */
    public function setClientName(?string $clientName) : self
    {
        $this->clientName = $clientName;
        return $this;
    }
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
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
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return string|null
     */
    public function getProjectName() : ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param string|null $projectName
     *
     * @return self
     */
    public function setProjectName(?string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     *
     * @return int|null
     */
    public function getTaskId() : ?int
    {
        return $this->taskId;
    }
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
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
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @return string|null
     */
    public function getTaskName() : ?string
    {
        return $this->taskName;
    }
    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @param string|null $taskName
     *
     * @return self
     */
    public function setTaskName(?string $taskName) : self
    {
        $this->taskName = $taskName;
        return $this;
    }
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
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
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return string|null
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }
    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return bool|null
     */
    public function getIsContractor() : ?bool
    {
        return $this->isContractor;
    }
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @param bool|null $isContractor
     *
     * @return self
     */
    public function setIsContractor(?bool $isContractor) : self
    {
        $this->isContractor = $isContractor;
        return $this;
    }
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float|null
     */
    public function getTotalHours() : ?float
    {
        return $this->totalHours;
    }
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float|null $totalHours
     *
     * @return self
     */
    public function setTotalHours(?float $totalHours) : self
    {
        $this->totalHours = $totalHours;
        return $this;
    }
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float|null
     */
    public function getBillableHours() : ?float
    {
        return $this->billableHours;
    }
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float|null $billableHours
     *
     * @return self
     */
    public function setBillableHours(?float $billableHours) : self
    {
        $this->billableHours = $billableHours;
        return $this;
    }
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float|null
     */
    public function getBillableAmount() : ?float
    {
        return $this->billableAmount;
    }
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float|null $billableAmount
     *
     * @return self
     */
    public function setBillableAmount(?float $billableAmount) : self
    {
        $this->billableAmount = $billableAmount;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class UninvoicedReportResult
{
    /**
     * The ID of the client associated with the reported hours and expenses.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported hours and expenses.
     *
     * @var string|null
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported hours and expenses.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported hours and expenses.
     *
     * @var string|null
     */
    protected $projectName;
    /**
     * The currency code associated with the tracked hours for this result.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float|null
     */
    protected $totalHours;
    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float|null
     */
    protected $uninvoicedHours;
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @var float|null
     */
    protected $uninvoicedExpenses;
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @var float|null
     */
    protected $uninvoicedAmount;
    /**
     * The ID of the client associated with the reported hours and expenses.
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with the reported hours and expenses.
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
     * The name of the client associated with the reported hours and expenses.
     *
     * @return string|null
     */
    public function getClientName() : ?string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with the reported hours and expenses.
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
     * The ID of the project associated with the reported hours and expenses.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the reported hours and expenses.
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
     * The name of the project associated with the reported hours and expenses.
     *
     * @return string|null
     */
    public function getProjectName() : ?string
    {
        return $this->projectName;
    }
    /**
     * The name of the project associated with the reported hours and expenses.
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
     * The currency code associated with the tracked hours for this result.
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with the tracked hours for this result.
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
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float|null
     */
    public function getTotalHours() : ?float
    {
        return $this->totalHours;
    }
    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
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
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float|null
     */
    public function getUninvoicedHours() : ?float
    {
        return $this->uninvoicedHours;
    }
    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float|null $uninvoicedHours
     *
     * @return self
     */
    public function setUninvoicedHours(?float $uninvoicedHours) : self
    {
        $this->uninvoicedHours = $uninvoicedHours;
        return $this;
    }
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @return float|null
     */
    public function getUninvoicedExpenses() : ?float
    {
        return $this->uninvoicedExpenses;
    }
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @param float|null $uninvoicedExpenses
     *
     * @return self
     */
    public function setUninvoicedExpenses(?float $uninvoicedExpenses) : self
    {
        $this->uninvoicedExpenses = $uninvoicedExpenses;
        return $this;
    }
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @return float|null
     */
    public function getUninvoicedAmount() : ?float
    {
        return $this->uninvoicedAmount;
    }
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @param float|null $uninvoicedAmount
     *
     * @return self
     */
    public function setUninvoicedAmount(?float $uninvoicedAmount) : self
    {
        $this->uninvoicedAmount = $uninvoicedAmount;
        return $this;
    }
}
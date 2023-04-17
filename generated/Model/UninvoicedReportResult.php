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

class UninvoicedReportResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the client associated with the reported hours and expenses.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client associated with the reported hours and expenses.
     */
    public function setClientId(?int $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The name of the client associated with the reported hours and expenses.
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    /**
     * The name of the client associated with the reported hours and expenses.
     */
    public function setClientName(?string $clientName): self
    {
        $this->initialized['clientName'] = true;
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * The ID of the project associated with the reported hours and expenses.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project associated with the reported hours and expenses.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The name of the project associated with the reported hours and expenses.
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * The name of the project associated with the reported hours and expenses.
     */
    public function setProjectName(?string $projectName): self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * The currency code associated with the tracked hours for this result.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with the tracked hours for this result.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function getTotalHours(): ?float
    {
        return $this->totalHours;
    }

    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function setTotalHours(?float $totalHours): self
    {
        $this->initialized['totalHours'] = true;
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function getUninvoicedHours(): ?float
    {
        return $this->uninvoicedHours;
    }

    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     */
    public function setUninvoicedHours(?float $uninvoicedHours): self
    {
        $this->initialized['uninvoicedHours'] = true;
        $this->uninvoicedHours = $uninvoicedHours;

        return $this;
    }

    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     */
    public function getUninvoicedExpenses(): ?float
    {
        return $this->uninvoicedExpenses;
    }

    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     */
    public function setUninvoicedExpenses(?float $uninvoicedExpenses): self
    {
        $this->initialized['uninvoicedExpenses'] = true;
        $this->uninvoicedExpenses = $uninvoicedExpenses;

        return $this;
    }

    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     */
    public function getUninvoicedAmount(): ?float
    {
        return $this->uninvoicedAmount;
    }

    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     */
    public function setUninvoicedAmount(?float $uninvoicedAmount): self
    {
        $this->initialized['uninvoicedAmount'] = true;
        $this->uninvoicedAmount = $uninvoicedAmount;

        return $this;
    }
}

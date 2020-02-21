<?php

namespace JoliCode\Harvest\Api\Model;

class Company
{
    /**
     * The Harvest URL for the company.
     *
     * @var string|null
     */
    protected $baseUri;
    /**
     * The Harvest domain for the company.
     *
     * @var string|null
     */
    protected $fullDomain;
    /**
     * The name of the company.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Whether the company is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @var string|null
     */
    protected $weekStartDay;
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool|null
     */
    protected $wantsTimestampTimers;
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @var string|null
     */
    protected $timeFormat;
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @var string|null
     */
    protected $planType;
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @var string|null
     */
    protected $clock;
    /**
     * Symbol used when formatting decimals.
     *
     * @var string|null
     */
    protected $decimalSymbol;
    /**
     * Separator used when formatting numbers.
     *
     * @var string|null
     */
    protected $thousandsSeparator;
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @var string|null
     */
    protected $colorScheme;
    /**
     * The weekly capacity in seconds.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * Whether the expense module is enabled.
     *
     * @var bool|null
     */
    protected $expenseFeature;
    /**
     * Whether the invoice module is enabled.
     *
     * @var bool|null
     */
    protected $invoiceFeature;
    /**
     * Whether the estimate module is enabled.
     *
     * @var bool|null
     */
    protected $estimateFeature;
    /**
     * Whether the approval module is enabled.
     *
     * @var bool|null
     */
    protected $approvalFeature;
    /**
     * The Harvest URL for the company.
     *
     * @return string|null
     */
    public function getBaseUri() : ?string
    {
        return $this->baseUri;
    }
    /**
     * The Harvest URL for the company.
     *
     * @param string|null $baseUri
     *
     * @return self
     */
    public function setBaseUri(?string $baseUri) : self
    {
        $this->baseUri = $baseUri;
        return $this;
    }
    /**
     * The Harvest domain for the company.
     *
     * @return string|null
     */
    public function getFullDomain() : ?string
    {
        return $this->fullDomain;
    }
    /**
     * The Harvest domain for the company.
     *
     * @param string|null $fullDomain
     *
     * @return self
     */
    public function setFullDomain(?string $fullDomain) : self
    {
        $this->fullDomain = $fullDomain;
        return $this;
    }
    /**
     * The name of the company.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the company.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Whether the company is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the company is active or archived.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @return string|null
     */
    public function getWeekStartDay() : ?string
    {
        return $this->weekStartDay;
    }
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @param string|null $weekStartDay
     *
     * @return self
     */
    public function setWeekStartDay(?string $weekStartDay) : self
    {
        $this->weekStartDay = $weekStartDay;
        return $this;
    }
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @return bool|null
     */
    public function getWantsTimestampTimers() : ?bool
    {
        return $this->wantsTimestampTimers;
    }
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @param bool|null $wantsTimestampTimers
     *
     * @return self
     */
    public function setWantsTimestampTimers(?bool $wantsTimestampTimers) : self
    {
        $this->wantsTimestampTimers = $wantsTimestampTimers;
        return $this;
    }
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @return string|null
     */
    public function getTimeFormat() : ?string
    {
        return $this->timeFormat;
    }
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @param string|null $timeFormat
     *
     * @return self
     */
    public function setTimeFormat(?string $timeFormat) : self
    {
        $this->timeFormat = $timeFormat;
        return $this;
    }
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @return string|null
     */
    public function getPlanType() : ?string
    {
        return $this->planType;
    }
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @param string|null $planType
     *
     * @return self
     */
    public function setPlanType(?string $planType) : self
    {
        $this->planType = $planType;
        return $this;
    }
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @return string|null
     */
    public function getClock() : ?string
    {
        return $this->clock;
    }
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @param string|null $clock
     *
     * @return self
     */
    public function setClock(?string $clock) : self
    {
        $this->clock = $clock;
        return $this;
    }
    /**
     * Symbol used when formatting decimals.
     *
     * @return string|null
     */
    public function getDecimalSymbol() : ?string
    {
        return $this->decimalSymbol;
    }
    /**
     * Symbol used when formatting decimals.
     *
     * @param string|null $decimalSymbol
     *
     * @return self
     */
    public function setDecimalSymbol(?string $decimalSymbol) : self
    {
        $this->decimalSymbol = $decimalSymbol;
        return $this;
    }
    /**
     * Separator used when formatting numbers.
     *
     * @return string|null
     */
    public function getThousandsSeparator() : ?string
    {
        return $this->thousandsSeparator;
    }
    /**
     * Separator used when formatting numbers.
     *
     * @param string|null $thousandsSeparator
     *
     * @return self
     */
    public function setThousandsSeparator(?string $thousandsSeparator) : self
    {
        $this->thousandsSeparator = $thousandsSeparator;
        return $this;
    }
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @return string|null
     */
    public function getColorScheme() : ?string
    {
        return $this->colorScheme;
    }
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @param string|null $colorScheme
     *
     * @return self
     */
    public function setColorScheme(?string $colorScheme) : self
    {
        $this->colorScheme = $colorScheme;
        return $this;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @return int|null
     */
    public function getWeeklyCapacity() : ?int
    {
        return $this->weeklyCapacity;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @param int|null $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(?int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * Whether the expense module is enabled.
     *
     * @return bool|null
     */
    public function getExpenseFeature() : ?bool
    {
        return $this->expenseFeature;
    }
    /**
     * Whether the expense module is enabled.
     *
     * @param bool|null $expenseFeature
     *
     * @return self
     */
    public function setExpenseFeature(?bool $expenseFeature) : self
    {
        $this->expenseFeature = $expenseFeature;
        return $this;
    }
    /**
     * Whether the invoice module is enabled.
     *
     * @return bool|null
     */
    public function getInvoiceFeature() : ?bool
    {
        return $this->invoiceFeature;
    }
    /**
     * Whether the invoice module is enabled.
     *
     * @param bool|null $invoiceFeature
     *
     * @return self
     */
    public function setInvoiceFeature(?bool $invoiceFeature) : self
    {
        $this->invoiceFeature = $invoiceFeature;
        return $this;
    }
    /**
     * Whether the estimate module is enabled.
     *
     * @return bool|null
     */
    public function getEstimateFeature() : ?bool
    {
        return $this->estimateFeature;
    }
    /**
     * Whether the estimate module is enabled.
     *
     * @param bool|null $estimateFeature
     *
     * @return self
     */
    public function setEstimateFeature(?bool $estimateFeature) : self
    {
        $this->estimateFeature = $estimateFeature;
        return $this;
    }
    /**
     * Whether the approval module is enabled.
     *
     * @return bool|null
     */
    public function getApprovalFeature() : ?bool
    {
        return $this->approvalFeature;
    }
    /**
     * Whether the approval module is enabled.
     *
     * @param bool|null $approvalFeature
     *
     * @return self
     */
    public function setApprovalFeature(?bool $approvalFeature) : self
    {
        $this->approvalFeature = $approvalFeature;
        return $this;
    }
}
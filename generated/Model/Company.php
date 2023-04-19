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

class Company extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * The weekday used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
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
     * The format used to display date in Harvest. Returns one of: %m/%d/%Y, %d/%m/%Y, %Y-%m-%d, %d.%m.%Y,.%Y.%m.%d or %Y/%m/%d.
     *
     * @var string|null
     */
    protected $dateFormat;
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4.
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
     * How to display the currency code when formatting currency. Returns one of: iso_code_none, iso_code_before, or iso_code_after.
     *
     * @var string|null
     */
    protected $currencyCodeDisplay;
    /**
     * How to display the currency symbol when formatting currency. Returns one of: symbol_none, symbol_before, or symbol_after.
     *
     * @var string|null
     */
    protected $currencySymbolDisplay;
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The Harvest URL for the company.
     */
    public function getBaseUri(): ?string
    {
        return $this->baseUri;
    }

    /**
     * The Harvest URL for the company.
     */
    public function setBaseUri(?string $baseUri): self
    {
        $this->initialized['baseUri'] = true;
        $this->baseUri = $baseUri;

        return $this;
    }

    /**
     * The Harvest domain for the company.
     */
    public function getFullDomain(): ?string
    {
        return $this->fullDomain;
    }

    /**
     * The Harvest domain for the company.
     */
    public function setFullDomain(?string $fullDomain): self
    {
        $this->initialized['fullDomain'] = true;
        $this->fullDomain = $fullDomain;

        return $this;
    }

    /**
     * The name of the company.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the company.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the company is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the company is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The weekday used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     */
    public function getWeekStartDay(): ?string
    {
        return $this->weekStartDay;
    }

    /**
     * The weekday used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     */
    public function setWeekStartDay(?string $weekStartDay): self
    {
        $this->initialized['weekStartDay'] = true;
        $this->weekStartDay = $weekStartDay;

        return $this;
    }

    /**
     * Whether time is tracked via duration or start and end times.
     */
    public function getWantsTimestampTimers(): ?bool
    {
        return $this->wantsTimestampTimers;
    }

    /**
     * Whether time is tracked via duration or start and end times.
     */
    public function setWantsTimestampTimers(?bool $wantsTimestampTimers): self
    {
        $this->initialized['wantsTimestampTimers'] = true;
        $this->wantsTimestampTimers = $wantsTimestampTimers;

        return $this;
    }

    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     */
    public function getTimeFormat(): ?string
    {
        return $this->timeFormat;
    }

    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     */
    public function setTimeFormat(?string $timeFormat): self
    {
        $this->initialized['timeFormat'] = true;
        $this->timeFormat = $timeFormat;

        return $this;
    }

    /**
     * The format used to display date in Harvest. Returns one of: %m/%d/%Y, %d/%m/%Y, %Y-%m-%d, %d.%m.%Y,.%Y.%m.%d or %Y/%m/%d.
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    /**
     * The format used to display date in Harvest. Returns one of: %m/%d/%Y, %d/%m/%Y, %Y-%m-%d, %d.%m.%Y,.%Y.%m.%d or %Y/%m/%d.
     */
    public function setDateFormat(?string $dateFormat): self
    {
        $this->initialized['dateFormat'] = true;
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4.
     */
    public function getPlanType(): ?string
    {
        return $this->planType;
    }

    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4.
     */
    public function setPlanType(?string $planType): self
    {
        $this->initialized['planType'] = true;
        $this->planType = $planType;

        return $this;
    }

    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     */
    public function getClock(): ?string
    {
        return $this->clock;
    }

    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     */
    public function setClock(?string $clock): self
    {
        $this->initialized['clock'] = true;
        $this->clock = $clock;

        return $this;
    }

    /**
     * How to display the currency code when formatting currency. Returns one of: iso_code_none, iso_code_before, or iso_code_after.
     */
    public function getCurrencyCodeDisplay(): ?string
    {
        return $this->currencyCodeDisplay;
    }

    /**
     * How to display the currency code when formatting currency. Returns one of: iso_code_none, iso_code_before, or iso_code_after.
     */
    public function setCurrencyCodeDisplay(?string $currencyCodeDisplay): self
    {
        $this->initialized['currencyCodeDisplay'] = true;
        $this->currencyCodeDisplay = $currencyCodeDisplay;

        return $this;
    }

    /**
     * How to display the currency symbol when formatting currency. Returns one of: symbol_none, symbol_before, or symbol_after.
     */
    public function getCurrencySymbolDisplay(): ?string
    {
        return $this->currencySymbolDisplay;
    }

    /**
     * How to display the currency symbol when formatting currency. Returns one of: symbol_none, symbol_before, or symbol_after.
     */
    public function setCurrencySymbolDisplay(?string $currencySymbolDisplay): self
    {
        $this->initialized['currencySymbolDisplay'] = true;
        $this->currencySymbolDisplay = $currencySymbolDisplay;

        return $this;
    }

    /**
     * Symbol used when formatting decimals.
     */
    public function getDecimalSymbol(): ?string
    {
        return $this->decimalSymbol;
    }

    /**
     * Symbol used when formatting decimals.
     */
    public function setDecimalSymbol(?string $decimalSymbol): self
    {
        $this->initialized['decimalSymbol'] = true;
        $this->decimalSymbol = $decimalSymbol;

        return $this;
    }

    /**
     * Separator used when formatting numbers.
     */
    public function getThousandsSeparator(): ?string
    {
        return $this->thousandsSeparator;
    }

    /**
     * Separator used when formatting numbers.
     */
    public function setThousandsSeparator(?string $thousandsSeparator): self
    {
        $this->initialized['thousandsSeparator'] = true;
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    /**
     * The color scheme being used in the Harvest web client.
     */
    public function getColorScheme(): ?string
    {
        return $this->colorScheme;
    }

    /**
     * The color scheme being used in the Harvest web client.
     */
    public function setColorScheme(?string $colorScheme): self
    {
        $this->initialized['colorScheme'] = true;
        $this->colorScheme = $colorScheme;

        return $this;
    }

    /**
     * The weekly capacity in seconds.
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * The weekly capacity in seconds.
     */
    public function setWeeklyCapacity(?int $weeklyCapacity): self
    {
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * Whether the expense module is enabled.
     */
    public function getExpenseFeature(): ?bool
    {
        return $this->expenseFeature;
    }

    /**
     * Whether the expense module is enabled.
     */
    public function setExpenseFeature(?bool $expenseFeature): self
    {
        $this->initialized['expenseFeature'] = true;
        $this->expenseFeature = $expenseFeature;

        return $this;
    }

    /**
     * Whether the invoice module is enabled.
     */
    public function getInvoiceFeature(): ?bool
    {
        return $this->invoiceFeature;
    }

    /**
     * Whether the invoice module is enabled.
     */
    public function setInvoiceFeature(?bool $invoiceFeature): self
    {
        $this->initialized['invoiceFeature'] = true;
        $this->invoiceFeature = $invoiceFeature;

        return $this;
    }

    /**
     * Whether the estimate module is enabled.
     */
    public function getEstimateFeature(): ?bool
    {
        return $this->estimateFeature;
    }

    /**
     * Whether the estimate module is enabled.
     */
    public function setEstimateFeature(?bool $estimateFeature): self
    {
        $this->initialized['estimateFeature'] = true;
        $this->estimateFeature = $estimateFeature;

        return $this;
    }

    /**
     * Whether the approval module is enabled.
     */
    public function getApprovalFeature(): ?bool
    {
        return $this->approvalFeature;
    }

    /**
     * Whether the approval module is enabled.
     */
    public function setApprovalFeature(?bool $approvalFeature): self
    {
        $this->initialized['approvalFeature'] = true;
        $this->approvalFeature = $approvalFeature;

        return $this;
    }
}

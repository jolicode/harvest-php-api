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

class ProjectsProjectIdUserAssignmentsUserAssignmentIdPatchBody
{
    /**
     * Whether the user assignment is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Determines if the user has Project Manager permissions for the project.
     *
     * @var bool|null
     */
    protected $isProjectManager;
    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     *
     * @var bool|null
     */
    protected $useDefaultRates;
    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     *
     * @var float|null
     */
    protected $hourlyRate;
    /**
     * Budget used when the project’s budget_by is person.
     *
     * @var float|null
     */
    protected $budget;

    /**
     * Whether the user assignment is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the user assignment is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Determines if the user has Project Manager permissions for the project.
     */
    public function getIsProjectManager(): ?bool
    {
        return $this->isProjectManager;
    }

    /**
     * Determines if the user has Project Manager permissions for the project.
     */
    public function setIsProjectManager(?bool $isProjectManager): self
    {
        $this->isProjectManager = $isProjectManager;

        return $this;
    }

    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     */
    public function getUseDefaultRates(): ?bool
    {
        return $this->useDefaultRates;
    }

    /**
     * Determines which billable rate(s) will be used on the project for this user when bill_by is People. When true, the project will use the user’s default billable rates. When false, the project will use the custom rate defined on this user assignment.
     */
    public function setUseDefaultRates(?bool $useDefaultRates): self
    {
        $this->useDefaultRates = $useDefaultRates;

        return $this;
    }

    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     */
    public function getHourlyRate(): ?float
    {
        return $this->hourlyRate;
    }

    /**
     * Custom rate used when the project’s bill_by is People and use_default_rates is false.
     */
    public function setHourlyRate(?float $hourlyRate): self
    {
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    /**
     * Budget used when the project’s budget_by is person.
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * Budget used when the project’s budget_by is person.
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }
}

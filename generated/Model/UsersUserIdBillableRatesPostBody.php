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

class UsersUserIdBillableRatesPostBody
{
    /**
     * The amount of the billable rate.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The date the billable rate is effective. Cannot be a date in the future.
     *
     * @var \DateTime|null
     */
    protected $startDate;

    /**
     * The amount of the billable rate.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The amount of the billable rate.
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The date the billable rate is effective. Cannot be a date in the future.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * The date the billable rate is effective. Cannot be a date in the future.
     */
    public function setStartDate(?\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}

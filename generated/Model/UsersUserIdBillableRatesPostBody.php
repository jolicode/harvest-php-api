<?php

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
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * The amount of the billable rate.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * The date the billable rate is effective. Cannot be a date in the future.
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * The date the billable rate is effective. Cannot be a date in the future.
     *
     * @param \DateTime|null $startDate
     *
     * @return self
     */
    public function setStartDate(?\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
}
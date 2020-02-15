<?php

namespace JoliCode\Harvest\Api\Model;

class UsersUserIdCostRatesPostBody
{
    /**
     * The amount of the cost rate.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The date the cost rate is effective. Cannot be a date in the future.
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * The amount of the cost rate.
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * The amount of the cost rate.
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
     * The date the cost rate is effective. Cannot be a date in the future.
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * The date the cost rate is effective. Cannot be a date in the future.
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
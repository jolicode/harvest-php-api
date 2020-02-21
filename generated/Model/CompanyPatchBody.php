<?php

namespace JoliCode\Harvest\Api\Model;

class CompanyPatchBody
{
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool|null
     */
    protected $wantsTimestampTimers;
    /**
     * The weekly capacity in seconds.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
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
}
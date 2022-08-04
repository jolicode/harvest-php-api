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
        $this->wantsTimestampTimers = $wantsTimestampTimers;

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
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }
}

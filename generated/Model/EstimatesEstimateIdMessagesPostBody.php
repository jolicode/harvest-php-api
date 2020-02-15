<?php

namespace JoliCode\Harvest\Api\Model;

class EstimatesEstimateIdMessagesPostBody
{
    /**
     * Pass “re-open” to re-open the estimate.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Pass “re-open” to re-open the estimate.
     *
     * @return string|null
     */
    public function getEventType() : ?string
    {
        return $this->eventType;
    }
    /**
     * Pass “re-open” to re-open the estimate.
     *
     * @param string|null $eventType
     *
     * @return self
     */
    public function setEventType(?string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
}
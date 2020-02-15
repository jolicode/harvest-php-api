<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdMessagesPostBody
{
    /**
     * Pass “draft” to mark the invoice as a draft.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Pass “draft” to mark the invoice as a draft.
     *
     * @return string|null
     */
    public function getEventType() : ?string
    {
        return $this->eventType;
    }
    /**
     * Pass “draft” to mark the invoice as a draft.
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
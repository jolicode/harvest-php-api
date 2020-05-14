<?php

namespace JoliCode\Harvest\Api\Model;

class EstimatesEstimateIdMessagesPostBody
{
    /**
     * If provided, runs an event against the estimate. Options: “accept”, “decline”, “re-open”, or “send”.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Array of recipient parameters. See below for details.
     *
     * @var EstimatesEstimateIdMessagesPostBodyRecipientsItem[]|null
     */
    protected $recipients;
    /**
     * The message subject.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * The message body.
     *
     * @var string|null
     */
    protected $body;
    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     *
     * @var bool|null
     */
    protected $sendMeACopy;
    /**
     * If provided, runs an event against the estimate. Options: “accept”, “decline”, “re-open”, or “send”.
     *
     * @return string|null
     */
    public function getEventType() : ?string
    {
        return $this->eventType;
    }
    /**
     * If provided, runs an event against the estimate. Options: “accept”, “decline”, “re-open”, or “send”.
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
    /**
     * Array of recipient parameters. See below for details.
     *
     * @return EstimatesEstimateIdMessagesPostBodyRecipientsItem[]|null
     */
    public function getRecipients() : ?array
    {
        return $this->recipients;
    }
    /**
     * Array of recipient parameters. See below for details.
     *
     * @param EstimatesEstimateIdMessagesPostBodyRecipientsItem[]|null $recipients
     *
     * @return self
     */
    public function setRecipients(?array $recipients) : self
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * The message subject.
     *
     * @return string|null
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * The message subject.
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * The message body.
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * The message body.
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     *
     * @return bool|null
     */
    public function getSendMeACopy() : ?bool
    {
        return $this->sendMeACopy;
    }
    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     *
     * @param bool|null $sendMeACopy
     *
     * @return self
     */
    public function setSendMeACopy(?bool $sendMeACopy) : self
    {
        $this->sendMeACopy = $sendMeACopy;
        return $this;
    }
}
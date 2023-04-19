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

class EstimatesEstimateIdMessagesPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * If provided, runs an event against the estimate. Options: “accept”, “decline”, “re-open”, or “send”.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * If provided, runs an event against the estimate. Options: “accept”, “decline”, “re-open”, or “send”.
     */
    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Array of recipient parameters. See below for details.
     *
     * @return EstimatesEstimateIdMessagesPostBodyRecipientsItem[]|null
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * Array of recipient parameters. See below for details.
     *
     * @param EstimatesEstimateIdMessagesPostBodyRecipientsItem[]|null $recipients
     */
    public function setRecipients(?array $recipients): self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * The message subject.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The message subject.
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * The message body.
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * The message body.
     */
    public function setBody(?string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     */
    public function getSendMeACopy(): ?bool
    {
        return $this->sendMeACopy;
    }

    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     */
    public function setSendMeACopy(?bool $sendMeACopy): self
    {
        $this->initialized['sendMeACopy'] = true;
        $this->sendMeACopy = $sendMeACopy;

        return $this;
    }
}

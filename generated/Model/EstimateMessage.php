<?php

namespace JoliCode\Harvest\Api\Model;

class EstimateMessage
{
    /**
     * Unique ID for the message.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name of the user that created the message.
     *
     * @var string|null
     */
    protected $sentBy;
    /**
     * Email of the user that created the message.
     *
     * @var string|null
     */
    protected $sentByEmail;
    /**
     * Name of the user that the message was sent from.
     *
     * @var string|null
     */
    protected $sentFrom;
    /**
     * Email of the user that message was sent from.
     *
     * @var string|null
     */
    protected $sentFromEmail;
    /**
     * Array of estimate message recipients.
     *
     * @var EstimateMessageRecipient[]|null
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
     * Whether to email a copy of the message to the current user.
     *
     * @var bool|null
     */
    protected $sendMeACopy;
    /**
     * The type of estimate event that occurred with the message: send, accept, decline, re-open, view, or invoice.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Date and time the message was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the message was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the message.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the message.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the user that created the message.
     *
     * @return string|null
     */
    public function getSentBy() : ?string
    {
        return $this->sentBy;
    }
    /**
     * Name of the user that created the message.
     *
     * @param string|null $sentBy
     *
     * @return self
     */
    public function setSentBy(?string $sentBy) : self
    {
        $this->sentBy = $sentBy;
        return $this;
    }
    /**
     * Email of the user that created the message.
     *
     * @return string|null
     */
    public function getSentByEmail() : ?string
    {
        return $this->sentByEmail;
    }
    /**
     * Email of the user that created the message.
     *
     * @param string|null $sentByEmail
     *
     * @return self
     */
    public function setSentByEmail(?string $sentByEmail) : self
    {
        $this->sentByEmail = $sentByEmail;
        return $this;
    }
    /**
     * Name of the user that the message was sent from.
     *
     * @return string|null
     */
    public function getSentFrom() : ?string
    {
        return $this->sentFrom;
    }
    /**
     * Name of the user that the message was sent from.
     *
     * @param string|null $sentFrom
     *
     * @return self
     */
    public function setSentFrom(?string $sentFrom) : self
    {
        $this->sentFrom = $sentFrom;
        return $this;
    }
    /**
     * Email of the user that message was sent from.
     *
     * @return string|null
     */
    public function getSentFromEmail() : ?string
    {
        return $this->sentFromEmail;
    }
    /**
     * Email of the user that message was sent from.
     *
     * @param string|null $sentFromEmail
     *
     * @return self
     */
    public function setSentFromEmail(?string $sentFromEmail) : self
    {
        $this->sentFromEmail = $sentFromEmail;
        return $this;
    }
    /**
     * Array of estimate message recipients.
     *
     * @return EstimateMessageRecipient[]|null
     */
    public function getRecipients() : ?array
    {
        return $this->recipients;
    }
    /**
     * Array of estimate message recipients.
     *
     * @param EstimateMessageRecipient[]|null $recipients
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
     * Whether to email a copy of the message to the current user.
     *
     * @return bool|null
     */
    public function getSendMeACopy() : ?bool
    {
        return $this->sendMeACopy;
    }
    /**
     * Whether to email a copy of the message to the current user.
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
    /**
     * The type of estimate event that occurred with the message: send, accept, decline, re-open, view, or invoice.
     *
     * @return string|null
     */
    public function getEventType() : ?string
    {
        return $this->eventType;
    }
    /**
     * The type of estimate event that occurred with the message: send, accept, decline, re-open, view, or invoice.
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
     * Date and time the message was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the message was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the message was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the message was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
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

class EstimateMessage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the message.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the message.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the user that created the message.
     */
    public function getSentBy(): ?string
    {
        return $this->sentBy;
    }

    /**
     * Name of the user that created the message.
     */
    public function setSentBy(?string $sentBy): self
    {
        $this->initialized['sentBy'] = true;
        $this->sentBy = $sentBy;

        return $this;
    }

    /**
     * Email of the user that created the message.
     */
    public function getSentByEmail(): ?string
    {
        return $this->sentByEmail;
    }

    /**
     * Email of the user that created the message.
     */
    public function setSentByEmail(?string $sentByEmail): self
    {
        $this->initialized['sentByEmail'] = true;
        $this->sentByEmail = $sentByEmail;

        return $this;
    }

    /**
     * Name of the user that the message was sent from.
     */
    public function getSentFrom(): ?string
    {
        return $this->sentFrom;
    }

    /**
     * Name of the user that the message was sent from.
     */
    public function setSentFrom(?string $sentFrom): self
    {
        $this->initialized['sentFrom'] = true;
        $this->sentFrom = $sentFrom;

        return $this;
    }

    /**
     * Email of the user that message was sent from.
     */
    public function getSentFromEmail(): ?string
    {
        return $this->sentFromEmail;
    }

    /**
     * Email of the user that message was sent from.
     */
    public function setSentFromEmail(?string $sentFromEmail): self
    {
        $this->initialized['sentFromEmail'] = true;
        $this->sentFromEmail = $sentFromEmail;

        return $this;
    }

    /**
     * Array of estimate message recipients.
     *
     * @return EstimateMessageRecipient[]|null
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * Array of estimate message recipients.
     *
     * @param EstimateMessageRecipient[]|null $recipients
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
     * Whether to email a copy of the message to the current user.
     */
    public function getSendMeACopy(): ?bool
    {
        return $this->sendMeACopy;
    }

    /**
     * Whether to email a copy of the message to the current user.
     */
    public function setSendMeACopy(?bool $sendMeACopy): self
    {
        $this->initialized['sendMeACopy'] = true;
        $this->sendMeACopy = $sendMeACopy;

        return $this;
    }

    /**
     * The type of estimate event that occurred with the message: send, accept, decline, re-open, view, or invoice.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * The type of estimate event that occurred with the message: send, accept, decline, re-open, view, or invoice.
     */
    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Date and time the message was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the message was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the message was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the message was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

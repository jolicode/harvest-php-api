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

class InvoiceMessage
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
     * Array of invoice message recipients.
     *
     * @var InvoiceMessageRecipient[]|null
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
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     *
     * @var bool|null
     */
    protected $includeLinkToClientInvoice;
    /**
     * Whether to attach the invoice PDF to the message email.
     *
     * @var bool|null
     */
    protected $attachPdf;
    /**
     * Whether to email a copy of the message to the current user.
     *
     * @var bool|null
     */
    protected $sendMeACopy;
    /**
     * Whether this is a thank you message.
     *
     * @var bool|null
     */
    protected $thankYou;
    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Whether this is a reminder message.
     *
     * @var bool|null
     */
    protected $reminder;
    /**
     * The date the reminder email will be sent.
     *
     * @var \DateTime|null
     */
    protected $sendReminderOn;
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
        $this->sentFromEmail = $sentFromEmail;

        return $this;
    }

    /**
     * Array of invoice message recipients.
     *
     * @return InvoiceMessageRecipient[]|null
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * Array of invoice message recipients.
     *
     * @param InvoiceMessageRecipient[]|null $recipients
     */
    public function setRecipients(?array $recipients): self
    {
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
        $this->body = $body;

        return $this;
    }

    /**
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     */
    public function getIncludeLinkToClientInvoice(): ?bool
    {
        return $this->includeLinkToClientInvoice;
    }

    /**
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     */
    public function setIncludeLinkToClientInvoice(?bool $includeLinkToClientInvoice): self
    {
        $this->includeLinkToClientInvoice = $includeLinkToClientInvoice;

        return $this;
    }

    /**
     * Whether to attach the invoice PDF to the message email.
     */
    public function getAttachPdf(): ?bool
    {
        return $this->attachPdf;
    }

    /**
     * Whether to attach the invoice PDF to the message email.
     */
    public function setAttachPdf(?bool $attachPdf): self
    {
        $this->attachPdf = $attachPdf;

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
        $this->sendMeACopy = $sendMeACopy;

        return $this;
    }

    /**
     * Whether this is a thank you message.
     */
    public function getThankYou(): ?bool
    {
        return $this->thankYou;
    }

    /**
     * Whether this is a thank you message.
     */
    public function setThankYou(?bool $thankYou): self
    {
        $this->thankYou = $thankYou;

        return $this;
    }

    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Whether this is a reminder message.
     */
    public function getReminder(): ?bool
    {
        return $this->reminder;
    }

    /**
     * Whether this is a reminder message.
     */
    public function setReminder(?bool $reminder): self
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * The date the reminder email will be sent.
     */
    public function getSendReminderOn(): ?\DateTime
    {
        return $this->sendReminderOn;
    }

    /**
     * The date the reminder email will be sent.
     */
    public function setSendReminderOn(?\DateTime $sendReminderOn): self
    {
        $this->sendReminderOn = $sendReminderOn;

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
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

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

class InvoicesInvoiceIdMessagesPostBody
{
    /**
     * If provided, runs an event against the invoice. Options: close, draft, re-open, or send.
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Array of recipient parameters. See below for details.
     *
     * @var InvoicesInvoiceIdMessagesPostBodyRecipientsItem[]|null
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
     * If set to true, a link to the client invoice URL will be included in the message email. Defaults to false. Ignored when thank_you is set to true.
     *
     * @var bool|null
     */
    protected $includeLinkToClientInvoice;
    /**
     * If set to true, a PDF of the invoice will be attached to the message email. Defaults to false.
     *
     * @var bool|null
     */
    protected $attachPdf;
    /**
     * If set to true, a copy of the message email will be sent to the current user. Defaults to false.
     *
     * @var bool|null
     */
    protected $sendMeACopy;
    /**
     * If set to true, a thank you message email will be sent. Defaults to false.
     *
     * @var bool|null
     */
    protected $thankYou;

    /**
     * If provided, runs an event against the invoice. Options: close, draft, re-open, or send.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * If provided, runs an event against the invoice. Options: close, draft, re-open, or send.
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Array of recipient parameters. See below for details.
     *
     * @return InvoicesInvoiceIdMessagesPostBodyRecipientsItem[]|null
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * Array of recipient parameters. See below for details.
     *
     * @param InvoicesInvoiceIdMessagesPostBodyRecipientsItem[]|null $recipients
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
     * If set to true, a link to the client invoice URL will be included in the message email. Defaults to false. Ignored when thank_you is set to true.
     */
    public function getIncludeLinkToClientInvoice(): ?bool
    {
        return $this->includeLinkToClientInvoice;
    }

    /**
     * If set to true, a link to the client invoice URL will be included in the message email. Defaults to false. Ignored when thank_you is set to true.
     */
    public function setIncludeLinkToClientInvoice(?bool $includeLinkToClientInvoice): self
    {
        $this->includeLinkToClientInvoice = $includeLinkToClientInvoice;

        return $this;
    }

    /**
     * If set to true, a PDF of the invoice will be attached to the message email. Defaults to false.
     */
    public function getAttachPdf(): ?bool
    {
        return $this->attachPdf;
    }

    /**
     * If set to true, a PDF of the invoice will be attached to the message email. Defaults to false.
     */
    public function setAttachPdf(?bool $attachPdf): self
    {
        $this->attachPdf = $attachPdf;

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
        $this->sendMeACopy = $sendMeACopy;

        return $this;
    }

    /**
     * If set to true, a thank you message email will be sent. Defaults to false.
     */
    public function getThankYou(): ?bool
    {
        return $this->thankYou;
    }

    /**
     * If set to true, a thank you message email will be sent. Defaults to false.
     */
    public function setThankYou(?bool $thankYou): self
    {
        $this->thankYou = $thankYou;

        return $this;
    }
}

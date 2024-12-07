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

class InvoicesInvoiceIdMessagesPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Omit when intending to create and send a message. If omitted, the default value is null and the message will be sent. See other sections below for including this parameter with the following options: close, draft, re-open, or send (which marks a draft invoice as sent, it does not send the message).
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * Array of recipient parameters. See below for more details.
     *
     * @var list<InvoicesInvoiceIdMessagesPostBodyRecipientsItem>|null
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
     * DEPRECATED A link to the client invoice URL will be automatically included in the message email if payment_options have been assigned to the invoice. Setting to true will be ignored. Setting to false will clear all payment_options on the invoice.
     *
     * @deprecated
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Omit when intending to create and send a message. If omitted, the default value is null and the message will be sent. See other sections below for including this parameter with the following options: close, draft, re-open, or send (which marks a draft invoice as sent, it does not send the message).
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Omit when intending to create and send a message. If omitted, the default value is null and the message will be sent. See other sections below for including this parameter with the following options: close, draft, re-open, or send (which marks a draft invoice as sent, it does not send the message).
     */
    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Array of recipient parameters. See below for more details.
     *
     * @return list<InvoicesInvoiceIdMessagesPostBodyRecipientsItem>|null
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * Array of recipient parameters. See below for more details.
     *
     * @param list<InvoicesInvoiceIdMessagesPostBodyRecipientsItem>|null $recipients
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
     * DEPRECATED A link to the client invoice URL will be automatically included in the message email if payment_options have been assigned to the invoice. Setting to true will be ignored. Setting to false will clear all payment_options on the invoice.
     *
     * @deprecated
     */
    public function getIncludeLinkToClientInvoice(): ?bool
    {
        return $this->includeLinkToClientInvoice;
    }

    /**
     * DEPRECATED A link to the client invoice URL will be automatically included in the message email if payment_options have been assigned to the invoice. Setting to true will be ignored. Setting to false will clear all payment_options on the invoice.
     *
     * @deprecated
     */
    public function setIncludeLinkToClientInvoice(?bool $includeLinkToClientInvoice): self
    {
        $this->initialized['includeLinkToClientInvoice'] = true;
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
        $this->initialized['attachPdf'] = true;
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
        $this->initialized['sendMeACopy'] = true;
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
        $this->initialized['thankYou'] = true;
        $this->thankYou = $thankYou;

        return $this;
    }
}

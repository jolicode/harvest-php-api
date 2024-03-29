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

class InvoiceMessageSubjectAndBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int
     */
    protected $invoiceId;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $body;
    /**
     * @var bool
     */
    protected $reminder;
    /**
     * @var bool
     */
    protected $thankYou;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(int $invoiceId): self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    public function getReminder(): bool
    {
        return $this->reminder;
    }

    public function setReminder(bool $reminder): self
    {
        $this->initialized['reminder'] = true;
        $this->reminder = $reminder;

        return $this;
    }

    public function getThankYou(): bool
    {
        return $this->thankYou;
    }

    public function setThankYou(bool $thankYou): self
    {
        $this->initialized['thankYou'] = true;
        $this->thankYou = $thankYou;

        return $this;
    }
}

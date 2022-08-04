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

class InvoiceMessageRecipient
{
    /**
     * Name of the message recipient.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Email of the message recipient.
     *
     * @var string|null
     */
    protected $email;

    /**
     * Name of the message recipient.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the message recipient.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Email of the message recipient.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email of the message recipient.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}

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

class ContactsContactIdPatchBody
{
    /**
     * The ID of the client associated with this contact.
     *
     * @var int|null
     */
    protected $clientId;
    /**
     * The title of the contact.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The first name of the contact.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The last name of the contact.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The contact’s email address.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The contact’s office phone number.
     *
     * @var string|null
     */
    protected $phoneOffice;
    /**
     * The contact’s mobile phone number.
     *
     * @var string|null
     */
    protected $phoneMobile;
    /**
     * The contact’s fax number.
     *
     * @var string|null
     */
    protected $fax;

    /**
     * The ID of the client associated with this contact.
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * The ID of the client associated with this contact.
     */
    public function setClientId(?int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * The title of the contact.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The title of the contact.
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The first name of the contact.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The first name of the contact.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the contact.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The last name of the contact.
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The contact’s email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The contact’s email address.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The contact’s office phone number.
     */
    public function getPhoneOffice(): ?string
    {
        return $this->phoneOffice;
    }

    /**
     * The contact’s office phone number.
     */
    public function setPhoneOffice(?string $phoneOffice): self
    {
        $this->phoneOffice = $phoneOffice;

        return $this;
    }

    /**
     * The contact’s mobile phone number.
     */
    public function getPhoneMobile(): ?string
    {
        return $this->phoneMobile;
    }

    /**
     * The contact’s mobile phone number.
     */
    public function setPhoneMobile(?string $phoneMobile): self
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * The contact’s fax number.
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * The contact’s fax number.
     */
    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }
}

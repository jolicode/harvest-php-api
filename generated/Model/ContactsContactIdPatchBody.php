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

class ContactsContactIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

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
        $this->initialized['clientId'] = true;
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
        $this->initialized['title'] = true;
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
        $this->initialized['firstName'] = true;
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
        $this->initialized['lastName'] = true;
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
        $this->initialized['email'] = true;
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
        $this->initialized['phoneOffice'] = true;
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
        $this->initialized['phoneMobile'] = true;
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
        $this->initialized['fax'] = true;
        $this->fax = $fax;

        return $this;
    }
}

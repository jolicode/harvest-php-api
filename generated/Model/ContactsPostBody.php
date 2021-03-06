<?php

namespace JoliCode\Harvest\Api\Model;

class ContactsPostBody
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
     *
     * @return int|null
     */
    public function getClientId() : ?int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with this contact.
     *
     * @param int|null $clientId
     *
     * @return self
     */
    public function setClientId(?int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The title of the contact.
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * The title of the contact.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The first name of the contact.
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * The first name of the contact.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The last name of the contact.
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * The last name of the contact.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The contact’s email address.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The contact’s email address.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The contact’s office phone number.
     *
     * @return string|null
     */
    public function getPhoneOffice() : ?string
    {
        return $this->phoneOffice;
    }
    /**
     * The contact’s office phone number.
     *
     * @param string|null $phoneOffice
     *
     * @return self
     */
    public function setPhoneOffice(?string $phoneOffice) : self
    {
        $this->phoneOffice = $phoneOffice;
        return $this;
    }
    /**
     * The contact’s mobile phone number.
     *
     * @return string|null
     */
    public function getPhoneMobile() : ?string
    {
        return $this->phoneMobile;
    }
    /**
     * The contact’s mobile phone number.
     *
     * @param string|null $phoneMobile
     *
     * @return self
     */
    public function setPhoneMobile(?string $phoneMobile) : self
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }
    /**
     * The contact’s fax number.
     *
     * @return string|null
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }
    /**
     * The contact’s fax number.
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
}
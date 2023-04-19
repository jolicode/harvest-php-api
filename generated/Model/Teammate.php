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

class Teammate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the teammate.
     *
     * @var mixed|null
     */
    protected $id;
    /**
     * The first name of the teammate.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The last name of the teammate.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The email of the teammate.
     *
     * @var string|null
     */
    protected $email;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the teammate.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique ID for the teammate.
     *
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The first name of the teammate.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The first name of the teammate.
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the teammate.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The last name of the teammate.
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The email of the teammate.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email of the teammate.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}

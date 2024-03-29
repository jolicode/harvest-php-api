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

class Client extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the client.
     *
     * @var int|null
     */
    protected $id;
    /**
     * A textual description of the client.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Whether the client is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The physical address for the client.
     *
     * @var string|null
     */
    protected $address;
    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/statements/{STATEMENT_KEY}.
     *
     * @var string|null
     */
    protected $statementKey;
    /**
     * The currency code associated with this client.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Date and time the client was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the client was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the client.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the client.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * A textual description of the client.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * A textual description of the client.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the client is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the client is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The physical address for the client.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * The physical address for the client.
     */
    public function setAddress(?string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/statements/{STATEMENT_KEY}.
     */
    public function getStatementKey(): ?string
    {
        return $this->statementKey;
    }

    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/statements/{STATEMENT_KEY}.
     */
    public function setStatementKey(?string $statementKey): self
    {
        $this->initialized['statementKey'] = true;
        $this->statementKey = $statementKey;

        return $this;
    }

    /**
     * The currency code associated with this client.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency code associated with this client.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Date and time the client was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the client was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the client was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the client was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

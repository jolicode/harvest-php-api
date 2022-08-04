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

class ClientsClientIdPatchBody
{
    /**
     * A textual description of the client.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Whether the client is active, or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * A textual representation of the client’s physical address. May include new line characters.
     *
     * @var string|null
     */
    protected $address;
    /**
     * The currency used by the client. See a list of supported currencies.
     *
     * @var string|null
     */
    protected $currency;

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
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the client is active, or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the client is active, or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * A textual representation of the client’s physical address. May include new line characters.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * A textual representation of the client’s physical address. May include new line characters.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * The currency used by the client. See a list of supported currencies.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The currency used by the client. See a list of supported currencies.
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}

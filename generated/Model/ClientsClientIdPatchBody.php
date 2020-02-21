<?php

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
     * The currency used by the client. See a list of supported currencies
     *
     * @var string|null
     */
    protected $currency;
    /**
     * A textual description of the client.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * A textual description of the client.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Whether the client is active, or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the client is active, or archived.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * A textual representation of the client’s physical address. May include new line characters.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * A textual representation of the client’s physical address. May include new line characters.
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The currency used by the client. See a list of supported currencies
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * The currency used by the client. See a list of supported currencies
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}
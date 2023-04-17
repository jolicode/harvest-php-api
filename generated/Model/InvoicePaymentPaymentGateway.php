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

class InvoicePaymentPaymentGateway extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}

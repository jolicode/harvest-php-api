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

class ExpenseCategory extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the expense category.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the expense category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The unit name of the expense category.
     *
     * @var string|null
     */
    protected $unitName;
    /**
     * The unit price of the expense category.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * Whether the expense category is active or archived.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Date and time the expense category was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the expense category was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the expense category.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the expense category.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the expense category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the expense category.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The unit name of the expense category.
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * The unit name of the expense category.
     */
    public function setUnitName(?string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * The unit price of the expense category.
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    /**
     * The unit price of the expense category.
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Whether the expense category is active or archived.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the expense category is active or archived.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Date and time the expense category was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the expense category was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the expense category was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the expense category was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

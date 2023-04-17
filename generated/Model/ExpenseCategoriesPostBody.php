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

class ExpenseCategoriesPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * Whether the expense category is active or archived. Defaults to true.
     *
     * @var bool|null
     */
    protected $isActive;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
     * Whether the expense category is active or archived. Defaults to true.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Whether the expense category is active or archived. Defaults to true.
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }
}

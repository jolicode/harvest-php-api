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

class EstimateLineItem
{
    /**
     * Unique ID for the line item.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of an estimate item category.
     *
     * @var string|null
     */
    protected $kind;
    /**
     * Text description of the line item.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The unit quantity of the item.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The individual price per unit.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * The line item subtotal (quantity * unit_price).
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Whether the estimate’s tax percentage applies to this line item.
     *
     * @var bool|null
     */
    protected $taxed;
    /**
     * Whether the estimate’s tax2 percentage applies to this line item.
     *
     * @var bool|null
     */
    protected $taxed2;

    /**
     * Unique ID for the line item.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the line item.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of an estimate item category.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * The name of an estimate item category.
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Text description of the line item.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Text description of the line item.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The unit quantity of the item.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * The unit quantity of the item.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The individual price per unit.
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    /**
     * The individual price per unit.
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * The line item subtotal (quantity * unit_price).
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The line item subtotal (quantity * unit_price).
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Whether the estimate’s tax percentage applies to this line item.
     */
    public function getTaxed(): ?bool
    {
        return $this->taxed;
    }

    /**
     * Whether the estimate’s tax percentage applies to this line item.
     */
    public function setTaxed(?bool $taxed): self
    {
        $this->taxed = $taxed;

        return $this;
    }

    /**
     * Whether the estimate’s tax2 percentage applies to this line item.
     */
    public function getTaxed2(): ?bool
    {
        return $this->taxed2;
    }

    /**
     * Whether the estimate’s tax2 percentage applies to this line item.
     */
    public function setTaxed2(?bool $taxed2): self
    {
        $this->taxed2 = $taxed2;

        return $this;
    }
}

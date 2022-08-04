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

class InvoicesInvoiceIdPatchBodyLineItemsItem
{
    /**
     * Unique ID for the line item.
     *
     * @var int
     */
    protected $id;
    /**
     * The ID of the project associated with this line item.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The name of an invoice item category.
     *
     * @var string
     */
    protected $kind;
    /**
     * Text description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * The unit quantity of the item. Defaults to 1.
     *
     * @var float
     */
    protected $quantity;
    /**
     * The individual price per unit.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @var bool
     */
    protected $taxed;
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @var bool
     */
    protected $taxed2;

    /**
     * Unique ID for the line item.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Unique ID for the line item.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the project associated with this line item.
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * The ID of the project associated with this line item.
     */
    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * The name of an invoice item category.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * The name of an invoice item category.
     */
    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Text description of the line item.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Text description of the line item.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The unit quantity of the item. Defaults to 1.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * The unit quantity of the item. Defaults to 1.
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The individual price per unit.
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * The individual price per unit.
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     */
    public function getTaxed(): bool
    {
        return $this->taxed;
    }

    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     */
    public function setTaxed(bool $taxed): self
    {
        $this->taxed = $taxed;

        return $this;
    }

    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     */
    public function getTaxed2(): bool
    {
        return $this->taxed2;
    }

    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     */
    public function setTaxed2(bool $taxed2): self
    {
        $this->taxed2 = $taxed2;

        return $this;
    }
}

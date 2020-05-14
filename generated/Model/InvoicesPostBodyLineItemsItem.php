<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesPostBodyLineItemsItem
{
    /**
     * The ID of the project associated with this line item.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * The name of an invoice item category.
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
     * The unit quantity of the item. Defaults to 1.
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
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @var bool|null
     */
    protected $taxed;
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @var bool|null
     */
    protected $taxed2;
    /**
     * The ID of the project associated with this line item.
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with this line item.
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The name of an invoice item category.
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * The name of an invoice item category.
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Text description of the line item.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Text description of the line item.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The unit quantity of the item. Defaults to 1.
     *
     * @return float|null
     */
    public function getQuantity() : ?float
    {
        return $this->quantity;
    }
    /**
     * The unit quantity of the item. Defaults to 1.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The individual price per unit.
     *
     * @return float|null
     */
    public function getUnitPrice() : ?float
    {
        return $this->unitPrice;
    }
    /**
     * The individual price per unit.
     *
     * @param float|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @return bool|null
     */
    public function getTaxed() : ?bool
    {
        return $this->taxed;
    }
    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @param bool|null $taxed
     *
     * @return self
     */
    public function setTaxed(?bool $taxed) : self
    {
        $this->taxed = $taxed;
        return $this;
    }
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @return bool|null
     */
    public function getTaxed2() : ?bool
    {
        return $this->taxed2;
    }
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @param bool|null $taxed2
     *
     * @return self
     */
    public function setTaxed2(?bool $taxed2) : self
    {
        $this->taxed2 = $taxed2;
        return $this;
    }
}
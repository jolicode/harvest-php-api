<?php

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
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the line item.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The ID of the project associated with this line item.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with this line item.
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The name of an invoice item category.
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * The name of an invoice item category.
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Text description of the line item.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Text description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The unit quantity of the item. Defaults to 1.
     *
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->quantity;
    }
    /**
     * The unit quantity of the item. Defaults to 1.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The individual price per unit.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The individual price per unit.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @return bool
     */
    public function getTaxed() : bool
    {
        return $this->taxed;
    }
    /**
     * Whether the invoice’s tax percentage applies to this line item. Defaults to false.
     *
     * @param bool $taxed
     *
     * @return self
     */
    public function setTaxed(bool $taxed) : self
    {
        $this->taxed = $taxed;
        return $this;
    }
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @return bool
     */
    public function getTaxed2() : bool
    {
        return $this->taxed2;
    }
    /**
     * Whether the invoice’s tax2 percentage applies to this line item. Defaults to false.
     *
     * @param bool $taxed2
     *
     * @return self
     */
    public function setTaxed2(bool $taxed2) : self
    {
        $this->taxed2 = $taxed2;
        return $this;
    }
}
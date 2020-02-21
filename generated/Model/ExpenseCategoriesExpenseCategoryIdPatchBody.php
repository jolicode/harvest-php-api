<?php

namespace JoliCode\Harvest\Api\Model;

class ExpenseCategoriesExpenseCategoryIdPatchBody
{
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
     * The name of the expense category.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the expense category.
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
     * The unit name of the expense category.
     *
     * @return string|null
     */
    public function getUnitName() : ?string
    {
        return $this->unitName;
    }
    /**
     * The unit name of the expense category.
     *
     * @param string|null $unitName
     *
     * @return self
     */
    public function setUnitName(?string $unitName) : self
    {
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * The unit price of the expense category.
     *
     * @return float|null
     */
    public function getUnitPrice() : ?float
    {
        return $this->unitPrice;
    }
    /**
     * The unit price of the expense category.
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
     * Whether the expense category is active or archived.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the expense category is active or archived.
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
}
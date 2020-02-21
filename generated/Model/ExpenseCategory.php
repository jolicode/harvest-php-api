<?php

namespace JoliCode\Harvest\Api\Model;

class ExpenseCategory
{
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
    /**
     * Unique ID for the expense category.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the expense category.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
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
    /**
     * Date and time the expense category was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the expense category was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the expense category was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the expense category was last updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
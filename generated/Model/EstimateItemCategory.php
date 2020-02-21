<?php

namespace JoliCode\Harvest\Api\Model;

class EstimateItemCategory
{
    /**
     * Unique ID for the estimate item category.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the estimate item category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Date and time the estimate item category was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the estimate item category was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the estimate item category.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the estimate item category.
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
     * The name of the estimate item category.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the estimate item category.
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
     * Date and time the estimate item category was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the estimate item category was created.
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
     * Date and time the estimate item category was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the estimate item category was last updated.
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
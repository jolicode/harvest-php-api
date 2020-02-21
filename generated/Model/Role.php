<?php

namespace JoliCode\Harvest\Api\Model;

class Role
{
    /**
     * Unique ID for the role.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the role.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The IDs of the users assigned to this role.
     *
     * @var int[]|null
     */
    protected $userIds;
    /**
     * Date and time the role was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the role was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Unique ID for the role.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Unique ID for the role.
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
     * The name of the role.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the role.
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
     * The IDs of the users assigned to this role.
     *
     * @return int[]|null
     */
    public function getUserIds() : ?array
    {
        return $this->userIds;
    }
    /**
     * The IDs of the users assigned to this role.
     *
     * @param int[]|null $userIds
     *
     * @return self
     */
    public function setUserIds(?array $userIds) : self
    {
        $this->userIds = $userIds;
        return $this;
    }
    /**
     * Date and time the role was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the role was created.
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
     * Date and time the role was last updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the role was last updated.
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
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

class Role extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * @var list<int>|null
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the role.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the role.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the role.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the role.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The IDs of the users assigned to this role.
     *
     * @return list<int>|null
     */
    public function getUserIds(): ?array
    {
        return $this->userIds;
    }

    /**
     * The IDs of the users assigned to this role.
     *
     * @param list<int>|null $userIds
     */
    public function setUserIds(?array $userIds): self
    {
        $this->initialized['userIds'] = true;
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * Date and time the role was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the role was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the role was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the role was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

<?php

namespace JoliCode\Harvest\Api\Model;

class RolesPostBody
{
    /**
     * The  name of the role.
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
     * The  name of the role.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The  name of the role.
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
}
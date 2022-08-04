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

class RolesRoleIdPatchBody
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
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The  name of the role.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The IDs of the users assigned to this role.
     *
     * @return int[]|null
     */
    public function getUserIds(): ?array
    {
        return $this->userIds;
    }

    /**
     * The IDs of the users assigned to this role.
     *
     * @param int[]|null $userIds
     */
    public function setUserIds(?array $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }
}

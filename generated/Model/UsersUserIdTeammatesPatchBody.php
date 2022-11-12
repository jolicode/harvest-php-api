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

class UsersUserIdTeammatesPatchBody
{
    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @var mixed|null
     */
    protected $teammateIds;

    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @return mixed
     */
    public function getTeammateIds()
    {
        return $this->teammateIds;
    }

    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @param mixed $teammateIds
     */
    public function setTeammateIds($teammateIds): self
    {
        $this->teammateIds = $teammateIds;

        return $this;
    }
}

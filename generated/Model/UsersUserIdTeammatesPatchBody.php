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

class UsersUserIdTeammatesPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @var list<string>|null
     */
    protected $teammateIds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @return list<string>|null
     */
    public function getTeammateIds(): ?array
    {
        return $this->teammateIds;
    }

    /**
     * Full list of user IDs to be assigned to the Manager.
     *
     * @param list<string>|null $teammateIds
     */
    public function setTeammateIds(?array $teammateIds): self
    {
        $this->initialized['teammateIds'] = true;
        $this->teammateIds = $teammateIds;

        return $this;
    }
}

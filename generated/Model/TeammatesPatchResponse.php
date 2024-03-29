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

class TeammatesPatchResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Teammate>
     */
    protected $teammates;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Teammate>
     */
    public function getTeammates(): array
    {
        return $this->teammates;
    }

    /**
     * @param list<Teammate> $teammates
     */
    public function setTeammates(array $teammates): self
    {
        $this->initialized['teammates'] = true;
        $this->teammates = $teammates;

        return $this;
    }
}

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

class TeammatesPatchResponse
{
    /**
     * @var Teammate[]
     */
    protected $teammates;

    /**
     * @return Teammate[]
     */
    public function getTeammates(): array
    {
        return $this->teammates;
    }

    /**
     * @param Teammate[] $teammates
     */
    public function setTeammates(array $teammates): self
    {
        $this->teammates = $teammates;

        return $this;
    }
}

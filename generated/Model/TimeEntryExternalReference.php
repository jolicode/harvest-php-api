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

class TimeEntryExternalReference
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $groupId;
    /**
     * @var string|null
     */
    protected $accountId;
    /**
     * @var string|null
     */
    protected $permalink;
    /**
     * @var string|null
     */
    protected $service;
    /**
     * @var string|null
     */
    protected $serviceIconUrl;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getPermalink(): ?string
    {
        return $this->permalink;
    }

    public function setPermalink(?string $permalink): self
    {
        $this->permalink = $permalink;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getServiceIconUrl(): ?string
    {
        return $this->serviceIconUrl;
    }

    public function setServiceIconUrl(?string $serviceIconUrl): self
    {
        $this->serviceIconUrl = $serviceIconUrl;

        return $this;
    }
}

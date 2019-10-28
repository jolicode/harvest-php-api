<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesTimeEntryIdPatchBodyExternalReference
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $groupId;
    /**
     * @var string
     */
    protected $permalink;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string|null $groupId
     *
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPermalink(): ?string
    {
        return $this->permalink;
    }

    /**
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink): self
    {
        $this->permalink = $permalink;

        return $this;
    }
}

<?php

namespace JoliCode\Harvest\Api\Model;

class TimeEntriesTimeEntryIdPatchBodyExternalReference
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $groupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $permalink;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * 
     *
     * @param string|null $groupId
     *
     * @return self
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountId() : ?string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string|null $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId) : self
    {
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}
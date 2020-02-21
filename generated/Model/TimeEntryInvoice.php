<?php

namespace JoliCode\Harvest\Api\Model;

class TimeEntryInvoice
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $number;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
}
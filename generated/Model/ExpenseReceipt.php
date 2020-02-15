<?php

namespace JoliCode\Harvest\Api\Model;

class ExpenseReceipt
{
    /**
     * 
     *
     * @var string|null
     */
    protected $uRL;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @return string|null
     */
    public function getURL() : ?string
    {
        return $this->uRL;
    }
    /**
     * 
     *
     * @param string|null $uRL
     *
     * @return self
     */
    public function setURL(?string $uRL) : self
    {
        $this->uRL = $uRL;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class Error
{
    /**
     * 
     *
     * @var int|null
     */
    protected $code;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @return int|null
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}
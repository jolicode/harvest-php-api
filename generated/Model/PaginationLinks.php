<?php

namespace JoliCode\Harvest\Api\Model;

class PaginationLinks
{
    /**
     * First page
     *
     * @var string
     */
    protected $first;
    /**
     * Last page
     *
     * @var string
     */
    protected $last;
    /**
     * Previous page
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Next page
     *
     * @var string|null
     */
    protected $next;
    /**
     * First page
     *
     * @return string
     */
    public function getFirst() : string
    {
        return $this->first;
    }
    /**
     * First page
     *
     * @param string $first
     *
     * @return self
     */
    public function setFirst(string $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * Last page
     *
     * @return string
     */
    public function getLast() : string
    {
        return $this->last;
    }
    /**
     * Last page
     *
     * @param string $last
     *
     * @return self
     */
    public function setLast(string $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * Previous page
     *
     * @return string|null
     */
    public function getPrevious() : ?string
    {
        return $this->previous;
    }
    /**
     * Previous page
     *
     * @param string|null $previous
     *
     * @return self
     */
    public function setPrevious(?string $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
    /**
     * Next page
     *
     * @return string|null
     */
    public function getNext() : ?string
    {
        return $this->next;
    }
    /**
     * Next page
     *
     * @param string|null $next
     *
     * @return self
     */
    public function setNext(?string $next) : self
    {
        $this->next = $next;
        return $this;
    }
}
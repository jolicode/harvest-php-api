<?php

namespace JoliCode\Harvest\Api\Model;

class BillableRates
{
    /**
     * 
     *
     * @var BillableRate[]
     */
    protected $billableRates;
    /**
     * 
     *
     * @var int
     */
    protected $perPage;
    /**
     * 
     *
     * @var int
     */
    protected $totalPages;
    /**
     * 
     *
     * @var int
     */
    protected $totalEntries;
    /**
     * 
     *
     * @var int|null
     */
    protected $nextPage;
    /**
     * 
     *
     * @var int|null
     */
    protected $previousPage;
    /**
     * 
     *
     * @var int
     */
    protected $page;
    /**
     * 
     *
     * @var PaginationLinks
     */
    protected $links;
    /**
     * 
     *
     * @return BillableRate[]
     */
    public function getBillableRates() : array
    {
        return $this->billableRates;
    }
    /**
     * 
     *
     * @param BillableRate[] $billableRates
     *
     * @return self
     */
    public function setBillableRates(array $billableRates) : self
    {
        $this->billableRates = $billableRates;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(int $perPage) : self
    {
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }
    /**
     * 
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages) : self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalEntries() : int
    {
        return $this->totalEntries;
    }
    /**
     * 
     *
     * @param int $totalEntries
     *
     * @return self
     */
    public function setTotalEntries(int $totalEntries) : self
    {
        $this->totalEntries = $totalEntries;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNextPage() : ?int
    {
        return $this->nextPage;
    }
    /**
     * 
     *
     * @param int|null $nextPage
     *
     * @return self
     */
    public function setNextPage(?int $nextPage) : self
    {
        $this->nextPage = $nextPage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreviousPage() : ?int
    {
        return $this->previousPage;
    }
    /**
     * 
     *
     * @param int|null $previousPage
     *
     * @return self
     */
    public function setPreviousPage(?int $previousPage) : self
    {
        $this->previousPage = $previousPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * 
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * 
     *
     * @return PaginationLinks
     */
    public function getLinks() : PaginationLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PaginationLinks $links
     *
     * @return self
     */
    public function setLinks(PaginationLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}
<?php

namespace JoliCode\Harvest\Api\Model;

class ReportsProjectBudgetGetBody
{
    /**
     * The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *
     * @var int|null
     */
    protected $page;
    /**
     * The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     *
     * @var int|null
     */
    protected $perPage;
    /**
     * The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *
     * @return int|null
     */
    public function getPage() : ?int
    {
        return $this->page;
    }
    /**
     * The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *
     * @param int|null $page
     *
     * @return self
     */
    public function setPage(?int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     *
     * @return int|null
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * The number of records to return per page. Can range between 1 and 1000.  (Default: 1000)
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->perPage = $perPage;
        return $this;
    }
}
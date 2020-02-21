<?php

namespace JoliCode\Harvest\Api\Model;

class ReportsTimeProjectsGetBody
{
    /**
     * Only report on time entries with a spent_date on or after the given date.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * Only report on time entries with a spent_date on or before the given date.
     *
     * @var \DateTime|null
     */
    protected $to;
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
     * Only report on time entries with a spent_date on or after the given date.
     *
     * @return \DateTime|null
     */
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    /**
     * Only report on time entries with a spent_date on or after the given date.
     *
     * @param \DateTime|null $from
     *
     * @return self
     */
    public function setFrom(?\DateTime $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * Only report on time entries with a spent_date on or before the given date.
     *
     * @return \DateTime|null
     */
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    /**
     * Only report on time entries with a spent_date on or before the given date.
     *
     * @param \DateTime|null $to
     *
     * @return self
     */
    public function setTo(?\DateTime $to) : self
    {
        $this->to = $to;
        return $this;
    }
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
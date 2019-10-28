<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Model;

class InvoiceItemCategories
{
    /**
     * @var InvoiceItemCategory[]
     */
    protected $invoiceItemCategories;
    /**
     * @var int
     */
    protected $perPage;
    /**
     * @var int
     */
    protected $totalPages;
    /**
     * @var int
     */
    protected $totalEntries;
    /**
     * @var int
     */
    protected $nextPage;
    /**
     * @var int
     */
    protected $previousPage;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var PaginationLinks
     */
    protected $links;

    /**
     * @return InvoiceItemCategory[]|null
     */
    public function getInvoiceItemCategories(): ?array
    {
        return $this->invoiceItemCategories;
    }

    /**
     * @param InvoiceItemCategory[]|null $invoiceItemCategories
     *
     * @return self
     */
    public function setInvoiceItemCategories(?array $invoiceItemCategories): self
    {
        $this->invoiceItemCategories = $invoiceItemCategories;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * @param int|null $totalPages
     *
     * @return self
     */
    public function setTotalPages(?int $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalEntries(): ?int
    {
        return $this->totalEntries;
    }

    /**
     * @param int|null $totalEntries
     *
     * @return self
     */
    public function setTotalEntries(?int $totalEntries): self
    {
        $this->totalEntries = $totalEntries;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    /**
     * @param int|null $nextPage
     *
     * @return self
     */
    public function setNextPage(?int $nextPage): self
    {
        $this->nextPage = $nextPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPreviousPage(): ?int
    {
        return $this->previousPage;
    }

    /**
     * @param int|null $previousPage
     *
     * @return self
     */
    public function setPreviousPage(?int $previousPage): self
    {
        $this->previousPage = $previousPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     *
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return PaginationLinks|null
     */
    public function getLinks(): ?PaginationLinks
    {
        return $this->links;
    }

    /**
     * @param PaginationLinks|null $links
     *
     * @return self
     */
    public function setLinks(?PaginationLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}

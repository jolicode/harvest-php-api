<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Model;

class PaginationLinks extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * First page.
     *
     * @var string
     */
    protected $first;
    /**
     * Last page.
     *
     * @var string
     */
    protected $last;
    /**
     * Previous page.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Next page.
     *
     * @var string|null
     */
    protected $next;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * First page.
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * First page.
     */
    public function setFirst(string $first): self
    {
        $this->initialized['first'] = true;
        $this->first = $first;

        return $this;
    }

    /**
     * Last page.
     */
    public function getLast(): string
    {
        return $this->last;
    }

    /**
     * Last page.
     */
    public function setLast(string $last): self
    {
        $this->initialized['last'] = true;
        $this->last = $last;

        return $this;
    }

    /**
     * Previous page.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Previous page.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Next page.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Next page.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }
}

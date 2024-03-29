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

class InvoicesPostBodyLineItemsImport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @var list<int>
     */
    protected $projectIds;
    /**
     * An time import object.
     *
     * @var InvoicesPostBodyLineItemsImportTime
     */
    protected $time;
    /**
     * An expense import object.
     *
     * @var InvoicesPostBodyLineItemsImportExpenses
     */
    protected $expenses;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @return list<int>
     */
    public function getProjectIds(): array
    {
        return $this->projectIds;
    }

    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @param list<int> $projectIds
     */
    public function setProjectIds(array $projectIds): self
    {
        $this->initialized['projectIds'] = true;
        $this->projectIds = $projectIds;

        return $this;
    }

    /**
     * An time import object.
     */
    public function getTime(): InvoicesPostBodyLineItemsImportTime
    {
        return $this->time;
    }

    /**
     * An time import object.
     */
    public function setTime(InvoicesPostBodyLineItemsImportTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    /**
     * An expense import object.
     */
    public function getExpenses(): InvoicesPostBodyLineItemsImportExpenses
    {
        return $this->expenses;
    }

    /**
     * An expense import object.
     */
    public function setExpenses(InvoicesPostBodyLineItemsImportExpenses $expenses): self
    {
        $this->initialized['expenses'] = true;
        $this->expenses = $expenses;

        return $this;
    }
}

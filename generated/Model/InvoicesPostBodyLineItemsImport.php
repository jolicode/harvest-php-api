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

class InvoicesPostBodyLineItemsImport
{
    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @var int[]
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

    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @return int[]
     */
    public function getProjectIds(): array
    {
        return $this->projectIds;
    }

    /**
     * An array of the client’s project IDs you’d like to include time/expenses from.
     *
     * @param int[] $projectIds
     */
    public function setProjectIds(array $projectIds): self
    {
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
        $this->expenses = $expenses;

        return $this;
    }
}

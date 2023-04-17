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

class CostRate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique ID for the cost rate.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The amount of the cost rate.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The date the cost rate is effective.
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * Date and time the cost rate was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the cost rate was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique ID for the cost rate.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the cost rate.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The amount of the cost rate.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * The amount of the cost rate.
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * The date the cost rate is effective.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * The date the cost rate is effective.
     */
    public function setStartDate(?\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * The date the cost rate is no longer effective. This date is calculated by Harvest.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Date and time the cost rate was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the cost rate was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the cost rate was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the cost rate was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

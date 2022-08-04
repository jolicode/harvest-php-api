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

class InvoiceItemCategory
{
    /**
     * Unique ID for the invoice item category.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the invoice item category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Whether this invoice item category is used for billable hours when generating an invoice.
     *
     * @var bool|null
     */
    protected $useAsService;
    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     *
     * @var bool|null
     */
    protected $useAsExpense;
    /**
     * Date and time the invoice item category was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Date and time the invoice item category was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * Unique ID for the invoice item category.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Unique ID for the invoice item category.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the invoice item category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the invoice item category.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Whether this invoice item category is used for billable hours when generating an invoice.
     */
    public function getUseAsService(): ?bool
    {
        return $this->useAsService;
    }

    /**
     * Whether this invoice item category is used for billable hours when generating an invoice.
     */
    public function setUseAsService(?bool $useAsService): self
    {
        $this->useAsService = $useAsService;

        return $this;
    }

    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     */
    public function getUseAsExpense(): ?bool
    {
        return $this->useAsExpense;
    }

    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     */
    public function setUseAsExpense(?bool $useAsExpense): self
    {
        $this->useAsExpense = $useAsExpense;

        return $this;
    }

    /**
     * Date and time the invoice item category was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date and time the invoice item category was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time the invoice item category was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Date and time the invoice item category was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

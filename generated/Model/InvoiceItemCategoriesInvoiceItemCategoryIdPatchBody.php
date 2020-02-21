<?php

namespace JoliCode\Harvest\Api\Model;

class InvoiceItemCategoriesInvoiceItemCategoryIdPatchBody
{
    /**
     * The name of the invoice item category.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The name of the invoice item category.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the invoice item category.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}
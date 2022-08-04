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

class EstimateItemCategoriesEstimateItemCategoryIdPatchBody
{
    /**
     * The name of the estimate item category.
     *
     * @var string|null
     */
    protected $name;

    /**
     * The name of the estimate item category.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the estimate item category.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

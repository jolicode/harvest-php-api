<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest;

use Jane\OpenApiRuntime\Client\CustomQueryResolver;
use Symfony\Component\OptionsResolver\Options;

class BooleanCustomQueryResolver implements CustomQueryResolver
{
    public function __invoke(Options $options, $value)
    {
        return $value ? 'true' : 'false';
    }
}

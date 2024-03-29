<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace qa;

use Castor\Attribute\AsOption;
use Castor\Attribute\AsTask;

use function Castor\run;

#[AsTask(description: 'Fix CS', aliases: ['cs'])]
function cs(
    #[AsOption(description: 'Only shows which files would have been modified.')]
    bool $dryRun,
): int {
    $command = [__DIR__.'/vendor/bin/php-cs-fixer', 'fix', '--config', \dirname(__DIR__, 2).'/.php-cs-fixer.php'];

    if ($dryRun) {
        $command[] = '--dry-run';
    }

    return run($command, allowFailure: true)->getExitCode();
}

#[AsTask(description: 'Update php-cs-fixer')]
function update(): int
{
    $command = ['composer', 'update', '-o', '--working-dir', __DIR__];

    return run($command)->getExitCode();
}

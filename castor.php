<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace sdk;

use Castor\Attribute\AsTask;

use function Castor\exit_code;
use function Castor\fs;
use function Castor\import;
use function Castor\io;
use function Castor\request;

import(__DIR__.'/tools/php-cs-fixer/castor.php');

const SPEC_URL = 'https://raw.githubusercontent.com/jolicode/harvest-openapi-generator/master/generated/harvest-openapi.yaml';

#[AsTask(description: 'Downloads the last specification and re-generates the SDK', aliases: ['update'])]
function update(): int
{
    update_specification();

    return generate();
}

#[AsTask(description: 'Downloads the last specification from Github')]
function update_specification(): void
{
    io()->comment(sprintf('Download the spec from %s', SPEC_URL));
    fs()->dumpFile(
        'Resources/harvest-openapi.yaml',
        request('GET', SPEC_URL)->getContent()
    );
    io()->success('Successfully updated the OpenAPI specification file.');
}

#[AsTask(description: 'Re-generates the SDK using the local specification')]
function generate(): int
{
    io()->comment('Generating the SDK using Jane OpenAPI...');
    $result = exit_code('./vendor/bin/jane-openapi generate -c .jane-openapi.php');

    if (0 !== $result) {
        io()->error('An error occurred while generating the SDK.');
    } else {
        io()->success('Successfully generated the SDK');
    }

    return $result;
}

#[AsTask(description: 'Runs the test suite', namespace: 'qa')]
function test(): int
{
    return exit_code('./vendor/bin/simple-phpunit');
}

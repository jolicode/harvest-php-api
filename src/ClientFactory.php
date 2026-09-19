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

use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use JoliCode\Harvest\Api\Authentication\AccountAuthAuthentication;
use JoliCode\Harvest\Api\Authentication\BearerAuthAuthentication;
use JoliCode\Harvest\Api\Client;
use Psr\Http\Client\ClientInterface;

/**
 * @deprecated since 9.1.0, this package is no longer maintained, see https://github.com/jolicode/harvest-php-api#why-this-project-is-no-longer-maintained
 */
class ClientFactory
{
    public static function create(string $token, string $accountId, ?ClientInterface $httpClient = null): Client
    {
        @trigger_error('The "jolicode/harvest-php-api" package is deprecated and no longer maintained, see https://github.com/jolicode/harvest-php-api#why-this-project-is-no-longer-maintained', \E_USER_DEPRECATED);

        return Client::create($httpClient, [
            new HeaderAppendPlugin([
                'User-Agent' => 'Harvest API Example',
                'Accept' => 'application/json',
            ]),
            new AuthenticationRegistry([
                new AccountAuthAuthentication($accountId),
                new BearerAuthAuthentication('Bearer ' . $token),
            ]),
        ]);
    }
}

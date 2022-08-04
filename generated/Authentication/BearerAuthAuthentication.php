<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Harvest\Api\Authentication;

class BearerAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('Authorization', $this->{'apiKey'});

        return $request;
    }

    public function getScope(): string
    {
        return 'BearerAuth';
    }
}

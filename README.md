# [DEPRECATED] A PHP Client for Harvest API

> [!CAUTION]
> **This project is deprecated and no longer maintained.** Version 9.1.0 is the
> final release: there will be no further updates, bug fixes or security fixes,
> and this repository is archived. We no longer use Harvest and no longer
> recommend using this library. [Read why](#why-this-project-is-no-longer-maintained).

## Why this project is no longer maintained

JoliCode had been a Harvest customer for 14 years. We created this SDK in 2019
and kept it in sync with Harvest's API ever since, as an open source
contribution to the PHP ecosystem.

In early August 2026, we were informed that the price of our subscription
would be **multiplied by 12**, with only a few weeks' notice, in the middle of
the summer, and without any meaningful change in the features provided.

We consider that a vendor changing its pricing in such proportions, with such
short notice, is not a partner we can rely on in the long run. We have
therefore moved away from Harvest entirely, and have no reason left to
maintain this library.

What this means:

 * no more releases: the SDK will not follow future changes of the Harvest API;
 * no support: issues and pull requests are closed, the repository is read-only;
 * the package is flagged as `abandoned` on Packagist: Composer warns on
   install, and `composer audit` reports it.

If you are a Harvest customer, we encourage you to evaluate alternatives. If
you still need this library, it remains available under the MIT license: feel
free to fork it, along with the
[OpenAPI specification generator](https://github.com/jolicode/harvest-openapi-generator/)
it is built from.

## Legacy documentation

The following documentation is kept for reference only.

[Harvest](https://www.getharvest.com/) is a time tracking and invoicing tool.

This PHP SDK was generated automatically with [JanePHP](https://github.com/janephp/janephp) using a [Harvest OpenAPI specification](https://github.com/jolicode/harvest-openapi-generator/) generated from the HTML documentation. As of version 9.1.0, all the API endpoints and parameters documented by Harvest were supported. See the [list of available endpoints](doc/index.md#available-operations).

The API was tested against the examples provided by the Harvest API documentation.

### Installation

This library is built atop of [PSR-7](https://www.php-fig.org/psr/psr-7/) and
[PSR-18](https://www.php-fig.org/psr/psr-18/). So you will need to install some
implementations for those interfaces.

If no PSR-18 client or PSR-7 message factory is available yet in your project
or you don't know or don't care which one to use, just install some default:

```bash
composer require symfony/http-client nyholm/psr7
```

You can now install the Harvest client:

```bash
composer require jolicode/harvest-php-api
```

### Usage

First, you need to retrieve an access token. Please checkout Harvest's documentation about the [OAuth2 Authorization Flow](https://help.getharvest.com/api-v2/authentication-api/authentication/authentication/#for-server-side-applications).

Then, use the factory that is provided to create the client:

```php
// $harvestClient contains all the methods to interact with the API
$harvestClient = JoliCode\Harvest\ClientFactory::create(
  $accessToken,
  $harvestAccountId
);

$clients = $harvestClient->listClients([
  'is_active' => true,
])->getClients();

dump($clients);
```

Want more example or documentation? See the [documentation](doc/index.md), which lists all the available methods.

### Further documentation

You can see the past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/harvest-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.

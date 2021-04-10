# A PHP Client for Harvest API

![example workflow](https://github.com/jolicode/harvest-php-api/actions/workflows/tests.yml/badge.svg)

[Harvest](https://www.getharvest.com/) is a time tracking and invoicing tool.

This PHP SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp) using a [Harvest OpenAPI specification](https://github.com/jolicode/harvest-openapi-generator/) generated from the HTML documentation. It means that:

 * all the API endpoints and parameters are supported. See the [list of available endpoints](doc/index.md#available-operations);
 * when the documentation changes, it is easy to update the library and keep up-to-date.

The API is tested against the examples provided by the Harvest API documentation.

## Installation

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

## Usage

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

## Troubleshoot

Got some problems using this library? Need a missing feature?
Do not hesitate to [open an issue](https://github.com/jolicode/harvest-php-api/issues)
and share it with us.

## Further documentation

You can see the current and past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/harvest-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

And finally some meta documentation:

* [versioning and branching models](VERSIONING.md)
* [contribution instructions](CONTRIBUTING.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.

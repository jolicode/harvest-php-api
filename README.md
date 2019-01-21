# A PHP Client for Harvest API

[Harvest](https://www.getharvest.com/) is a time tracking and invoicing tool.

This PHP SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp) using a [Harvest OpenAPI specification](https://github.com/jolicode/harvest-openapi-generator/) generated from the HTML documentation.


## Installation

This library is built atop of PHP-HTTP (read more about it [here](http://docs.php-http.org))
and PSR-7. So you will need to install some implementations for those interfaces.
If no PHP-HTTP adapter or PSR-7 message factory is available yet in your project
or you don't care which one to use, just install some default:

```bash
composer require php-http/curl-client guzzlehttp/psr7
```

You can now install the Harvest client:

```bash
composer require jolicode/harvest-php-api
```

## Usage

First, you need to retrieve an access token. Please checkout Harvest's documentation about the [OAuth2 Authorization Flow](https://help.getharvest.com/api-v2/authentication-api/authentication/authentication/#for-server-side-applications).

Then, use the factory that is provided to create the client:

```php
// $client contains all the methods to interact with the API
$client = JoliCode\Harvest\ClientFactory::create(
  $accessToken,
  $harvestAccountId
);

$clients = $client->listClients([
  'is_active' => true,
])->getClients();

dump($clients);
```

Want more example or documentation? See the [documentation](doc/index.md).

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

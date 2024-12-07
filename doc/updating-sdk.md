# Updating the SDK

> [!NOTE]
> The tooling for this project uses [Castor](https://castor.jolicode.com/),
> a full-featured PHP task runner. In order to install Castor, see the
> [installation instructions](https://castor.jolicode.com/getting-started/installation/).

## Fetch the latest OpenAPI specification version

This library is generated using an OpenApi definition which is itself
generated. Therefore, you should not manually change the
`Resources/harvest-openapi.yaml` file, but rather change the way it is
generated in the [jolicode/harvest-openapi-generator](https://github.com/jolicode/harvest-openapi-generator)
repository.

You can update the SDK to the last available specification version by
running the following command:

```bash
castor update
castor qa:cs
```

This will both update the specification and re-generate the library code.
Once done, you can run tests against the library:

```bash
castor qa:test
```

If you wish to open a pull-request, please follow the [contribution guidelines](CONTRIBUTING.md).

### Detailed steps

Updating the SDK "by hand" requires to download the last specification version
and re-generate the library code. This can be done with the following commands:

```bash
castor sdk:update-specification
castor sdk:generate
castor qa:cs
```

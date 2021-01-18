# Updating the SDK

## Fetch the latest OpenAPI specification version

This library is generated using an OpenApi definition which is itself
generated. Therefore, you should not manually change the
`Resources/harvest-openapi.yaml` file, but rather change the way it is
generated in the [jolicode/harvest-openapi-generator](https://github.com/jolicode/harvest-openapi-generator)
repository.

Run the following command to retrieve the latest API spec:

```bash
curl https://raw.githubusercontent.com/jolicode/harvest-openapi-generator/master/generated/harvest-openapi.yaml -o Resources/harvest-openapi.yaml
```

## Regenerate the SDK

When the versioned spec has been updated, simply run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```

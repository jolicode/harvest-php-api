# Updating the SDK

## Fetch the latest OpenAPI specification version

This library is generated using an OpenApi definition which is itself
generated. Therefore, you should not manually change the
`Resources/harvest-openapi.yaml` file, but rather change the way it is
generated in the [jolicode/harvest-openapi-generator](https://github.com/jolicode/harvest-openapi-generator)
repository.

You can update the SDK to the last available specification version by running the following command:

```bash
make update_sdk
```

Once done, you can run tests against the library:

```bash
make tests
```

### Detailed steps

Updating the SDK "by hand" requires to download the last specification version and re-generate the library code (trhis is basically what `make update_sdk` does):

```bash
curl https://raw.githubusercontent.com/jolicode/harvest-openapi-generator/master/generated/harvest-openapi.yaml -o Resources/harvest-openapi.yaml
./vendor/bin/jane-openapi generate -c .jane-openapi.php
```

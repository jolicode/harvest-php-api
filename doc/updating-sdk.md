# Updating the SDK

# Fetch the latest OpenAPI specification version

Run the following command to retrieve the latest API spec:

```bash
curl https://raw.githubusercontent.com/jolicode/harvest-openapi-generator/master/generated/harvest-openapi.yaml -o Resources/harvest-openapi.yaml
```

## Regenerate the SDk

When the versioned spec has been updated, simply run Jane to regenerate the
SDK:

```bash
vendor/bin/jane-openapi generate -c .jane-openapi.php
```

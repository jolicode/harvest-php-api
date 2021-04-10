cs: ## Fix CS violations
	./vendor/bin/php-cs-fixer fix --verbose

cs_dry_run: ## Display CS violations without fixing it
	./vendor/bin/php-cs-fixer fix --verbose --dry-run

test: ## Run tests
	./vendor/bin/simple-phpunit

update_sdk: ## Downloads the last specification and re-generates the SDK
	curl https://raw.githubusercontent.com/jolicode/harvest-openapi-generator/master/generated/harvest-openapi.yaml -o Resources/harvest-openapi.yaml
	./vendor/bin/jane-openapi generate -c .jane-openapi.php

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help

<?php

use JoliCode\Harvest\BooleanCustomQueryResolver;

return [
    'openapi-file' => __DIR__ . '/Resources/harvest-openapi.yaml',
    'namespace' => 'JoliCode\Harvest\Api',
    'directory' => __DIR__ . '/generated',
    'reference' => true,
    'strict' => false,
    'custom-query-resolver' => [
        '__type' => [
            'bool' => BooleanCustomQueryResolver::class
        ],
    ],
];

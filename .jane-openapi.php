<?php

use JoliCode\Harvest\BooleanCustomQueryResolver;

return [
    'openapi-file' => __DIR__ . '/Resources/harvest-openapi.yaml',
    'namespace' => 'JoliCode\Harvest\Api',
    'date-format' => 'Y-m-d\TH:i:s\Z',
    'directory' => __DIR__ . '/generated',
    'reference' => true,
    'strict' => true,
    'custom-query-resolver' => [
        '__type' => [
            'bool' => BooleanCustomQueryResolver::class
        ],
    ],
];

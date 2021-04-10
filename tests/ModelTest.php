<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Yaml\Yaml;

class ModelTest extends TestCase
{
    private $serializer;

    protected function setUp(): void
    {
        $this->serializer = new Serializer([
            new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
            new \JoliCode\Harvest\Api\Normalizer\JaneObjectNormalizer(),
        ], [
            new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
            ),
        ]);
    }

    /**
     * @dataProvider provideExamples
     */
    public function testModel(string $modelName, string $body, bool $shouldNotPass)
    {
        $model = $this->serializer->deserialize($body, $modelName, 'json');
        $this->assertInstanceOf($modelName, $model);
        $serialized = $this->serializer->serialize($model, 'json');

        if ($shouldNotPass) {
            $this->expectException('PHPUnit\Framework\ExpectationFailedException');
        }

        $this->assertJsonStringEqualsJsonString(
            $this->removeNullJsonValues($body),
            $this->removeNullJsonValues($serialized)
        );
    }

    public function provideExamples(): array
    {
        $examples = [];
        $openapi = Yaml::parseFile(__DIR__.'/../Resources/harvest-openapi.yaml');

        $failedExpected = [
            '/clients' => [
                'get' => true, // statement_key is documented as a string, integer in example
                'post' => true, // statement_key is documented as a string, integer in example
            ],
            '/clients/{clientId}' => [
                'get' => true, // statement_key is documented as a string, integer in example
                'patch' => true, // statement_key is documented as a string, integer in example
            ],
            '/company' => [
                'get' => true, // undocumented exemple attribute "approval_required"
                'patch' => true, // undocumented exemple attribute "approval_required"
            ],
            '/users' => [
                'get' => true, // deprecated parameter "telephone"
                'post' => true, // deprecated parameter "telephone"
            ],
            '/users/me' => [
                'get' => true, // deprecated parameter "telephone"
                'post' => true, // deprecated parameter "telephone"
            ],
            '/users/{userId}' => [
                'get' => true, // deprecated parameter "telephone"
                'patch' => true, // deprecated parameter "telephone"
            ],
        ];

        foreach ($openapi['paths'] as $pathName => $path) {
            foreach ($path as $method => $endpoint) {
                if (
                    isset($endpoint['responses'])
                ) {
                    foreach ($endpoint['responses'] as $statusCode => $response) {
                        if ('default' !== $statusCode) {
                            if (
                                isset($response['content'])
                                && isset($response['content']['application/json'])
                                && isset($response['content']['application/json']['example'])
                            ) {
                                $modelName = $this->getFullClassName($response['content']['application/json']['schema']['$ref']);
                                $example = json_encode($response['content']['application/json']['example']);
                                $examples[] = [
                                    $modelName,
                                    $example,
                                    isset($failedExpected[$pathName]) && isset($failedExpected[$pathName][$method]),
                                ];
                            }
                        }
                    }
                }
            }
        }

        return $examples;
    }

    private function getFullClassName(string $name): string
    {
        return sprintf(
            'JoliCode\\Harvest\\Api\\Model\\%s',
            substr($name, \strlen('#/components/schemas/'))
        );
    }

    private function removeNullJsonValues($jsonString)
    {
        return json_encode($this->removeNullValues(
            json_decode($jsonString, true)
        ));
    }

    private function removeNullValues($haystack)
    {
        foreach ($haystack as $key => $value) {
            if (\is_array($value)) {
                $haystack[$key] = $this->removeNullValues($haystack[$key]);
            }

            if (null === $haystack[$key]) {
                unset($haystack[$key]);
            }
        }

        return $haystack;
    }
}

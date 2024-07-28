<?php

declare(strict_types=1);

namespace Dew\Acs;

use Dew\Acs\OpenApi\ApiDocs;
use InvalidArgumentException;
use RuntimeException;

/**
 * @phpstan-import-type TApiDocs from \Dew\Acs\OpenApi\ApiDocs
 * @phpstan-type TProductInfo array{
 *   code: string,
 *   name: string,
 *   shortName: string,
 *   description: string,
 *   style: ?string,
 *   group: string,
 *   defaultVersion: string,
 *   versions: string[]
 * }
 * @see https://api.aliyun.com/openmeta/api/GetProductList
 */
final class ApiDocsResolver
{
    /**
     * @var TProductInfo[]
     */
    private static array $products;

    public static function make(): static
    {
        return new static();
    }

    /**
     * @param  array<string, mixed>  $config
     */
    public function resolve(string $clientClass, array $config): ApiDocs
    {
        if (! str_ends_with($clientClass, 'Client')) {
            throw new RuntimeException('The client class name is invalid.');
        }

        $clientName = substr($clientClass, 0, -6);
        $product = static::getProduct($clientName);
        $version = $config['version'] ?? $product['defaultVersion'];

        if (! is_string($version)) {
            throw new InvalidArgumentException('The version should be a string.');
        }

        if (! in_array($version, $product['versions'])) {
            throw new InvalidArgumentException(sprintf(
                'Could not find version %s on product %s.',
                $version, $product['code']
            ));
        }

        return ApiDocs::make(
            static::getProductDefinition($product, $version)
        );
    }

    public static function getNormalizedProductName(string $name): string
    {
        return Str::studly($name);
    }

    /**
     * @return TProductInfo
     */
    private static function getProduct(string $name): array
    {
        if (! isset(static::$products)) {
            $products = require __DIR__.'/../data/products.php';

            foreach ($products as $product) {
                $key = static::getNormalizedProductName($product['code']);

                static::$products[$key] = $product;
            }
        }

        return static::$products[$name]
            ?? throw new InvalidArgumentException("Could not find product $name.");
    }

    /**
     * @param  TProductInfo  $product
     * @return TApiDocs
     */
    private function getProductDefinition(array $product, string $version): array
    {
        $directory = strtolower($product['code']);
        $filename = __DIR__."/../data/$directory/$version/api-docs.php";

        if (! file_exists($filename)) {
            throw new RuntimeException(sprintf(
                'Could not find APIs for product %s with version %s.',
                $product['code'], $version
            ));
        }

        return require $filename;
    }
}

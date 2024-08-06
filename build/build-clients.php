<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/ProductBuilder.php';

use Dew\Acs\ApiDocsResolver;

function buildClient(string $product): void
{
    $builder = new ProductBuilder(
        basePath: __DIR__.'/../src',
        namespace: 'Dew\\Acs',
        product: ApiDocsResolver::getNormalizedProductName($product)
    );

    $builder->buildClient();
    $builder->buildException();
}

function buildFromProducts(string $filename): void
{
    if (! file_exists($filename)) {
        throw new InvalidArgumentException('The file does not exist.');
    }

    $products = require $filename;

    foreach ($products as $product) {
        buildProduct($product['code']);
    }
}

function buildProduct(string $product): void
{
    printf('=> Build %s'.PHP_EOL, strtolower($product));
    buildClient($product);
}

function main(): void
{
    buildFromProducts(__DIR__.'/../data/products.php');
    buildProduct('Tablestore');
    buildProduct('Ots');
    print '== Build completed.'.PHP_EOL;
}

/**
 * Main entry.
 */
main();

<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/ProductBuilder.php';

use Dew\Acs\ApiDocsResolver;

if (! file_exists(__DIR__.'/../data/products.json')) {
    throw new RuntimeException('Missing products meta file.');
}

$products = require __DIR__.'/../data/products.php';

foreach ($products as $product) {
    printf("=> Build %s\n", strtolower($product['code']));

    $builder = new ProductBuilder(
        basePath: __DIR__.'/../src',
        namespace: 'Dew\\Acs',
        product: ApiDocsResolver::getNormalizedProductName($product['code'])
    );

    $builder->buildClient();
}

print "== Build completed.\n";

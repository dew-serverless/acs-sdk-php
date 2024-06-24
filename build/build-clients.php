<?php

declare(strict_types=1);

require_once __DIR__.'/ProductBuilder.php';

if (! file_exists(__DIR__.'/../data/products.json')) {
    throw new RuntimeException('Missing products meta file.');
}

$products = require __DIR__.'/../data/products.php';

foreach ($products as $product) {
    printf("=> Build %s\n", strtolower($product['code']));

    $builder = new ProductBuilder(
        basePath: __DIR__.'/../src',
        namespace: 'Dew\\Acs',
        product: str_replace('-', '', ucwords($product['code']))
    );

    $builder->buildClient();
}

print "== Build completed.\n";

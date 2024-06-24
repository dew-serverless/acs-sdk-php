<?php

declare(strict_types=1);

$metaPath = __DIR__.'/../data/products.json';

if (! file_exists($metaPath)) {
    throw new RuntimeException('Missing products meta file.');
}

$products = json_decode(
    file_get_contents($metaPath),
    associative: true
);

foreach ($products as $product) {
    foreach ($product['versions'] as $version) {
        printf("=> Processing %s %s\n", $product['code'], $version);

        $url = sprintf('https://api.aliyun.com/meta/v1/products/%s/versions/%s/api-docs.json', $product['code'], $version);
        $stream = fopen($url, 'r');
        $contents = stream_get_contents($stream);
        fclose($stream);

        $direcotry = __DIR__.'/../data/'.strtolower($product['code']).'/'.$version;

        if (! is_dir($direcotry)) {
            mkdir($direcotry, 0755, recursive: true);
        }

        file_put_contents($direcotry.'/api-docs.json', $contents);
    }
}

printf("== Process completed.\n");

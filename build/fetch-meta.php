<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/ProductStripper.php';
require_once __DIR__.'/ApiDocsStripper.php';

use Symfony\Component\VarExporter\VarExporter;

function getContents(string $url): string
{
    $stream = fopen($url, 'r');

    if ($stream === false) {
        throw new RuntimeException('Could not retrieve the URL: '.$url);
    }

    $contents = stream_get_contents($stream);
    fclose($stream);

    if ($contents === false) {
        throw new RuntimeException('Could not retrieve content: '.$url);
    }

    return $contents;
}

/**
 * @return mixed[]
 */
function getApiDocs(string $product, string $version): array
{
    $contents = getContents(sprintf(
        'https://api.aliyun.com/meta/v1/products/%s/versions/%s/api-docs.json',
        $product, $version
    ));

    $decoded = json_decode(
        $contents, associative: true, flags: JSON_THROW_ON_ERROR
    );

    if (! is_array($decoded)) {
        throw new RuntimeException('The API docs is expected to be an array.');
    }

    return $decoded;
}

/**
 * @return mixed[]
 */
function getLatestApiChanges(string $product, string $version, string $api): array
{
    $contents = getContents(sprintf(
        'https://api.aliyun.com/api/changeset/%s/%s/%s?page=1&pageSize=1',
        $product, $version, $api
    ));

    $decoded = json_decode(
        $contents, associative: true, flags: JSON_THROW_ON_ERROR
    );

    if (! is_array($decoded)) {
        throw new RuntimeException("Could not parse $api API metadata.");
    }

    return $decoded;
}

function failToGetChangeset(string $api, string $message): RuntimeException
{
    return new RuntimeException(sprintf(
        'Could not get the %s API changes: %s',
        $api, $message
    ));
}

function getDirectory(string $product, string $version): string
{
    return sprintf(__DIR__.'/../data/%s/%s', strtolower($product), $version);
}

/**
 * @param  string[]  $apis
 * @return array<string, mixed>
 */
function buildApiDocsFromChangeset(string $product, string $version, string $style, array $apis): array
{
    $docs = [
        'version' => '1.0',
        'info' => [
            'style' => $style,
            'product' => $product,
            'version' => $version,
        ],
        'directories' => [],
        'components' => [
            'schema' => [],
        ],
        'apis' => [],
        'endpoints' => [],
    ];

    foreach ($apis as $api) {
        $changeSet = getLatestApiChanges($product, $version, $api);

        if (! isset($changeSet['code']) || $changeSet['code'] !== 0) {
            throw failToGetChangeset($api, 'status code indicates unsuccessful.');
        }

        if (! isset($changeSet['data']['count']) || $changeSet['data']['count'] === 0) {
            throw failToGetChangeset($api, 'count is zero.');
        }

        if (! isset($changeSet['data']['list'][0]) || ! is_array($changeSet['data']['list'][0])) {
            throw failToGetChangeset($api, 'the list is empty.');
        }

        if (! isset($changeSet['data']['list'][0]['current']['apis']) ||
            ! is_array($changeSet['data']['list'][0]['current']['apis'])) {
            throw failToGetChangeset($api, 'missing the current data.');
        }

        $docs['apis'] = [...$docs['apis'], ...$changeSet['data']['list'][0]['current']['apis']];
    }

    return $docs;
}

/**
 * @param  mixed[]  $contents
 */
function writeToPhp(string $product, string $version, array $contents): void
{
    $direcotry = getDirectory($product, $version);

    if (! is_dir($direcotry)) {
        mkdir($direcotry, 0755, recursive: true);
    }

    $code = sprintf('<?php return %s;', VarExporter::export($contents));

    if (file_put_contents($direcotry.'/api-docs.php', $code) === false) {
        throw new RuntimeException(sprintf(
            'Could not persist the API docs for %s with version %s.',
            $product, $version
        ));
    }
}

function updateProductList(string $endpoint): void
{
    $contents = getContents($endpoint);

    $decoded = json_decode(
        $contents, associative: true, flags: JSON_THROW_ON_ERROR
    );

    if (! is_array($decoded)) {
        throw new RuntimeException('Could not parse product list.');
    }

    $stripped = ProductStripper::strip($decoded);

    $code = sprintf('<?php return %s;', VarExporter::export($stripped));

    if (file_put_contents(__DIR__.'/../data/products.php', $code, LOCK_EX) === false) {
        throw new RuntimeException('Could not update product list.');
    }
}

function buildFromProducts(): void
{
    $filename = __DIR__.'/../data/products.php';

    if (! file_exists($filename)) {
        throw new RuntimeException('Missing product data.');
    }

    $products = require $filename;

    if (! is_array($products)) {
        throw new RuntimeException('Product data is expected to be a list.');
    }

    foreach ($products as $product) {
        foreach ($product['versions'] as $version) {
            printf('=> Processing %s %s'.PHP_EOL, $product['code'], $version);

            $docs = getApiDocs($product['code'], $version);
            $stripped = ApiDocsStripper::strip($docs);

            writeToPhp($product['code'], $version, $stripped);
        }
    }
}

/**
 * @param  string[]  $apis
 */
function buildFromChangeset(string $product, string $version, string $style, array $apis): void
{
    printf('=> Processing %s %s'.PHP_EOL, $product, $version);

    $docs = buildApiDocsFromChangeset($product, $version, $style, $apis);

    writeToPhp($product, $version, $docs);
}

function main(): int
{
    echo '=> Updating product list'.PHP_EOL;
    updateProductList('https://api.aliyun.com/meta/v1/products.json');

    buildFromProducts();

    // @see https://github.com/aliyun/alibabacloud-sdk/blob/f41eec35b536eb2ee7eb1e2467eac88af904dd58/ots-20160620/async/api-info.json
    buildFromChangeset('Ots', '2016-06-20', 'RPC', [
        'BindInstance2Vpc',
        'DeleteInstance',
        'DeleteTags',
        'GetInstance',
        'GetOtsServiceStatus',
        'InsertInstance',
        'InsertTags',
        'ListClusterType',
        'ListInstance',
        'ListTags',
        'ListVpcInfoByInstance',
        'ListVpcInfoByVpc',
        'OpenOtsService',
        'UnbindInstance2Vpc',
        'UpdateInstance',
    ]);

    echo '== Process completed.'.PHP_EOL;

    return 0;
}

/**
 * Main entry.
 */
main();

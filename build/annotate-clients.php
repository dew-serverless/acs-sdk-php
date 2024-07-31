<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/AnnotationBuilder.php';

/**
 * @return array{code: string, versions: string[]}[]
 */
function getProducts(): array
{
    $filename = __DIR__.'/../data/products.php';

    if (! file_exists($filename)) {
        throw new RuntimeException('Could not find products data.');
    }

    return require $filename;
}

/**
 * @param  array{code: string, versions: string[]}  $product
 * @return string[]
 */
function getDocsPaths(array $product): array
{
    $paths = [];

    // Sort the versions in the format of "YYYY-MM-DD" so that the initial
    // version of the product appears at the top of the list. This helps
    // determine if APIs were introduced in later versions.
    $versions = $product['versions'];

    if (AnnotationBuilder::isVersionIncrementable($versions[0])) {
        sort($versions);
    }

    foreach ($versions as $version) {
        $filename = sprintf(__DIR__.'/../data/%s/%s/api-docs.php',
            strtolower($product['code']), $version
        );

        if (! file_exists($filename)) {
            throw new RuntimeException(sprintf(
                'Could not find the %s API docs with version %s.',
                $product['code'], $version
            ));
        }

        $paths[] = $filename;
    }

    return $paths;
}

foreach (getProducts() as $product) {
    printf("=> Annonate %s\n", $product['code']);

    $docs = getDocsPaths($product);

    $annotationBuilder = new AnnotationBuilder($product, $docs);
    $annotationBuilder->annotate();
}

printf("== Annotated successfully.\n");

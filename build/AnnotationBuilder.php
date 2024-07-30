<?php

declare(strict_types=1);

use Dew\Acs\ApiDocsResolver;

/**
 * @phpstan-import-type TProductInfo from \Dew\Acs\ApiDocsResolver
 * @phpstan-import-type TApiDocs from \Dew\Acs\OpenApi\ApiDocs
 * @phpstan-type TCollectedApi array{string, array{version: string, deprecated: bool}}
 */
final readonly class AnnotationBuilder
{
    /**
     * @param  TProductInfo  $product
     * @param  string[]  $docs
     */
    public function __construct(
        private array $product,
        private array $docs
    ) {
        //
    }

    public function annotate(): void
    {
        $apis = $this->collectApis();

        if ($apis === []) {
            return;
        }

        $docBlock = $this->buildDocBlock(
            apis: $apis,
            initialVersion: $this->product['versions'][0]
        );

        if ($this->writeToClient($docBlock) === false) {
            throw new RuntimeException(
                "Failed to annocate the {$this->product['code']} client."
            );
        }
    }

    /**
     * @return TCollectedApi
     */
    private function collectApis(): array
    {
        $apis = [];

        foreach ($this->docs as $path) {
            if (! file_exists($path)) {
                throw new InvalidArgumentException(sprintf(
                    'The docs path "%s" could not be found.', $path
                ));
            }

            /** @var TApiDocs */
            $docs = require $path;

            foreach ($docs['apis'] as $name => $api) {
                if (isset($apis[$name])) {
                    continue;
                }

                $apis[$name] = [
                    'version' => $docs['info']['version'],
                    'deprecated' => $api['deprecated'] ?? false,
                ];
            }
        }

        return $apis;
    }

    /**
     * @param  TCollectedApi  $apis
     */
    private function buildDocBlock(array $apis, string $initialVersion): string
    {
        $contents = '';

        foreach ($apis as $action => $meta) {
            $method = lcfirst($action);

            $deprecated = $meta['deprecated']
                ? sprintf(' {@deprecated %s}', $meta['version'])
                : '';

            $since = $meta['version'] !== $initialVersion
                ? sprintf(' {@since %s}', $meta['version'])
                : '';

            $contents .= sprintf(
                " * @method \Dew\Acs\Result %s(array \$arguments = [])%s%s\n",
                $method, $deprecated, $since
            );

            $contents .= sprintf(
                " * @method \Http\Promise\Promise %sAsync(\$arguments = [])%s%s\n",
                $method, $deprecated, $since
            );
        }

        return "/**\n".$contents." */";
    }

    private function writeToClient(string $docBlock): bool
    {
        $product = ApiDocsResolver::getNormalizedProductName($this->product['code']);

        $filename = __DIR__.'/../src/'.$product.'/'.$product.'Client.php';

        if (! file_exists($filename)) {
            throw new RuntimeException(
                "Could not find the {$this->product['code']} client."
            );
        }

        $contents = file_get_contents($filename);

        if ($contents === false) {
            throw new RuntimeException(
                "Could not get the contents of the {$this->product['code']} client."
            );
        }

        $matches = $this->findExistingDocBlock($contents);

        if (! isset($matches[0])) {
            return false;
        }

        $annotated = str_replace(
            $matches[0], $docBlock."\n".$matches['class'], $contents
        );

        return is_int(file_put_contents($filename, $annotated, LOCK_EX));
    }

    /**
     * @return string[]
     */
    private function findExistingDocBlock(string $contents): array
    {
        $matches = [];

        preg_match(
            '/(?:(?:\/\*\*.*\s\*\/\s)?(?<class>(?:final )?(?:readonly )?class \w+Client))/s',
            $contents,
            $matches
        );

        return $matches;
    }
}

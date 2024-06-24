<?php

declare(strict_types=1);

final class ProductBuilder
{
    public function __construct(
        private string $basePath,
        private string $namespace,
        private string $product
    ) {
        //
    }

    public function buildClient(): self
    {
        return $this->buildClientIfMissing();
    }

    private function buildClientIfMissing(): self
    {
        $filename = $this->basePath.'/'.$this->product.'/'.$this->product.'Client.php';

        if (is_file($filename)) {
            return $this;
        }

        if (! is_dir($directory = dirname($filename))) {
            mkdir($directory, 0755, recursive: true);
        }

        file_put_contents($filename, $this->getDefaultClientCode(), LOCK_EX);

        return $this;
    }

    private function getDefaultClientCode(): string
    {
        return <<<PHP
        <?php

        declare(strict_types=1);

        namespace $this->namespace\\$this->product;

        use Dew\Acs\AcsClient;

        final class {$this->product}Client extends AcsClient
        {
            //
        }

        PHP;
    }
}

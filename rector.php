<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->withSkip([
        __DIR__.'/src/Tablestore/Messages',
        __DIR__.'/src/Tablestore/Metadata',
    ])
    ->withPhpSets()
    ->withTypeCoverageLevel(0);

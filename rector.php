<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->withSkip([
        __DIR__.'/src/Tablestore/Messages',
        __DIR__.'/src/Tablestore/Metadata',
        ClassPropertyAssignToConstructorPromotionRector::class => [
            __DIR__.'/src/Tablestore/InstanceException.php',
        ],
    ])
    ->withPhpSets()
    ->withTypeCoverageLevel(0);

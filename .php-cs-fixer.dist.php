<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->exclude([
        'Tablestore/Messages',
        'Tablestore/Metadata',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
        'array_syntax' => ['syntax' => 'short'],
        'integer_literal_case' => true,
        'method_argument_space' => [
            'on_multiline' => 'ignore',
        ],
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],
    ])
    ->setFinder($finder);

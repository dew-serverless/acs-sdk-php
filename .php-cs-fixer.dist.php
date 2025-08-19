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
        'Sls/Messages',
        'Sls/Metadata',
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
        'global_namespace_import' => [
            'import_classes' => false,
        ],
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_separation' => [
            'skip_unlisted_annotations' => true,
        ],
        'nullable_type_declaration' => [
            'syntax' => 'question_mark',
        ],
        'nullable_type_declaration_for_default_null_value' => true,
    ])
    ->setFinder($finder);

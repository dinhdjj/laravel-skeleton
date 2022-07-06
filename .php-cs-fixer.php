<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    // Rule-sets
    '@DoctrineAnnotation' => true,
    '@PHP81Migration' => true,
    '@PhpCsFixer' => true,

    // Risky rule-sets
    '@PHPUnit84Migration:risky' => true,
    '@PHP80Migration:risky' => true,
    '@PhpCsFixer:risky' => true,

    // Custom rules
    'no_unset_on_property' => false, // It will helpful when unset relationship on model
    'php_unit_internal_class' => false, // consider
    'php_unit_test_class_requires_covers' => false, // consider
    'phpdoc_no_alias_tag' => [
        'replacements' => [
            'property-read' => 'property',
            'property-write' => 'property',
            'link' => 'see',
            // 'type' => 'var',
            // Disable above replacement because it's will replace @typescript to @varscript
            // That not expected when use `spatie/laravel-typescript-transformer` package
        ],
    ],
];

$finder = Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/lang',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

$config = new Config();

return $config->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
;

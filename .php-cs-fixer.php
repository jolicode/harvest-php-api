<?php

/*
 * This file is part of JoliCode's Harvest PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$header = <<<'EOF'
This file is part of JoliCode's Harvest PHP API project.

(c) JoliCode <coucou@jolicode.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->ignoreVCSIgnored(true)
    ->in(__DIR__)
    ->exclude('doc')
    ->append([
        __FILE__,
    ])
;

return (new PhpCsFixer\Config())
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'blank_line_before_statement' => true, // Symfony(PSR12) override the default value, but we don't want
        'concat_space' => ['spacing' => 'one'],
        'header_comment' => ['header' => $header],
        'ordered_class_elements' => true, // Symfony(PSR12) override the default value, but we don't want
        'php_unit_internal_class' => false, // From @PhpCsFixer but we don't want it
        'php_unit_test_class_requires_covers' => false, // From @PhpCsFixer but we don't want it
        'phpdoc_add_missing_param_annotation' => false, // From @PhpCsFixer but we don't want it
    ])
    ->setFinder($finder)
;

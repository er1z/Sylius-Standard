<?php
$finder = PhpCsFixer\Finder::create()
    ->in(['src', 'tests'])
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setLineEnding("\n")
    ->setRules([
        '@DoctrineAnnotation' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'self_accessor' => false,
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_only',
        ],
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'backtick_to_shell_exec'=>true,
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'cast_spaces'=>[
            'space'=>'none'
        ],
        'compact_nullable_typehint' => true,
        'declare_strict_types'=>true,
        'doctrine_annotation_array_assignment' => [
            'operator' => '=',
        ],
        'doctrine_annotation_spaces' => [
            'after_array_assignments_equals' => false,
            'before_array_assignments_equals' => false,
        ],
        'list_syntax'=>[
            'syntax'=>'short'
        ],
        'logical_operators'=>true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'continue',
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'throw',
                'use',
            ],
        ],
        'no_superfluous_phpdoc_tags' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_imports' => [
            'importsOrder' => [
                'class',
                'function',
                'const',
            ],
            'sortAlgorithm' => 'alpha',
        ],
        'php_unit_method_casing' => [
            'case' => 'camel_case',
        ],
        'phpdoc_order' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_var_without_name'=>false,
        'protected_to_private'=>false,
        'void_return' => false,
        'blank_line_before_return' => true
    ])
    ->setFinder($finder)
    ;
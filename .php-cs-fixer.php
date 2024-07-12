<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/exercicios-php'); // especifica a pasta 'exercicios-php'

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_anonymous_constructs' => 'same'
        ],
    ])
    ->setFinder($finder);

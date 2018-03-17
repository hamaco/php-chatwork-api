<?php
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__."/src")
//    ->in(__DIR__."/tests")
;
return \PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        "@PHP70Migration:risky" => true,
    ])
    ->setFinder($finder)
    ->setLineEnding("\n")
    ;

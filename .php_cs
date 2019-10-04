<?php declare(strict_types=1);

use WyriHaximus\CsFixerConfig\PhpCsFixerConfig;
use PhpCsFixer\Config;

return (function (): Config
{
    $paths = [
        __DIR__ . DIRECTORY_SEPARATOR . 'src',
        __DIR__ . DIRECTORY_SEPARATOR . 'tests',
    ];

    return PhpCsFixerConfig::create()->setRules([
        'native_function_invocation' => false,
    ])
        ->setFinder(
            PhpCsFixer\Finder::create()
                ->in($paths)
                ->append($paths)
        )
        ->setUsingCache(false)
    ;
})();

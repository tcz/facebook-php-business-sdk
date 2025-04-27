<?php

//declare(strict_types=1);
//
//use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
//use Rector\Config\RectorConfig;
//use Rector\Set\ValueObject\LevelSetList;
//use Rector\Set\ValueObject\DowngradeLevelSetList;
//
//return static function (RectorConfig $rectorConfig): void {
//    $rectorConfig->paths([
//        __DIR__ . '/examples',
//        __DIR__ . '/src',
//        __DIR__ . '/test',
//    ]);
//
//    $rectorConfig->sets([
//        DowngradeLevelSetList::DOWN_TO_PHP_72
//    ]);
//
//    // define sets of rules
//    //    $rectorConfig->sets([
//    //        LevelSetList::UP_TO_PHP_80
//    //    ]);
//};
//
////
use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/examples',
        __DIR__ . '/src',
        __DIR__ . '/test',
    ])
    ->withPhpVersion(PhpVersion::PHP_74)
    ->withDowngradeSets(php74: true);
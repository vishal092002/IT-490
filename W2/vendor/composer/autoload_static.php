<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited0779e96f5727071bd59dbcb1081374
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited0779e96f5727071bd59dbcb1081374::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited0779e96f5727071bd59dbcb1081374::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited0779e96f5727071bd59dbcb1081374::$classMap;

        }, null, ClassLoader::class);
    }
}

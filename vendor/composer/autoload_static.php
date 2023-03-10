<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit369fe0ce59d9a5a2638ea8948717c10a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit369fe0ce59d9a5a2638ea8948717c10a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit369fe0ce59d9a5a2638ea8948717c10a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit369fe0ce59d9a5a2638ea8948717c10a::$classMap;

        }, null, ClassLoader::class);
    }
}

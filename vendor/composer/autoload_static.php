<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55e0276f863f4f9e8c71099151c9e7bb
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Views\\' => 6,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Views',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55e0276f863f4f9e8c71099151c9e7bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55e0276f863f4f9e8c71099151c9e7bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55e0276f863f4f9e8c71099151c9e7bb::$classMap;

        }, null, ClassLoader::class);
    }
}

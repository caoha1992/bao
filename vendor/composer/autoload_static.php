<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93623dd540b0ee64ffe6686e3cd3d9c0
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit93623dd540b0ee64ffe6686e3cd3d9c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93623dd540b0ee64ffe6686e3cd3d9c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93623dd540b0ee64ffe6686e3cd3d9c0::$classMap;

        }, null, ClassLoader::class);
    }
}

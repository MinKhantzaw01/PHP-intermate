<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite188dfaaad574d8a7f6dc0d29328ca98
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite188dfaaad574d8a7f6dc0d29328ca98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite188dfaaad574d8a7f6dc0d29328ca98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite188dfaaad574d8a7f6dc0d29328ca98::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b80f30025e00021276111e575956551
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b80f30025e00021276111e575956551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b80f30025e00021276111e575956551::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b80f30025e00021276111e575956551::$classMap;

        }, null, ClassLoader::class);
    }
}

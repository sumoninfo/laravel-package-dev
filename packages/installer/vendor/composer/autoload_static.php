<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1534fd4fe2497db8d7a8146ec7b141f
{
    public static $files = array (
        'ad33c54413465b0c2a017d774ee1fff8' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SumonInfo\\Installer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SumonInfo\\Installer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1534fd4fe2497db8d7a8146ec7b141f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1534fd4fe2497db8d7a8146ec7b141f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1534fd4fe2497db8d7a8146ec7b141f::$classMap;

        }, null, ClassLoader::class);
    }
}

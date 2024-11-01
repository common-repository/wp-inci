<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47ae194fb0a203b16af4424245aaa5dd
{
    public static $files = array (
        'ac773ca18bc86f9208de2ed8068423eb' => __DIR__ . '/..' . '/johnbillion/extended-cpts/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExtCPTs\\Tests\\' => 14,
            'ExtCPTs\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Args\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExtCPTs\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/johnbillion/extended-cpts/tests/integration',
        ),
        'ExtCPTs\\' => 
        array (
            0 => __DIR__ . '/..' . '/johnbillion/extended-cpts/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Args\\' => 
        array (
            0 => __DIR__ . '/..' . '/johnbillion/args/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47ae194fb0a203b16af4424245aaa5dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47ae194fb0a203b16af4424245aaa5dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47ae194fb0a203b16af4424245aaa5dd::$classMap;

        }, null, ClassLoader::class);
    }
}

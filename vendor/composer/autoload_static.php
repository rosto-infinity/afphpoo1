<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49a7d21b39eb42ee04dc43ae60c696af
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RostoInfinity\\Afphpoo4\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RostoInfinity\\Afphpoo4\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit49a7d21b39eb42ee04dc43ae60c696af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49a7d21b39eb42ee04dc43ae60c696af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49a7d21b39eb42ee04dc43ae60c696af::$classMap;

        }, null, ClassLoader::class);
    }
}

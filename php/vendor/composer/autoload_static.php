<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee213e64f3973cdb8c13493b980b5d66
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\BackEnd\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\BackEnd\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee213e64f3973cdb8c13493b980b5d66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee213e64f3973cdb8c13493b980b5d66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee213e64f3973cdb8c13493b980b5d66::$classMap;

        }, null, ClassLoader::class);
    }
}

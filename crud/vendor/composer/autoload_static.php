<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit937fb5417896ab991a843224467c7308
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seip\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seip\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit937fb5417896ab991a843224467c7308::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit937fb5417896ab991a843224467c7308::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit937fb5417896ab991a843224467c7308::$classMap;

        }, null, ClassLoader::class);
    }
}

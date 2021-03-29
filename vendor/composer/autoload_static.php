<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f03e57595d73593f587c768e9c78279
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f03e57595d73593f587c768e9c78279::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f03e57595d73593f587c768e9c78279::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f03e57595d73593f587c768e9c78279::$classMap;

        }, null, ClassLoader::class);
    }
}
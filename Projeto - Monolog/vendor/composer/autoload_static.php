<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f5cb8c0af2c0656efcdae18ce7204bf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Projeto\\Classes\\' => 16,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Projeto\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f5cb8c0af2c0656efcdae18ce7204bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f5cb8c0af2c0656efcdae18ce7204bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f5cb8c0af2c0656efcdae18ce7204bf::$classMap;

        }, null, ClassLoader::class);
    }
}

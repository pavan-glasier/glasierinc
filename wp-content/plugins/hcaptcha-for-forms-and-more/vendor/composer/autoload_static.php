<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fdda7f0fb4e22042a0639684e9a461d
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HCaptcha\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HCaptcha\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fdda7f0fb4e22042a0639684e9a461d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fdda7f0fb4e22042a0639684e9a461d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fdda7f0fb4e22042a0639684e9a461d::$classMap;

        }, null, ClassLoader::class);
    }
}

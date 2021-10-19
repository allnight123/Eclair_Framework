<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0cafc2b0409e557666b021494fad388
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heracles8562\\Eclair\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heracles8562\\Eclair\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0cafc2b0409e557666b021494fad388::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0cafc2b0409e557666b021494fad388::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0cafc2b0409e557666b021494fad388::$classMap;

        }, null, ClassLoader::class);
    }
}

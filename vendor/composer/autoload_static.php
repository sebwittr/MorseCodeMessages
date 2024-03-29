<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3ca204b0fed3fc2cb7ca1ecdc6d3589
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3ca204b0fed3fc2cb7ca1ecdc6d3589::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3ca204b0fed3fc2cb7ca1ecdc6d3589::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3ca204b0fed3fc2cb7ca1ecdc6d3589::$classMap;

        }, null, ClassLoader::class);
    }
}

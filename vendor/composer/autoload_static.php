<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6da5b22fe9760106beb851e37749a57
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hello\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Hello',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6da5b22fe9760106beb851e37749a57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6da5b22fe9760106beb851e37749a57::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

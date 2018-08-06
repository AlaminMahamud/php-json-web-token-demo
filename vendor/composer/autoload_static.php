<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabb14443bc591d551eb148877302e6b3
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabb14443bc591d551eb148877302e6b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabb14443bc591d551eb148877302e6b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b8fe9ec9e6306eb6a3b61462d2111b5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b8fe9ec9e6306eb6a3b61462d2111b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b8fe9ec9e6306eb6a3b61462d2111b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f903d80440a84033a7e318acdc168e1
{
    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'Kematjaya' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9f903d80440a84033a7e318acdc168e1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

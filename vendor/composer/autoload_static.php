<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56e70b731f7c3bfda4a6332176a14b75
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPhoenix' =>
            array (
                0 => __DIR__ . '/..' . '/phphoenix/core/classes',
                1 => __DIR__ . '/..' . '/phphoenix/db/classes',
                2 => __DIR__ . '/..' . '/phphoenix/orm/classes',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/classes',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit56e70b731f7c3bfda4a6332176a14b75::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit56e70b731f7c3bfda4a6332176a14b75::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}

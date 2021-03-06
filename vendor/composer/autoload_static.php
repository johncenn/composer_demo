<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a3aa48fd37fe37da081b5b59c654d31
{
    public static $files = array (
        '5c71d9c4b704e8ad399a7d0e598c8e68' => __DIR__ . '/../..' . '/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a3aa48fd37fe37da081b5b59c654d31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a3aa48fd37fe37da081b5b59c654d31::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

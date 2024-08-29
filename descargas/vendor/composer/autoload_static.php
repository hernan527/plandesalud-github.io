<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5aae517c64a00982c2be08c2081e280
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5aae517c64a00982c2be08c2081e280::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5aae517c64a00982c2be08c2081e280::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5aae517c64a00982c2be08c2081e280::$classMap;

        }, null, ClassLoader::class);
    }
}
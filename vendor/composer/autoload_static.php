<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit304a23cf4eef46c25d2a03be4dacd3f2
{
    public static $files = array (
    );

    public static $prefixLengthsPsr4 = array (
		);

    public static $prefixDirsPsr4 = array (
		);

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit304a23cf4eef46c25d2a03be4dacd3f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit304a23cf4eef46c25d2a03be4dacd3f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

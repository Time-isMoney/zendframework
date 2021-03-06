<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit355fde567a577b2091276df8780c7724
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\' => 5,
            'ZendXml\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/Zend',
        ),
        'ZendXml\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zendxml/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit355fde567a577b2091276df8780c7724::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit355fde567a577b2091276df8780c7724::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

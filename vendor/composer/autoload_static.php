<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit450b7c1ac818af27ce3ae1bf86f21548
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit450b7c1ac818af27ce3ae1bf86f21548::$classMap;

        }, null, ClassLoader::class);
    }
}

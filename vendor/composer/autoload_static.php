<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bfc55ca9b4e2ee8a3ee4c5f09e22332
{
    public static $classMap = array (
        'ComposerAutoloaderInit3bfc55ca9b4e2ee8a3ee4c5f09e22332' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit3bfc55ca9b4e2ee8a3ee4c5f09e22332' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/core/Database/Database.php',
        'Query' => __DIR__ . '/../..' . '/core/Database/Query.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3bfc55ca9b4e2ee8a3ee4c5f09e22332::$classMap;

        }, null, ClassLoader::class);
    }
}

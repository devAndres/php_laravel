<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bfa5893953599af536c15e84684324d
{
    public static $classMap = array (
        'App\\Controllers\\ObjetosController' => __DIR__ . '/../..' . '/app/controllers/ObjetosController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Proyect' => __DIR__ . '/../..' . '/app/models/Project.php',
        'App\\ejemplos\\clases\\Persona' => __DIR__ . '/../..' . '/ejemplos/clases.php',
        'App\\ejemplos\\clases\\Tarea' => __DIR__ . '/../..' . '/ejemplos/clases.php',
        'ComposerAutoloaderInit7bfa5893953599af536c15e84684324d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit7bfa5893953599af536c15e84684324d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Conexion' => __DIR__ . '/../..' . '/core/database/Conexion.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7bfa5893953599af536c15e84684324d::$classMap;

        }, null, ClassLoader::class);
    }
}

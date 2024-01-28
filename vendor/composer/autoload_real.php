<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit10233f5da2c75725b7a4eebbcdde8dce
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit10233f5da2c75725b7a4eebbcdde8dce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit10233f5da2c75725b7a4eebbcdde8dce', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit10233f5da2c75725b7a4eebbcdde8dce::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit827398c52a4b6cffaaf9390ee3d4e2ff
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit827398c52a4b6cffaaf9390ee3d4e2ff', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit827398c52a4b6cffaaf9390ee3d4e2ff', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit827398c52a4b6cffaaf9390ee3d4e2ff::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe599bd48ffb4fff854d5c370b027561
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

        spl_autoload_register(array('ComposerAutoloaderInitfe599bd48ffb4fff854d5c370b027561', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe599bd48ffb4fff854d5c370b027561', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe599bd48ffb4fff854d5c370b027561::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
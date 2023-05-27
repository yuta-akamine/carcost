<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitec91322b2a73efcd1d92a4ea3dd4dc7d
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

        spl_autoload_register(array('ComposerAutoloaderInitec91322b2a73efcd1d92a4ea3dd4dc7d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitec91322b2a73efcd1d92a4ea3dd4dc7d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitec91322b2a73efcd1d92a4ea3dd4dc7d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

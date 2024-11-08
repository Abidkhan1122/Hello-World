<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8a94ae0b7e6e91ab33b704b672a4b270
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

        spl_autoload_register(array('ComposerAutoloaderInit8a94ae0b7e6e91ab33b704b672a4b270', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8a94ae0b7e6e91ab33b704b672a4b270', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8a94ae0b7e6e91ab33b704b672a4b270::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit369fe0ce59d9a5a2638ea8948717c10a
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

        spl_autoload_register(array('ComposerAutoloaderInit369fe0ce59d9a5a2638ea8948717c10a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit369fe0ce59d9a5a2638ea8948717c10a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit369fe0ce59d9a5a2638ea8948717c10a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

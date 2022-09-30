<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2b01a2a27b0f491a7fe2afb4d3307c0b
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

        spl_autoload_register(array('ComposerAutoloaderInit2b01a2a27b0f491a7fe2afb4d3307c0b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2b01a2a27b0f491a7fe2afb4d3307c0b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2b01a2a27b0f491a7fe2afb4d3307c0b::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit2b01a2a27b0f491a7fe2afb4d3307c0b::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire2b01a2a27b0f491a7fe2afb4d3307c0b($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire2b01a2a27b0f491a7fe2afb4d3307c0b($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
<?php

// autoload_real_52.php generated by xrstf/composer-php52

class ComposerAutoloaderInit8bc6d5aeb7d507c8587eddb218f8105d {
	private static $loader;

	public static function loadClassLoader($class) {
		if ('xrstf_Composer52_ClassLoader' === $class) {
			require dirname(__FILE__).'/ClassLoader52.php';
		}
	}

	/**
	 * @return xrstf_Composer52_ClassLoader
	 */
	public static function getLoader() {
		if (null !== self::$loader) {
			return self::$loader;
		}

		spl_autoload_register(array('ComposerAutoloaderInit8bc6d5aeb7d507c8587eddb218f8105d', 'loadClassLoader'), true /*, true */);
		self::$loader = $loader = new xrstf_Composer52_ClassLoader();
		spl_autoload_unregister(array('ComposerAutoloaderInit8bc6d5aeb7d507c8587eddb218f8105d', 'loadClassLoader'));

		$vendorDir = dirname(dirname(__FILE__));
		$baseDir   = dirname($vendorDir);
		$dir       = dirname(__FILE__);

		$map = require $dir.'/autoload_namespaces.php';
		foreach ($map as $namespace => $path) {
			$loader->add($namespace, $path);
		}

		$classMap = require $dir.'/autoload_classmap.php';
		if ($classMap) {
			$loader->addClassMap($classMap);
		}

		$loader->register(true);

		return $loader;
	}
}
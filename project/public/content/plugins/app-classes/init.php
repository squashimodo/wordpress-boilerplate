<?php
/*
Plugin Name: Content Types
*/
spl_autoload_register(function($class) {
	$segments = array_filter(explode('\\', $class));

	if (array_shift($segments) === 'WPPlugins') {
		$path = __DIR__ . '/' . implode('/', $segments) . '.php';

		if (file_exists($path)) {
			include $path;
		}
	}
});
<?php
/*
Plugin Name: Content Types
*/

// spl_autoload_register runs when a class isnt found.
// Here we can look in the folder structure for the correct files matching the namespaces
spl_autoload_register(function($class) {

	// Splitting the path segments
	$segments = array_filter(explode('\\', $class));

	// Take out the first element
	$first = array_shift($segments);

	if ($first === 'WPPlugins') {
		$path = dirname(__DIR__) . '/classes/' . implode('/', $segments) . '.php';

	} else {
		// Re-add the removed element and change the path to the plugins directory
		array_unshift($segments, $first);
		$path = WP_CONTENT_DIR . '/plugins/' . implode('/', $segments) . '.php'; 
	}

	// Include it
	if (file_exists($path)) {
		include $path;
	}
});
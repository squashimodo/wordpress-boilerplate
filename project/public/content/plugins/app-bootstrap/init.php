<?php

/*
Plugin Name: Bootstrap
*/
add_action('plugins_loaded', function() {
	$portfolio_posts = new WPPlugins\WPExtend\ContentType('Portfolio post', array('description' => 'Showcase posts'), array('plural_name' => 'Portfolio posts'));
});

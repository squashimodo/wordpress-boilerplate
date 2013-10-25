<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

define('APP_ROOT',				dirname(__DIR__));
define('WP_HOME',					'http://foo.dev');
define('WP_SITEURL', 			WP_HOME . '/site/');
define('WP_CONTENT_DIR',	APP_ROOT . '/public/content');
define('WP_CONTENT_URL',	WP_HOME . '/content');

define('WP_DEBUG', 				TRUE);
/** The name of the database for WordPress */
define('DB_NAME', 				'mysite');

/** MySQL database username */
define('DB_USER',					'root');

/** MySQL database password */
define('DB_PASSWORD',			'root');

/** MySQL hostname */
define('DB_HOST',					'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET',			'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 			'');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


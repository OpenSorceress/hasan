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
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Bg8s+AESaZ99SNFoIzc7kBfkEqJXJZHZdVa3J1NW9OOyYdqIoZiC6g==');
define('SECURE_AUTH_KEY',  'TWslvAPECgAXxXoy5bTQhJi0B8YFRWWHghOuiQJKxA/ORFAeY6CibQ==');
define('LOGGED_IN_KEY',    '3N6nQ9QhNjui3FTLovRF/CI/jqYEtn6rshub9dfHuq1XQKLL+3AnYw==');
define('NONCE_KEY',        'WppLO6JxtaEIHT1yV52NouX69LMaX1iUd6WO8tLqVP8UsIO9CJnhuw==');
define('AUTH_SALT',        'hhq30OMjaQJcri2gRKrhgqTizpmSsgGvWMKLc7Mq2a9Kn4xERFtqOg==');
define('SECURE_AUTH_SALT', '1bJmrlru3Ze6oFkMC6Foz+4ae4Pwp5aNz2BD15x3DCtM0r9oRS3m2g==');
define('LOGGED_IN_SALT',   'HjVUbHvZIuJgEn4AMFpPEgXF8g96A5mkE0xKe/9qVqWLeV3EETHRbw==');
define('NONCE_SALT',       '+C8h/fS4WwMVHbXNsl/LuInXD7DuqtQ80QkLWg4arTuqGmy+3aUmKA==');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

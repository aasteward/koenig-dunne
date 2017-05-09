<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gs4/jeWsvSXn1tIzQsH390zEU8Te12y68Sa5/N873GcptGIHQ35of+baCJ33IG0EKN6zh2cTY4BX8b3WF626zg==');
define('SECURE_AUTH_KEY',  'S7IJvpE8BPJ0j6SH+BKfr3s6ZER+bRNcaEnvCOKmwKgPwO+9TIJaCRPpwt5irhztLS3PD6hXewMCJ8kH5ki6Iw==');
define('LOGGED_IN_KEY',    '/CRQTp237ScgmIOkSZuCW3Z67XKcIZ8z38fX758DpfFZJzDIuLWZVC7yuRF5oN4d70WQ2RF8w61xPR2rCcSWOQ==');
define('NONCE_KEY',        '/1LZx0BrvLNYolH+ph9XhxTX8CNcmyvDXLOYwFqYEX78HX9pyKu+emfkaeNw9ZFUbo1XMKc1uKr7rVIlHJ4JeA==');
define('AUTH_SALT',        'mCpZ8TmaM2T2R+LkIm74ghK+ceaAMWpGIz9VB7/VZDK+qgG/az+uPKcWszoXZZf3YI9rTXFKadvmrXZNUo/J3g==');
define('SECURE_AUTH_SALT', '5BFZkbgiDS2IXGrRvmCqOPC0j0YSGC+wNdxjjKPV0ouWKWfUj6iZWtvpAzYIa+yoEW0rxZ4h/crjPfnFlvocQQ==');
define('LOGGED_IN_SALT',   'g2xrK8+ekVL4Xdd2G6NskliVPXW1f6nKx6alwh6ce+6+GTcZaidQu+exzToZLc53Wl6+wVzahZmzvuEOnZlKKw==');
define('NONCE_SALT',       'fxafCaQsScWuUxIT+l/xAI26snpyF7KHr+uSRwBmwxJwWlwW1wWzUGetxooKxx5q7kDkviYGVMM6HBfwIJTvhw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

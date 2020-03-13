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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
$AUTH_KEY = getenv('AUTH_KEY');
$SECURE_AUTH_KEY = getenv('SECURE_AUTH_KEY');
$LOGGED_IN_KEY = getenv('LOGGED_IN_KEY');
$NONCE_KEY = getenv('NONCE_KEY');
$AUTH_SALT = getenv('AUTH_SALT');
$SECURE_AUTH_SALT = getenv('SECURE_AUTH_SALT');
$LOGGED_IN_SALT = getenv('LOGGED_IN_SALT');
$NONCE_SALT = getenv('NONCE_SALT');
define('AUTH_KEY',$AUTH_KEY);
define('SECURE_AUTH_KEY',$SECURE_AUTH_KEY);
define('LOGGED_IN_KEY',$LOGGED_IN_KEY);
define('NONCE_KEY',$NONCE_KEY);
define('AUTH_SALT',$AUTH_SALT);
define('SECURE_AUTH_SALT',$SECURE_AUTH_SALT);
define('LOGGED_IN_SALT',$LOGGED_IN_SALT);
define('NONCE_SALT',$NONCE_SALT);
/* define( 'AUTH_KEY',         'bf8dedc594af93fef336728febd9e3dfd08fc704');
define( 'SECURE_AUTH_KEY',  '0304c87751bfe7d4426a6505d4604a2542aebf14');
define( 'LOGGED_IN_KEY',    '4b1119a15bd3a04f6a52f5b8acdbf1f79e359065');
define( 'NONCE_KEY',        '5828acd447eadd10ea0bc4c6e610029708536df9');
define( 'AUTH_SALT',        '0e9b0ede520c4c0f6b73d152f958a5b256b5e5bc');
define( 'SECURE_AUTH_SALT', '9f5b5a0fb895635770ff9b81d55307b32c00fcce');
define( 'LOGGED_IN_SALT',   '35e2e1a18e13d8ea6510626b353a6d02b9b3b464');
define( 'NONCE_SALT',       'f4190ad09d38d58bbebc4b9d5431af762bc541a9');
 */
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define('AUTH_KEY',         '/p/MxuV6GLQZhYxbfBP26VCcR5RNUCqR0RyguzIFP4Lb2etrSoDPAREJAxAPgvDqyeC7oCMoD1aELbJaf8hr4g==');
define('SECURE_AUTH_KEY',  'aYhkNWPGGWXGugrQTo8AGqcPB18OrYceyNuTuoJGv9Ch90qnINyuTIebm4TJKHAelfXOI1ku2iRgXEldjmprFA==');
define('LOGGED_IN_KEY',    'K0v2IEqQJlvSv0jD1rO8QV3ykK18Bcc8xGtcfVncqvudITtSm7WUptjo71C3MPhQPvhV0ycx4r/Bpmb+EsxEsw==');
define('NONCE_KEY',        'EACGyJp28QS8/CSWbH+1Rj626PfEcIor4SU5bACDbmPl61BbIvw2SF+bLgaY58+kfjobbqsravSFSSYc7uQslA==');
define('AUTH_SALT',        '/8hOichCyijiMC5tDoONZ6xoHOR78C8dPQZRK6ADfq30qndC4wYDuzHZKS04ZsGedxWzRwKqGMGAYhgGoa0s8w==');
define('SECURE_AUTH_SALT', 'N98f7BQaR1Ww+wOTGKMN96bd4dtFv5uBWn26BRGlGp8849LviwNx/9eVbiQoWD+Ax9w1d/+WQHdHcz990bAmzg==');
define('LOGGED_IN_SALT',   'Oy+hwvKeUw1BWkEXCmLFgJRWa+UJK3xU0/rEDe37mTUhVPCWZ0gnWH6zY5nf6e07mYybIxjEBQfWbbKLUzVHhg==');
define('NONCE_SALT',       'iUpU1wRyQf2otIGlJd1ssZZVeg5Wf0Ghve+qqa0qUqd/MxvllP8+p5mUzsq7r8rhJUqELyQroXQW3DX2ERFFTg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('AUTH_KEY',         'DYspJdWyp2myxs6/RVgXMSYoy4x3X2bjQF8OH1BiiQBsJO284F48BBQAGktzWGkzkEA3/SHFoVMvXglh8rsplQ==');
define('SECURE_AUTH_KEY',  '/40DNjuQL3l0CeD9sGvs84/slYgmArD+8NlymbIudA4kd5CCjzqGlipjCPoss+c0tH93Sy+ZojB/NNBS1s40Tw==');
define('LOGGED_IN_KEY',    'AgZAsMeiNe4dG3pRhR3MeOSbv7q+HKsBjEf2ZutI7/apEomBJolHygTuoiWUO53XOMRwPxSF2AmlFceYMlRQfw==');
define('NONCE_KEY',        'BF9XuePlZBwWtqipT2X7QlJ4tb4wUC5oxH+n5xHtJ9jGyQA1abh8aoq2g9MMyUDoQzxDQHacEqg6I+eUddvQuw==');
define('AUTH_SALT',        'B3djGU/1BHKbqK3rWvxhrXDsRBsEq7isdLMFiBiE1Z9cBt4bghjo1iedIoKWwYnCCKZVzDOy/Fp6BXIxs46E8A==');
define('SECURE_AUTH_SALT', 'DB/zKTdEm2c3+XVTvr323JfdNR8P1FM9g+L90uClXwafZMPgdUpqsuRf4cfwP6a6PbK1R4zRsC3XyYsFFVneQw==');
define('LOGGED_IN_SALT',   '0mvPmu0d9l73cWlpK43mY54ujgsbyvGR/ppscyAQlCBCKYnJPNE4pJPDGQGIMJ14ThyyzkmhmBUbZsI1URQ42g==');
define('NONCE_SALT',       'mOLTPQJ5htNUD1SwBDFJGJlJFM3NMBD9B5GIc0d5zSf6gKqaIxN4hIuj9LzNR9yjsxnh/yeumf+DC8WCtb2+YA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_4nvf8hhp5t_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

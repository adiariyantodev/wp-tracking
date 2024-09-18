<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_jnt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5xmrnvdhmqchxtkpmiulczmeeqp8wnovbtpxcwokoqkucgucgir3k4gsyk0v2naf' );
define( 'SECURE_AUTH_KEY',  'jl1h4ds5dznpspkstnk0mrn9ptm7auylon410hcelm2bh986rfkuaegcz84covv0' );
define( 'LOGGED_IN_KEY',    'lo2rtx5r8lbwllekehgpqaof9pslsgtb9h6ybipwfivvziy7wrjt3snnimx908ap' );
define( 'NONCE_KEY',        'pppdd8m3grahztngguqpocxxlqkjlcqsf3jx0pqeb4gbofvyrvri7k97ryldyvnm' );
define( 'AUTH_SALT',        'kk4i2qp88shddhssf6ypnnnmssqsscqln4lr6ttevjwn5lufekzhknzoi3y2pqbo' );
define( 'SECURE_AUTH_SALT', 'dzsy7xurni4srzaxqufsok4az3hwonzuhxuub3h8bbptxpcha0w2ywevezxm19o9' );
define( 'LOGGED_IN_SALT',   '2dgq6m4qesxabh3k8ccw8wdqifo5w0cek04ncxn6ybkpovdihlowist44nebkvdw' );
define( 'NONCE_SALT',       'ojzmonyr2qu4ososfqmhkvjr9clbzk34gjncissp0uvgodlomwc9zdeljh99az7x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

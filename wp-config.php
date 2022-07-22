<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'babyzjew_wp550' );

/** MySQL database username */
define( 'DB_USER', 'babyzjew_wp550' );

/** MySQL database password */
define( 'DB_PASSWORD', '.S3X]Fpr03' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7czbxpcoxvtxqbtggcluq0bfozot8uxfkfakjdoamidpf92craga0qf7y7vevdco' );
define( 'SECURE_AUTH_KEY',  's0z8nug5eplkc3sjzinpvtleutbyo9j0gp9xunbmrggtc5iwl1yqabemktowyucr' );
define( 'LOGGED_IN_KEY',    'l0udbefbdlxqkx7dj4lrsjsg7aerjctn8au6aiufmieircs1yfmeveteo0dfqwko' );
define( 'NONCE_KEY',        '5kweqob8nxrtmimismxf2urzrta1dhya5bhujftlvpiohcp4ujcl3jpsc5vvsyab' );
define( 'AUTH_SALT',        'phsvm65ohugnsmvs6yioywgtkg9ey8ezuhepteg4ni3qtyide7gc5zxuhkwejx1u' );
define( 'SECURE_AUTH_SALT', '1jl4tgrhors6ti7nbfofxxsfuctsvcagjvid7wrpiuix11ibbljahnmma892wfo8' );
define( 'LOGGED_IN_SALT',   'fnuw4d5isdviofeb5wf7gmnn3ok667hrsgtigra7j6yy7nlyxmrc8a4htknetw6z' );
define( 'NONCE_SALT',       'wygkaaq7k6n8suuruxg3iqc7mal53l9kzb8yjg3ap1eciofykff9qwvwtzgmebfw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpht_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

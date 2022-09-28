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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bipashag_wp748' );

/** Database username */
define( 'DB_USER', 'bipashag_wp748' );

/** Database password */
define( 'DB_PASSWORD', '(49g4S54p@' );

/** Database hostname */
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
define( 'AUTH_KEY',         'etpyzbae5tnhdp5qnqaemujayb3nri7i8uski5kntp30vydoeiw4rwfcahkbyjdl' );
define( 'SECURE_AUTH_KEY',  'btnnyefltgwbemc9erqwmz7yym4xcncawph8wubzrf1ju1aa4qosbus9kfhslydn' );
define( 'LOGGED_IN_KEY',    'qfjucst6tviwjkniwysexfg2n2e0pptgod86ufzrx6d9r1gwtpqndiw1rvngilwv' );
define( 'NONCE_KEY',        'cpypxksnso9cjjmvdtb2f0kynylbln0wtmh8xe6arrtuizgyhoqsvyngjgvszm6s' );
define( 'AUTH_SALT',        'ep9w1i2lqdxfqs3472xephhtwwvh8jbo4cvu9pvn9mlsrddvtbjgbzrn6jzi6gfj' );
define( 'SECURE_AUTH_SALT', '29jaywd8dql5f3xl44l5rpway7eq5yzx3i0u5zb7evl2fcf21kkdldlur5euwk0w' );
define( 'LOGGED_IN_SALT',   'bfsugmklty8lqkmghtpnjwmmpsfv9uesjp6sbzuh3iasfmcko8de6tvdptjmz23d' );
define( 'NONCE_SALT',       'm4dxzut8l9mbwiwem507qcbuunypaawymsytw8b2uhh5b3l9agwhxvbsmcvrovnd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp1_';

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

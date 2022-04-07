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
define( 'DB_NAME', 'inflow' );

/** Database username */
define( 'DB_USER', 'inflow' );

/** Database password */
define( 'DB_PASSWORD', 'bh37rrQOOChhi8O' );

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
define('AUTH_KEY',         't1X(ggT!41=Isi<(L_Qi,MX=BfL3e%CS|i$?-D2+J3YC5bBmmB0Hw$77L8J#%;$m');
define('SECURE_AUTH_KEY',  'TEMjug/i5##q/cN{<#++&1+IPA`35i1F@9Ek3V-JPsm/#;r>!4&WQNxly2LEs:Jj');
define('LOGGED_IN_KEY',    'h0&|%w~b8M?O-!:-fy24,)[+4<MlQI:DJvxeupd-nHnY:b!hnZPtPt}@^f_)DA{x');
define('NONCE_KEY',        'mZn@KLCC!DvHLGJ_R-+KV}}#R4.zRYiGP1w`(Gf}$ lsGZfN9:47M-vRLSHkKE}n');
define('AUTH_SALT',        '=T!sp<bX}eI!*(P>t4jy.t, A$-Ei3^<}Z]:vxjInR0H.Z.hR<2K257V2t=vYL((');
define('SECURE_AUTH_SALT', 'p]EUF|zVxlxL+,1I>Z6c6fz `=h`PAc(9Af)qf,B?ldAMEsj@=a6:<k9u*:+ZON#');
define('LOGGED_IN_SALT',   '~`_3@#8|i.>9z&BC+!B7l`^4f uK+owWX_~Z+D3dgb{E}+eV>O#k,IKoMxm[Ml09');
define('NONCE_SALT',       'Tq&%2Al.O- !)y)rJ)s^GU+1&]Z?7Y/!:o_7!!k5p#f-PI~&~b|YZz5Tjk?@2]|.');

/**#@-*/

/**
 * WordPress database table prefix.
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

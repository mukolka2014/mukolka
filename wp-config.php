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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mukolkaweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>!9<yIrt`[<?cB^a|]Jc>j;WzUF/dxvRRlDF7qe?Eg9{0DdXI[so#{o1h`~Ve((r' );
define( 'SECURE_AUTH_KEY',  '5t/6_o6bF#ubZwoRalFrk9f,53Ce@zdIX+gr[%R@aB7<$R++>99L.JzgUdGWfdBD' );
define( 'LOGGED_IN_KEY',    'l|x%lKFPgHi7RQgB/?U4ujy81>]~iJq=PT7QyAUvl2<Wnnn|b<D|9R}]o%4+7E!f' );
define( 'NONCE_KEY',        ';`cCkLl/SQ,kxH3PiXuH.vTUkl)vc8J2}0-,gQx_4pla?>.|Jjt>IA@ [N} o3@9' );
define( 'AUTH_SALT',        'OMk`5w`?PTf5]EC}=BA)i3z `isy#A{Siju$t(=|3v.?l?1ga,osAaN5sYK`[Gb|' );
define( 'SECURE_AUTH_SALT', 'upo#iLo=Dskr|~A-9fFTA0ft?shMCLZ5@Wwh<*slL>52zf ZCV{5dZ%tryx#LAlg' );
define( 'LOGGED_IN_SALT',   '|4c@Ut)*yYIG5B?Dn&nZz8NhhWXmfQ;iZ+]KNde$3!G5p]uq,2yU6Ps 7}w6/yH7' );
define( 'NONCE_SALT',       'r+,(P8f`Bn:uJ6`(iT`2r,tCuY~xV$TVU.YxB|AE%):!|x#AVZN{KJu^hv{v*!wG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

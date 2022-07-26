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
define( 'DB_NAME', 'senior' );

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
define( 'AUTH_KEY',         '.|Arax:xXZb2WkE;9iWRs4U<Z*3@tJ&a3~q},+|pcOd&2[I3fUyE./<Hb|BYYkwJ' );
define( 'SECURE_AUTH_KEY',  'b$u$e8dENT:]$&97-5gNV}%Hzb!3% `:psq*eq+UszI.Vsg(xNJO3+kl8|d&QK9p' );
define( 'LOGGED_IN_KEY',    'W}X{8eI{u$IX%Hrtk7#y>kCEd*W50/W9pUGxI/Oe,O8+=c=GIrk,e3:21U>XR-4+' );
define( 'NONCE_KEY',        'FPJl|n!&Z1+sG_-BkQ`FAU;~d]G^3d!jF072y}&GBOb_LL!;XnK7_/pTm_vN6)N7' );
define( 'AUTH_SALT',        'i#<]!1h@pUjyGmtB!gN`[t)^oA|5Q9EB1f12M<]? Us,k1;.@lL>_~,x(s`TN(L!' );
define( 'SECURE_AUTH_SALT', 'I3R)Eoj@Nx9{BKj!fO`P%h^T~GE/a?|6B+o+rtGqgMD>]nD^!,ZW#CFi(YY%ln|F' );
define( 'LOGGED_IN_SALT',   '%i[yWh%1)7_]3*+N<3E.6o%m@jZB]UW&r-.4h0YXrG#5Y|<w@OB4X%|X,y3kT_2J' );
define( 'NONCE_SALT',       'T7z$FP1%4[.+-#@P/(0bt{HQ?]irdMRCR|4_78<mt[oTmm@P`48{=TZ#h3{O-&xO' );

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

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DSW22B' );

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
define( 'AUTH_KEY',         'Z~,UMmn/(*L41Ivm)WmIA,oflrrO|UHUPEwTuIO3Sg~)+2PmY?!TFfq?`t-Y-0]R' );
define( 'SECURE_AUTH_KEY',  '/bsD*oqMch^<Ci_b!Z~h|1F?zNbG$$! wHNfgd-nq_G|U&|E#T0{hzhH(#1D^? e' );
define( 'LOGGED_IN_KEY',    '1&lS,fC%;,E)QackKulEGx5dy/l(L2on$u`CsS6:3qk*>=iAgcUqtYD9SmjB+A-^' );
define( 'NONCE_KEY',        'RMVRM[zmC:dJ1@3HW``m?3g_1jc~/_QwwC*PQzjdQfg_i-bd&EI%UA+3qg>iJiN?' );
define( 'AUTH_SALT',        '`}B.My)v#-wdZ,nYDq=sBj]5npFkrA~MiQUOkND#1wF029&zz<pR@2C$s990={d/' );
define( 'SECURE_AUTH_SALT', '7vCN)f$tu3TjpNT[&# sx:rf&M&(UU8(JFl$B<?l+r7+mRLjO3@Os.9uA?.5oqPE' );
define( 'LOGGED_IN_SALT',   '<k|T+^dmrzr&GuM~m>Tig>@D$RENfw<=NnnU*})X.-d{FOWZ^+3@}NH.LaityHdI' );
define( 'NONCE_SALT',       'mm|4@oy-|q6Ap^rhz{iK?`4 &sA=)U@{7$ji:y:Y3V[:)f/Nic`&,IGi2O?|dT-O' );

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

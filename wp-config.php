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
define( 'DB_NAME', 'be-that-adult' );

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
define( 'AUTH_KEY',         ':x>L)MW+lw+RV&$u,prEZlHDk8K4sm9cj`Z9jwu.@Cx@1=MuLpv1#PD?5!Lk{nMn' );
define( 'SECURE_AUTH_KEY',  '5p,$ DVMVWs_s+7#^xdvfLd[!Fud9|8=av`s?;+kLa8O;*m[L}U^<&UoT%xWG=qf' );
define( 'LOGGED_IN_KEY',    'ds!,2pQ-<Mf{-8ilH8U 0t6/*R#^7(DD`EbZohv=1Jl|JY;up/0N:Lp>6nQ+RL4d' );
define( 'NONCE_KEY',        '-R7h8X;bYcNCtM7YB>28e9=((Zzu&u)^f$kj[?Dm|(E$&2]&(`LczoT6WV10iSt^' );
define( 'AUTH_SALT',        '^(6,=uxq|VEqzL$;+J-!(QTu<3V44^qa$@,azTIsydeXxO+^d)e;l%vr8?,=)QjU' );
define( 'SECURE_AUTH_SALT', 'Wv$=bksn5;d@%)qQ]Bz5vGd/_WIvg{FRd7)isz~J0LCA}I%dpVC%1k>Xm4dVH*5.' );
define( 'LOGGED_IN_SALT',   ':;.=}PoMY9l[BGNQl][WM$(N~ $ZVEvp/QK;jxFKP2o-I0^F,GT2O4{?uci^5$-g' );
define( 'NONCE_SALT',       'f%V9!<%ClCjq};be;~`C$@jcaV 6_1mY`HFLNMlP3WY7U/i;.d<Qfw@w qvH3N|E' );

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

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
define( 'DB_NAME', 'salah-calculator' );

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
define( 'AUTH_KEY',         'u!7EX*GFjKY ~&vw*hb(abut Qi4lL pqJy-W+f[Hc@--Vv)n.r2fFktjzG+k!o8' );
define( 'SECURE_AUTH_KEY',  'X8/8&g]1*y%U!{YT}N-epCZH%WvKQx0+1eFuP}VjPaHHlzkp`d1~Fd{.:)659,3a' );
define( 'LOGGED_IN_KEY',    '|#Fubp>1o_cLK>v;7S JmKSlvQX=_V>=khHl ]E~5zF%{}bAb3G^[)x DP%[N]{D' );
define( 'NONCE_KEY',        'VQoovn&M=yg<:4c,aImX>i;aCDy6bVu<7x Fn;{M{TrJY>Wd`Bco.E0Z;SC3_ue5' );
define( 'AUTH_SALT',        'y2ca]Fxj`kTwiTT [ w^ClQ)Qh2Or^f6Q?(]ao+pH0dT/`,N>gX}DeOH`S 3ZaSW' );
define( 'SECURE_AUTH_SALT', 'QGaufHPB8 z#qkFZd,y]_:aZV-9|YrfEH.tm$Gk6<:f#DM33U)SfDYd|$&ovwva~' );
define( 'LOGGED_IN_SALT',   'B%NsHV1 O<4Sj0$Ri9[P,>([RWR2p>0>@tyGh+_b%*}b7Os|Sb?Iv0]#c+ CDF:B' );
define( 'NONCE_SALT',       'drcQs>T! anDg@moqWyU+&C)&_ap[?G[*b(>GmA=s)nZjNn ^vzFD-v=Ze@_}M8m' );

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

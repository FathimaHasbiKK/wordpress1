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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5@=Il(Fy$[2c>DQm[Ff4d@@7ipAJoq@*KNM#d$PbD(:g~B5~(SIfY<z04eV)eerS' );
define( 'SECURE_AUTH_KEY',  '5j6YCG{S:.Y*A>]aDVX#Ce%?*_qYSM%Y_|o}@IQexM{_Oz s,)t9nvx[zU+^W&TL' );
define( 'LOGGED_IN_KEY',    '*^!toxSW#G 4=2Xq|tc-ND*T@I[f6v.Nwv)|)v/cD;NfV0/^y~h[A22]j>(ibc]%' );
define( 'NONCE_KEY',        '[qXrtov~(..(3[n%:),*>5;+4K=A@?*QJSM|Un4y+Mc4[^7pI|T9BvNJ,l<2Nv|C' );
define( 'AUTH_SALT',        'YK>yK?=o$[,9WA6tr$w{l.;-2i52N/_,6ppV]<8&UPW[/DR/N4H)Wf_T8sl~tpA!' );
define( 'SECURE_AUTH_SALT', ':3p_5D._c30^s(h8$ f+o5{cHD.MJqHVpDgUhkkM[c_hJi+zW@b}l)i`u_<$a/Ls' );
define( 'LOGGED_IN_SALT',   'myot5 AQHlJh.5L$%Viv*ih +_v[$6+6{gM_xYEJ>r<sPpCXk_;vBw2?ceH{Njj ' );
define( 'NONCE_SALT',       '@kb?V4~]>SstF{+BPd_hw#O*QGkpuN:6|X[U.@:D,N*A=G.gONn~$]JX]Zhi]0B8' );

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

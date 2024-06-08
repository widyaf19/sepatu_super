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
define( 'DB_NAME', 'sepatusuper' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Hq8qgj3PqK]%S=V3tD_`m_hgL^wFVc)bIw6CR.Qh`,o,$;>,zR8tKZT<kQqSS<!O' );
define( 'SECURE_AUTH_KEY',  ';PI3,{eV=BNkhSjpr14X2=4ICg/!E $^~QzI+0C_N0Y{ .dsV{eKpJ.6~tTYbo*%' );
define( 'LOGGED_IN_KEY',    'QP+iHX5[]OaZFz<ZLAB*N)uK/{Kh{)IfGbV%$[&;(F!d2LQT5`|YFtG9O6DH[/wC' );
define( 'NONCE_KEY',        'uVw+t>eY[C)(u`d9y_78&hh3joR&L(brqEZF$L/x{_S^gR 2DiLyz_UDpmA:dd/p' );
define( 'AUTH_SALT',        '%_Uqxl8O:q;SgBVTwtMPZt=X0Dv7:&H+19!0!cY;5zUm!)/+E~9i)>)6T%q}9GLc' );
define( 'SECURE_AUTH_SALT', 'CESms:Nf#?0FVe7!)Od-K?K+0vq^a)7#[E@~7LWqs(D&mIY)U1|M,+X.@-<-BCeN' );
define( 'LOGGED_IN_SALT',   '%BVE_0;I.l~e2=gdq3N(j)w,K/iy?b<5[[f9_@`ro!hD5`[bu:R.Nc3a^#op#%SK' );
define( 'NONCE_SALT',       'B.|^h?a#NH:iodoawFK(Le9HERHv,PP#x$yWRx|p?YiM*I&%yLfe{-6 |+#Y/_sl' );

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

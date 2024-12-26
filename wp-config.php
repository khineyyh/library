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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lib' );

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
define( 'AUTH_KEY',         '^FN99]GHE!)6$cFw`kK2(p$=;23 DXpq@K[u:R<KPC,XczSE}C#?jPhmZ0|1X m!' );
define( 'SECURE_AUTH_KEY',  '*/8G$eF}jBDpU uaal.crA:}Ak==}H2w%mfYb^ k[_k`NB!2--0~&wA*5)UcJl8>' );
define( 'LOGGED_IN_KEY',    ',BYV^+.T(5E)0MyO:4}PZAQH F=7EGd^OAf0gTC!kh&Qx7$pkSA{h9Tr7Mr1g:Sz' );
define( 'NONCE_KEY',        'Iu<ruS4Qzj bmbvG h}1LztxLPo{!)%Fx@/7l<:m%o[LD@oZr@X*4|9PF7M4z?{}' );
define( 'AUTH_SALT',        '$j?lS;/oDKsGLnx%$p,783P<#$Vq3g&;L%)X5XV3h{fy_qx~?(?zT;h`$NXNSWow' );
define( 'SECURE_AUTH_SALT', '}7h:Uyr#5Y+lmPg:c`f&Hc@ajBYgFC/FS1X8:A_/]-IsgCtFJ%&Nzrc(#gHt(B]|' );
define( 'LOGGED_IN_SALT',   '<P[0Lt-T,L N1h=e7Q7PhM?ca</Ql+fM>{ ew6?;8@tgv(~?sC~49]|r:t]a30[&' );
define( 'NONCE_SALT',       '[9}<?vf$gq~5]~d;1s1W6yPq<)$.?;nE-clO|H05V4jY}R]f/F+1])lS;wVNAV<[' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

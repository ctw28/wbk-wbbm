<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wbk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[;szl(T3jpt8{AfEh/~HL2pWzUlO2ikvb:VKFMnHqDe;HAqc/ss=p-/xv7(VU3zp' );
define( 'SECURE_AUTH_KEY',  '+W=s+#u)!0^m fF+5#4vo9(-b&F!zfKQKz$p$rbMgewXzu`/{[cX1+1?W2xGgKZ_' );
define( 'LOGGED_IN_KEY',    '98U3?-4W6`vh}X{SR`KCfmk$FNcB{>>smfc9oSM@wTQ-DcY!:X|#cXyn~$e`ufCE' );
define( 'NONCE_KEY',        'kmS0^$hU.U<?YobA@JxkZ-|,N:fMA9_JC5b2=mPS$*~gjB#)<A[U2x=` tNh_18v' );
define( 'AUTH_SALT',        '/s-0E7{D1B(@0o~w-E Ne6&n<Z5<:?L)i{JS%=Z#mv@r${DH#%xNV^a;J4RRb,9^' );
define( 'SECURE_AUTH_SALT', 'hs|n.MW_.jCd[h)tj`XL%<Sd?W}&!DAw}@:+8Z8/?s_};|:Xie}9RG5qSolRvweg' );
define( 'LOGGED_IN_SALT',   '9+ZA D! 0lN^39t/8.jxThds}OFUSG<=OjUet;jZxXiC!R<ipdqCVY*6{z<3* ]x' );
define( 'NONCE_SALT',       '==Sn(cR(Sipg5cCBJoh]v1MW$l.7r,Ou))3lE@@Xx7>a!icR&;@T`yEA}3v1>G-H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

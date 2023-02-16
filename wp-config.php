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
define( 'DB_NAME', 'maison_ecologie_activites' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uR*Z`y;:eNt+WHWeddLM#,O:v6yWc@z98uz:nfQ#wruvhj*z<fi[U(RxT|btV]Z8' );
define( 'SECURE_AUTH_KEY',  '=X/*s[U.TXUTqWR QDL2F7-e#<.-}m#6Xkplyvk2=?}*YpYZcRZCe0;%N~fo]?g;' );
define( 'LOGGED_IN_KEY',    'yXzK[ER^>[~.3LvC-k`5d:DThi3/R:=tf~Jmj&tlOD%GeU2H?qq%<!4-0*Py(&K>' );
define( 'NONCE_KEY',        '((!O7Ono<J&Z_)ag=yg+M#?ZGWS^xkJVxDn`x2Q@<_vFnIyUcBW#52k,H:%uBURF' );
define( 'AUTH_SALT',        '(+BBCh;Gh]GBJt!*cd}~jO>?6ReFV;4I1go:5;xJ.RLB~M:0Q><HC)-?`W}rG#{_' );
define( 'SECURE_AUTH_SALT', 'K@q~AwwX^/;K=6YFp,$oZ[81X@#Um!8cacA;jl@D8vF}F@{uC*}JSl1,-nS-njP0' );
define( 'LOGGED_IN_SALT',   'bhybE.1|l[#>){?P#[Nho3]s#fbk$^J^Bmg>)F4Z!+Q;R[ ,5_}f=B4a,7hl%%T%' );
define( 'NONCE_SALT',       'y/B0^}%owJNj+ ZV#06>bM2Y!J#n6_n9W<hST)$B5Y}c%vH~mhpB ip,eh.<!C!]' );

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

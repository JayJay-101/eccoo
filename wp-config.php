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
define( 'DB_NAME', 'eccoo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Dx5+r2BTY#L@!#k5G}7p|+%Rg{1*-i}^^tCFr8Aglb;!Mn W3.)mrO Hsa.rvgZ}' );
define( 'SECURE_AUTH_KEY',  ';Ds]WB{7#D 3t4Z9xIgw ed~EkR0_BIjTcbBTjE]y2[rGaQ{DI0I$;gBR76?q[ c' );
define( 'LOGGED_IN_KEY',    'Pb).c2$xp>yN90PQnOR)fqVskLmo46!C.YHFS:}SUs+cSXqbbj~iL3:(JG66(ubD' );
define( 'NONCE_KEY',        'ybT#hI6AK6vd(UdV;+>Jx6-X_CC_v0;[PqzWKAL63RI+}c[Pn[rl7y6J1hW7$r;[' );
define( 'AUTH_SALT',        ']q9$YCB(p<B12CsUKlH%eb ]B8!A0N=qJ!t8]GYi]oH3fF2DM:9wX8__lq@)5uf=' );
define( 'SECURE_AUTH_SALT', '|-1ijKzDm*!vjcHeQ=-n]0;1?~&bng_|*:fNw3aSR&oS4LiRm{|u<~_.QfMJF*Dx' );
define( 'LOGGED_IN_SALT',   'tj?LSMve2Lf78~l;d}lRr^%uBTcd!k<}>/m=:ovKJ|U.i.jt)g1.-,mU7 &Zhxh0' );
define( 'NONCE_SALT',       'wF*qk O%K|yM/!@92ZNd}39q)]jt|}NsX5E?^g}GsDL4>Fw2Q!P]b!~xqm:Ruq57' );

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

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
define( 'DB_NAME', 'gitno_db' );

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
define( 'AUTH_KEY',         ',KZBx?&AtF[eAtR1%Zme#^yrpEKZ-c>q[JABB;M8B9Wyr#(v>B,BBQQ0sBjI42,7' );
define( 'SECURE_AUTH_KEY',  '*bvZJe6^)5 l%0(>|>e;5n*HtG(WJ{c@N|L=SywRI?N?VVhh j>R##>a.yA*~B{)' );
define( 'LOGGED_IN_KEY',    'OqFp|+B<f},tq,i&P<WCUSY&L0t^h>b)MWE4k=1tm`X&61tI1+-GYl9H,l;?SYO4' );
define( 'NONCE_KEY',        ')JUdDeV/~y^l.mAtxVOt(^7S[vgNI?-z?3P+|3Bi7/#`TEN>VtlWU^L<13XDFdev' );
define( 'AUTH_SALT',        'G@k8cE>XCsj|o!f`+-n#E%R$V!D(soyDR^oV7``?yB#o@t~&}RQ+0(@wpzYmeN1*' );
define( 'SECURE_AUTH_SALT', 'H=jnz6~Y5&@.xoU^Hf0yyYv@~+Racp2=7+}:FFKX!iH#>spcQ+|Qg8XZ<{`4a&Ot' );
define( 'LOGGED_IN_SALT',   '<2[nq<pg@HNErMb>AL[I:&@;(:$0aD/u]5aFBMOSfKh;q#W=zlStwhdn2_I a?DY' );
define( 'NONCE_SALT',       'beh5%R&RZ0u6u:yZ,m!N;5ioPvY}e*ZpGe@gczL2R|%;giB3ay`_kmtjga[%gB%>' );

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

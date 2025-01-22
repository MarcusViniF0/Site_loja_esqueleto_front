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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_X`M.@Mx,SSjyN`>S-tWH%y{PkYh`_T_`4lWx?OS>y+WRIawks~((o@1q~f(2RY{' );
define( 'SECURE_AUTH_KEY',   '.IF|MW|lf@FaScJsRSG:W#u0` u<M)|(<%$2xvd1{9i(qL>2PU?]]v{=4BhBP1T6' );
define( 'LOGGED_IN_KEY',     'y9t<$c4_<,LRW4<HTNY-jj0}[A^^~:fLMU[`Tst]8Lq|;_= {gDNn>^87Q#lb/}%' );
define( 'NONCE_KEY',         'k@Y!=W/izTX*}5a IX0s3U}]}9miVQiwQ.Fj8NKHC5Xkl1<*`7le[b73YU`B,6K-' );
define( 'AUTH_SALT',         '$4AbUL!(wM%DnvkjTLOqVurBQt3@Crv-X}m=dcq2==~hNHT1eVc/{-}[#y%?D^x%' );
define( 'SECURE_AUTH_SALT',  '8Q!H$*}%U>-$5VggY/-FQK(mS>R]+(l2*qY[L,=v{~nIGh`tO4@^WS3_&7[uXo~%' );
define( 'LOGGED_IN_SALT',    '5fs&^kYC6G${H|L&4I0,[:0)qZ{e9j!Z~WsF!S=QytGQzVAJWY-$FyXe.Zg5?A$o' );
define( 'NONCE_SALT',        '[@(-$YD]sy+_k(%#:m^}xYhtRGW-~t2u8nR.V*?|:(l&8sI$gU*G=VVfdu/]-xmz' );
define( 'WP_CACHE_KEY_SALT', '9+Hv#7^-[U[X+V/9DMe-]#(&)}Bra1V`.[.Gw],kzA`m&i]WO-<`tOSjwz3V6WoH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

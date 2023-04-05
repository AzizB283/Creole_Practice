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
define( 'DB_NAME', 'newsite' );

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
define( 'AUTH_KEY',         'OrXPd:bku#@BMB|;h6MI)?*`HPIAd4wecqWRqEP3mY?4k*oYC?,3AQ819yMohaIs' );
define( 'SECURE_AUTH_KEY',  'AS?|km~lzC.GNma`An0#}@,qv<>t)5$n&M^9ReIiIo=>^a;!B?u~/L{O94~v!K[o' );
define( 'LOGGED_IN_KEY',    '+!xl<YS+J[nj#2UgvARvo4:R*I{Q]:2kt<:K(y8jToQK2h-r#~Uequ(fhu#(Z@!x' );
define( 'NONCE_KEY',        '9nI:51gReQo(3xjpkSKyS=m~8.eP,bxW,TbtAfiWicXt^?B>qG2&PF/RLgkaH!Le' );
define( 'AUTH_SALT',        'cL$HX3I_^wAk!9xz0i3m55!i;hjG9Itwy:$ 4R1 aI-# 8G=64ndeSClCnW!nV3Y' );
define( 'SECURE_AUTH_SALT', 'vHj|3#+QE6!@yvLBi{G)nE.[sT^aPp]Njw{)a62(h@Sr)DQ8X?+%dy]|jL%a)]|o' );
define( 'LOGGED_IN_SALT',   '?<_gYHX:,+Tj+m41K5>ncOi7>:NK#H./e]QV/rdQT8q6Mo? >mPE7/nhS8|_,(]p' );
define( 'NONCE_SALT',       'lvF]2tT|a3]z|2bax-<&-q]6HFf/z]>XZg{M3&5N#BWOt!z{ZV^o#F~+WSP3lvXq' );

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

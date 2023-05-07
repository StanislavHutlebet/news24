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
define( 'DB_NAME', '24_news' );

/** Database username */
define( 'DB_USER', '24_news' );

/** Database password */
define( 'DB_PASSWORD', '24_news' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         ',l$@HCDv$`#(oNk]e)V!$2X%HDvbmxVR)/izNnfVG}_RhX5n2y;MPsCh52?y5 Ci' );
define( 'SECURE_AUTH_KEY',  'o|5j~CWP,TmQM)2^CLQ$9!mxcX&.K4(y}PWE?JnnTk$}tiK<RV#!]~7h@:3}`3!%' );
define( 'LOGGED_IN_KEY',    'eZ=`akzR&`@G=989&fPql=E@#QG1l2kxt9i4kZOcH4Ku2jVl0 TG/(GkWYr<->f`' );
define( 'NONCE_KEY',        'Nzbzu]%w>]r;3Btv+n5:j{]@8KR^Db@zSAFz!4L61T 1OwSun4(z[~*+],4t3.}_' );
define( 'AUTH_SALT',        'P7DDZBXUoK)X1UU^O]0;VW,g^ gI7xPa5@w(kc=HPPRq4KZSTJSxrNW0!8p~n!P?' );
define( 'SECURE_AUTH_SALT', '3fX.B&<!!C1?c5 zN@#m>9g=s=`wq@e<}<Hhx{&Ke:s/][FYk3w8oFhcyHY^{^YG' );
define( 'LOGGED_IN_SALT',   ' d,a7>DKA.c?b7]_[qqL^o1ADdp8T{P1Tmvchop?g#?(zE,:zzwAe3[sBdLazgcR' );
define( 'NONCE_SALT',       '?R>`?.7gr:ZK814rBz1&)S1}eJGDztOf;S8CmENNDWJtTuGX@AF=<VkL&XBF{EFo' );

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
define( 'WP_HOME', 'https://24_news.lndo.site/' );
define( 'WP_SITEURL', 'https://24_news.lndo.site/');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

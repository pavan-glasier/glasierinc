<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'glasierinc' );

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
define( 'AUTH_KEY',         ' PMLy==$ [,;uH4!8oVHwHv):{WVG-r6[PK@P22DZV)flaE_N)00!m=  naWPiu_' );
define( 'SECURE_AUTH_KEY',  'Qz/INaq%e^{Ea -R*=_Tv*Ktgz@YCsFK@4d:x9J`0{M9b*}*&C9jm*`ixZ9v:XBP' );
define( 'LOGGED_IN_KEY',    'UOyYSR-)Dmij!eE<q%FKDiggC,%^ LY5A+>YluY_xdQ7W^#-I#4#voT6>vLnKr7s' );
define( 'NONCE_KEY',        'E*S?3t@d=L6_k!0u@N_f<6oS8{>=O;dy6!sI1ew|3B!|76F5V7P3j{DZ4}uR)-:^' );
define( 'AUTH_SALT',        '[Eof~GnIxC|uZ_&PCX.gaOuZWDj<~ub`E<)6ZAech?,nu8v~b74o+_Y@aR]6I-)W' );
define( 'SECURE_AUTH_SALT', 'k~~QDd*{u5R,/;gFIPX.)V%Ej)0HcOGlop~@P4Z<Lz,5sHy,#|PSpAR{NQOFGO/7' );
define( 'LOGGED_IN_SALT',   'WL[|l~B1#.=.yGFtU{JM=<p6@&$hQsh_NUrFg}bWBZs;c>#JGG}X2`_pU`GaHJ7u' );
define( 'NONCE_SALT',       'yv|&Tg<Fj)k{i.$`mWX_#IyG|fH!3^H/L%.Z{Kl8a5B^gS?5N0oBAcW!IT?c_yBT' );

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

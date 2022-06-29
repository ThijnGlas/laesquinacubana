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
define( 'DB_NAME', 'esquinacubana' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '!A3l@iLEDEVm^Sh@<i&hvN,f9V8cfS]g39>JC[K(qvov})&ur.|:DXf5+|hs>u,[');
define('SECURE_AUTH_KEY',  'Ch1,8+r7{{?3(.:I;7MFCK,#+7`u*A.#g1;76-&nhgn<Ufp*@#JrHfRl59Pro2y5');
define('LOGGED_IN_KEY',    'Bf$vzbNt]!GvT+7_cXa3n586%6cST?EXFgwytsp@sB*%4,9e3Y7i$^<2eTYYPwjn');
define('NONCE_KEY',        'riNZ#n==&N1xnL)HSWfB~Yfc0c=rFhY3xbb[9+j!Yv0-o@lfjnajjr4<O 6YN($k');
define('AUTH_SALT',        '-EIY9pi<!O;ZN#5{<rvy;;(y|A*Zsb/Q,<_p{i*f]Qil,z8/r$g;_+s I1{}CR}0');
define('SECURE_AUTH_SALT', 'R(?_?lJCJMeW*6>l^vZD?9@~yRR~!}uVzw35pp(8QN-yyr1~hsBc%Y^E(R.w9XT}');
define('LOGGED_IN_SALT',   '1F-9bZ4|2U7tZ5XiVLYVW+6&XO[+W8g-;s7z,;t|-p%rq|X#@=2Na&eY!@)<+h9o');
define('NONCE_SALT',       'QnBx+=[/C7-b+u-=2/Y`6^lG*|Im%lJ-]7Kv=HBr>eHKvt*8[Y+i(f/Wtt}738~G');

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

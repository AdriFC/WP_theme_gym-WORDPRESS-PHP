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
define( 'DB_NAME', 'curso-gym' );

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
define( 'AUTH_KEY',         'Rd/8v(W|I@;=8rl2D;vKfUQ}_QkJHo]7[+&:G0w>0!z)]K$eyl!A8d<6X!EPTDem' );
define( 'SECURE_AUTH_KEY',  'qBF13PMhkX^ExuDzPOz:Eu H=_GFFzC33L})%(:($m-:|u)r/&9@%2B}}%>hLVSX' );
define( 'LOGGED_IN_KEY',    ']@^#lZFBB9E]1m0RF(Lq9[1XInSQ*a|xoI6}g3#E5*:cOvbx5b6?@bl!aJ9P@,nq' );
define( 'NONCE_KEY',        '%w4xGh<<FEfM#g*4|iD_EdcPr8*wi0^eW1;KgS15-FrSa6V N:sn+`x7./w-Q?* ' );
define( 'AUTH_SALT',        ':1wz?NzqQ3 !!CoMB:#h3`)9?3?,J<eIAed52LW5Y2[(]zrLO,AmHSc),k.Ch }W' );
define( 'SECURE_AUTH_SALT', 'EjcO~+j:]&g^p.(v}|j-rlt#7}+a#E^jJ6|L)=q8)4*elYFTEioUVb598!Z!M|)C' );
define( 'LOGGED_IN_SALT',   'Ss^).hMp64Zz$h+ozSVc`.1~_;xoti]+#q-(BYK33H,l8{zqTc8]%~Ob[v*a)=m#' );
define( 'NONCE_SALT',       'au.<+~y::P> (Dq$9#|I.6cm/mcsrY_G*97o7v,p`GH#7pMg ctk:~Mz&>PyR05l' );

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

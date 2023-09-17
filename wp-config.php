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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Gv}HnFV2Ee/_M&>y,ep<65f<TOoyb:N#[$jsYWogJM[+gks/3uf|;m<Nq=(w9Yrv' );
define( 'SECURE_AUTH_KEY',  'AEeZ1AR]Uwc=r&p@tq0*MgfcnhMMJk[ys*OQO DL.2jAvR+6:]?-TmaXxC,$D(+[' );
define( 'LOGGED_IN_KEY',    'jV2<eWVR-C <GIYBf;B[(;*78-iOzws{grN~iGXZV<Ff?i5henf9l5 Fg[/cKM<n' );
define( 'NONCE_KEY',        '+Myv50k;Wgbf&DZLWwvCtb}Dc0GJ4%_9wMUp<X;[FVz8y{K:VIK*tAb/MFe0|09$' );
define( 'AUTH_SALT',        '?2O,MU{eGUF%lO.y$n6n%<+phWWcXmW+p*b3[/0rk``d.}RA-8V{XOsXIpd0zfz8' );
define( 'SECURE_AUTH_SALT', '-C1#)X`RBJ@G~PjE%jC09:eMZJ73@h+akz)J PZc^fR[[;tf:rmauR3:s`h4Kmk7' );
define( 'LOGGED_IN_SALT',   '/uQd86-F2_iwK|FfK+WQnXtHO-Btdh;wQRtm|nzbmoLh<5]bZVT?)<ex1E0&lP*h' );
define( 'NONCE_SALT',       'ASPp~z>sM>U !4Sq_@gYdke@(9`l}*fBKTd3tcZQbD[5poFUk=ANZ2()??$Ex$[h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

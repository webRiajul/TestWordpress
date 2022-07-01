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
define( 'DB_NAME', 'taste_db' );

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
define( 'AUTH_KEY',         '5sPS=mdKl??Wo?c0[bz U81z5YOUcuPR50yE!nju7;ziF$@cQSlG:pIZ=)5]4<;@' );
define( 'SECURE_AUTH_KEY',  '^8>I<;`Hmu=%)4x=fsqBPVW(`HfnNTp<QSQKk36dT[N]n_O(b~KsouAKM[fOnD:@' );
define( 'LOGGED_IN_KEY',    'G^0<o4-cY7d&d2GEEKL9;^I>s-kHcqL=iS&ts|`(.:v)BlK|W.w;Tt5naA-p[xZC' );
define( 'NONCE_KEY',        'ETM8J0Z< 5pGV?L@1jFp}i$LG:D(:4HcBe~6Tt95eei3Z3Cyhoe8,Nan)(Q>4^J=' );
define( 'AUTH_SALT',        '4kqES|!X(d (/>E^jp-Fcm/jrhYQ#B}-o^gzkrzr5tnv$elu~nEqa.ai|Iy8(,R)' );
define( 'SECURE_AUTH_SALT', 'd47PV+D*ssbCHrcVlLV?(CL(s2l>X}g792=K`NYtFHh?> <=&o*v@@L%ito++bWm' );
define( 'LOGGED_IN_SALT',   'x(vS5[9@+&wQ<LxA%Sr/P6K/FD^t]<(r-fQy{=M%kUa!E!|<O:X74Yg>&:PnHQ%`' );
define( 'NONCE_SALT',       '<R`Phq.Cu<wnH(Dt2{$wV:Q:}^KUQ~i4Cmr/;kuwRwLu[i d@_qr-^r E_xGGAl!' );

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

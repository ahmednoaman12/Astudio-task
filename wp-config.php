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
define( 'DB_NAME', 'astudio' );

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
define( 'AUTH_KEY',         '6KhU,2n+LF*DZYuJLT:N?J,hT?r+NWNi~CrGJWA(EYC%w:Wc3w#tg[95PXflv:`[' );
define( 'SECURE_AUTH_KEY',  '77LUxz!WN&V#jT-4Kcd`}EMj/*g)%kByAv$##k=5{K84$Q6(Y}yn0=|8py//A~(B' );
define( 'LOGGED_IN_KEY',    'S,&L#>zW)$=;VdF^maI+}g8c[Swn!/d8bRbRCVdxz`v*&>B{#IPI(G*9cg-Sm.Z2' );
define( 'NONCE_KEY',        'kn.z_$J>pZr/B?z4O0fgH{uW3tf.$1fw!S,x>s<Yu5^l%|>/}WiF<@4Izhsb):>c' );
define( 'AUTH_SALT',        '+b6:Pwrc->9HR78c9.q$$=iEVc[9wzaKw4ZuQe~_pvl;$fb%ZS~oId*Rfyj/< s,' );
define( 'SECURE_AUTH_SALT', '^e[- y3rss#tSl2M.K-k(E!clJQIPRNz)@O[y1u(_6l!KqD6i|qGFzZ<+MN~f m1' );
define( 'LOGGED_IN_SALT',   ',ChPbGkd*&</3gttUEaKF((r(Xl/3TchA]J{[TcUDB15QF/ZUG7l8W{{rqYpzcm+' );
define( 'NONCE_SALT',       'p`bFq1KpSB&|7z+>6.aUH{j21!f#DgLNn*>;K=Y9HynZu[x(a*83a`;%_h]&)^3y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'as_';
@ini_set( 'max_input_vars' , 2000 );



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

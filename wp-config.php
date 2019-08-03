<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 define('DB_COLLATE', '');
 define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dev123' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.1.12' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0,8?}0vviVb.?{#cjkh_GjVvedFOxx e:]V]:8zGL/[+1YZHQw:?B XBrfP$,06A' );
define( 'SECURE_AUTH_KEY',  'wLYo=wJ7GpV/<[+/vTY gleFoRS]w**P;(Y*bnO@s`sWUp1vF,f, 2UFX1DKSN?/' );
define( 'LOGGED_IN_KEY',    ')dto?6mkjJJ^@R>/InL5^1_(s1c#Z.yHI6(Dz<7@f:8T>^.tC htZ#NTtvvT<n!8' );
define( 'NONCE_KEY',        'KsYym{U8=Fvp2jMt>`p6g*T>mC[@:11y70 s::@mF_9Z-t1,G]y0u@K3p9Xi5ho#' );
define( 'AUTH_SALT',        'Q}UDZ|@X&RV1y{=r*dX/>ZxUf=Bf)l9uF@j^Zn3+412k$!Y}>m5orY_i,I_[l-*O' );
define( 'SECURE_AUTH_SALT', '7C8PY||lg: *F^9up4miPhS/l&M6:CGM*UH]<}tb}M5?;1yv%CP~SAcAFkvtY{gl' );
define( 'LOGGED_IN_SALT',   'RXA3z*r~}rgt&0jwJHaSlEO`LS&[|CvVMQ]A>T#EIM_%Q-a~Rw;QoCc,U <P@=IY' );
define( 'NONCE_SALT',       'u@Iiwr>l7 F~DnNx@Oza|4%QT{iv^q8w$yJ]o>Y|qHF+OwgFJ2A9)n?vk0b;<n4[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

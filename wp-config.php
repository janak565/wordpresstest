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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2[?j8BOA*UdpOSQ H@9FRd%!H,Z&D5`i/%zNjFUmo6[C+#DY{PABNQ{RoDbMpnu%' );
define( 'SECURE_AUTH_KEY',  'miVMt1z(1^TB0_m,YyQdIN3kYb,j^EPBcL)r!hm!#{;yB(WpCAIOY$aq|)srY`E9' );
define( 'LOGGED_IN_KEY',    '.~wSChR,Y;a$n<mTv1CUp]HbFA`J[cB{G!*gy.bW5L.]}igI*d7vlAl4)%a,P)4$' );
define( 'NONCE_KEY',        '**DR7@D<$?lKHv2R:bBGd<ihu4JkHe]9hd))!P,JunjzPLqU4EMu67fLS0Gm/DD9' );
define( 'AUTH_SALT',        '_$KS|)oSyK Zm!;TjrgY5;Hi%d,~?&59DSRsE?M9*xesQ%qhjf3LIb>Ji?hIS2=v' );
define( 'SECURE_AUTH_SALT', 'cIU8D.)#jun`V3B8HPBQzX~^(_QO{Hu@mZcV&IB.fD8ie4okR:5{h~m?qM:^SN j' );
define( 'LOGGED_IN_SALT',   '9O6_q}sK$-4l?}N|qBsZ%{;%brjt Y7hK=?:*@bby+j8LEqP;<d+.mbODz7mB<3~' );
define( 'NONCE_SALT',       'g<.in8j^NK<aJ%T9n/|^yFH<wxgH;MXX>((zuSe.P#!a7KM P(WuMB<cfdvVE5@#' );

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

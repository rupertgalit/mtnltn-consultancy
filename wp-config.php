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
define( 'DB_NAME', 'db_mtnltn_consultancy' );

/** Database username */
define( 'DB_USER', 'ngsi_db_admin' );

/** Database password */
define( 'DB_PASSWORD', 'M2TU$YWF%RAD' );

/** Database hostname */
define( 'DB_HOST', 'ngsi-db-server-2.ckihoohm6pyv.ap-southeast-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '=Z 5$&{N;<)Y 4dB2XCAxqxswZbzYZ22_r`6V-QX5e!Y,DE=<S$gb<ZMk4$*}w_4' );
define( 'SECURE_AUTH_KEY',  '@>5t;^@n/`<?FGR VR3~i LuEj9Kq#2ck+Pg 2(4M7o<A#NDQDM*3Q7d+@1:$M~Q' );
define( 'LOGGED_IN_KEY',    '3(5Wn84EJ0Rx7XAB%<K3 ok#+TFyw9%ECKFJEys|,b@^Utf|SDU*g`Y7`( }@vvg' );
define( 'NONCE_KEY',        'Jc))X46;;7N|a#i?idulLOQHF|B${y1-y/;+r4(m20}/lnCB>?IwJwUi~vdrC#Ky' );
define( 'AUTH_SALT',        ' $g.}s9@j^$1C+m71FUA2A;-->*.~!WE[1]BAsXF(|PR^{TG<M$CT*Xgp9gLvL8$' );
define( 'SECURE_AUTH_SALT', 'tFR}Xgy[]iG>}7d+7(;g|@Qa3XBpEum&PtZj?2.2:r[.@xM^Q)%0C^DG:4&uB*SP' );
define( 'LOGGED_IN_SALT',   'x%d0n{M=5y|3T-)5pOS:|)_w3A!$9na;H(`WDBb/TD8rIw=k1+jb00t[lv)IfEmI' );
define( 'NONCE_SALT',       'Z< e5aE{cur!5ID2OI.{!vg/Fr%eW>inckRPZe8caPhMqr)Q9,MaOk#taoHw(9DX' );

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
define( 'WP_DEBUG', true );
define ( 'FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

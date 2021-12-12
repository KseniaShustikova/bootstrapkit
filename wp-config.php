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
define( 'DB_NAME', 'bootstrapkit' );

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
define( 'AUTH_KEY',         '^AzKIlAb#_FD<>[=#<K0LXEm~l#!FWveFIGSnzXUV4X!dU@MpbfJ809,C`uJJ<_O' );
define( 'SECURE_AUTH_KEY',  'i9buXrH3r./Pf>l2SNOl%1s|cv?2vo*~R0^{GZ{Z;^1Ib@8HH|%w!2:*=F;WAIcz' );
define( 'LOGGED_IN_KEY',    's7wk0]UoS,:-Mig8;vI|Vc#wHc;#@r!Vix,-MS?1A>C YRlb-R-<}`5>Jc%xcl>s' );
define( 'NONCE_KEY',        'qW%Vd~W=GHvyZG Ug(wSO1E4k#mdJ^7>u~{PAZ!?IlAl3.f 4p<C(O.>rygy<nCf' );
define( 'AUTH_SALT',        'CndLgB@Ep5hC&Sen2}OqP?4V_P (^`FllZ-,h*}cm:UW([=2/aL9xyJ7^T[q:^Cg' );
define( 'SECURE_AUTH_SALT', 'lO>m$dt+PA%u!5Us2z2A|gqu;SRvtcV$qKl}(K}{lH@< K@t=1+Zh1bpv/MaP~$s' );
define( 'LOGGED_IN_SALT',   '1GiP7oo] <v5vwSLxD:QWlyqefyrF_#F%>aand-{#Ud~x=@GEj<HDW@U2Ut$5Ixe' );
define( 'NONCE_SALT',       'fxp0aOPzr6,?q4(+#X}3LWa_Zyc*}R`;GLtwgYvs0R_](,zG)D^`%ZPyaXBx^+4I' );

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

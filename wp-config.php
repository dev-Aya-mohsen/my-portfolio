<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wp-portfolio' );

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
define( 'AUTH_KEY',         'HR}4c-rNA-LesBb~|4]v?&d!g0%<h5)-cj(_pnRLh#T@T^:S&z$dS6H[>My(gNQT' );
define( 'SECURE_AUTH_KEY',  '6{X2mwLLCKNkIbA^lU[^3NYoxj3%jrBhY*^6+l(vH&c-<v~RS?+_N]$!27q:=}PH' );
define( 'LOGGED_IN_KEY',    'yKs_Wo`WN[xt3Cn9f_&IY+y].-$jEu|6[D8qA/$3$Le-Kv@2)O&lQSXuQEb&GKsA' );
define( 'NONCE_KEY',        '/6z?NQYz% x+R5ufU2g$(,0A^R%4|oA622b>hRM(FxIVzDr=.fqf6#2VFB`Ncgfv' );
define( 'AUTH_SALT',        'y/9IetrfszZM!zoxGlfq~tdZ1!j*R]W#UU0/z+>N2 ;X!$IbZ<?JTpxvD-^t60i2' );
define( 'SECURE_AUTH_SALT', '1~0:q?{s!GFbxqAJ/BIklg-?X?e>E*NTK+-L3}2g rlr.wz2t9tKrchkh9H]={aS' );
define( 'LOGGED_IN_SALT',   'K@Y.th[{_p*lG_p4&iePJxg?#[n<SIcz}mkvKBg=x_|PR!]7N$a.kVig @0;60(B' );
define( 'NONCE_SALT',       '%cBT-pPwlP*}@K:NSP;{T>bOupP |oCi#yG4:T:6&Vm>3q`;U .|5#T69W?FQB3,' );

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

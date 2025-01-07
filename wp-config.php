<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_btm' );

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
define( 'AUTH_KEY',         '^0:pf<+JKAr`[kl$#l[1`[3TP)yzG]G.?PkU(}A7@NO=y@,i]cY_W<q,CAxZ(&X6' );
define( 'SECURE_AUTH_KEY',  'whG3$BLd+QSm6O*2e{4rWm4UMG Q=D3J3*TRE0FP0>KmB6cQvGJ41Jkr8I=tVEk<' );
define( 'LOGGED_IN_KEY',    'r45-dopf085)*|gXy`qUqOy`pTQ$V4TdZPnE-Z!WTWKH~*xKA^g!lP!2#.=oUz_[' );
define( 'NONCE_KEY',        '2J}6HT#Em-E}>Ar6!f3.^ojZK}0*E5YrJjGpeTtzWv`w|g@d3Cc4+J)}nR1@nh4w' );
define( 'AUTH_SALT',        'j2Vd<@d9~najD*J~:1`>gom:`2lM3T$0@WVTan0KkMV,{j|c7T1tuTkSH`|PWV29' );
define( 'SECURE_AUTH_SALT', '!rSCC+Jesm8o}jafRi]]6vZm<r,E+0Gw:FU4hXhFPyn1+I@Y[r{x&{;?J!&@mpa=' );
define( 'LOGGED_IN_SALT',   '9i9V,N{H/Y-I0E gal&(Qlrq{EZ7D0.Q;=`xb;BGkL_zt,_N|A`o[*PKSy)y}qW-' );
define( 'NONCE_SALT',       '/):a5gB{t1a;Q!]2}[d#{Y&wrQ=t5VSZAXwb!4]UIfb_ZR:.P&NfSdYF:1Nb3aj+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'crestag1_wp416' );

/** Database username */
// define( 'DB_USER', 'crestag1_wp416' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );

/** Database password */
// define( 'DB_PASSWORD', '2Wp!]g4Sp@M96((r' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME','http://gruncon.com');
define('WP_SITEURL','http://gruncon.com');
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
define( 'AUTH_KEY',         '00dvzj8efuchnojj59wfcmeqszduujn00wp33qq0cbmxeebebwmznvmm2wguf8ga' );
define( 'SECURE_AUTH_KEY',  'jvqgja4z8vrrpxhrnk7dbj8wcystkihpxvr2fjy4x7fjt0mqvy99qm59vulvopm9' );
define( 'LOGGED_IN_KEY',    'yqvyjujndqsoywbvjoo4srbp1hhkhnpnw2yvdutb0eiaox8dw4pqyiihqznzkekb' );
define( 'NONCE_KEY',        'h26px8m1yy2qhw3st3k3mhs1gioxi0fw2kwsxo3vj7su60iviups7nsmmdh95dxb' );
define( 'AUTH_SALT',        'zwf1vie6nxt4chpoxw8hrzd68mjri2ueqpaemenx6foggvp4mge3eubbmjnxlnvv' );
define( 'SECURE_AUTH_SALT', '3hqtf9iayrmxkshpievwfpeo04w7oibwzfktnrnvgm3hwgqqfxkmyimdlfybpwhi' );
define( 'LOGGED_IN_SALT',   'r0ts1cl55yqdk97swfgcrmap3oyqx3qa9iremln9du2bmqmt66s6aok7gxj8n9je' );
define( 'NONCE_SALT',       'uxem0amxsr1p2xk2lpzpzvfipxjvq3hjaex09tx90kzeyga8wrpwy6os4nzesaxq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphq_';

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



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

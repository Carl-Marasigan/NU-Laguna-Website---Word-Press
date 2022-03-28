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
define( 'DB_NAME', 'nuwp' );

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
define( 'AUTH_KEY',         'lKFZf(1.Uy>0?Z%*9wPoi|Z29}y[vj0tiZAnZV}&,L~w%T1X pJ b2%9]USmKc#b' );
define( 'SECURE_AUTH_KEY',  'QIw?56i,--Wt}rRJbb79 #~QYhahJhyXk_q@sk#O=KPrw|wE#L%Rj,sFOd>q)o]5' );
define( 'LOGGED_IN_KEY',    'R2L:g1LG4zEF*)3Qc @x <laadvC}J)~zeK#2S{n>^RL?t!FuVe$D.5yfF@2O+*~' );
define( 'NONCE_KEY',        '=7u5%tRwx;nBo1k;82Cot^:C!EZveep@F#)/ug[A,4xNd6nm2K>U/[U%L8&$2;7o' );
define( 'AUTH_SALT',        'd-IQ GzA&m?S5o>PwkLFL%?!-]5gI1_vIi36O7zY;,m<@1Sik!H*aFO{F1{Rk!4N' );
define( 'SECURE_AUTH_SALT', 'xlmPGg#kJ24oc5o>vvRUMk|<E>7kF~ruDNdF9(3d3fGJma40Z8h Nzbk9a[)BQ_b' );
define( 'LOGGED_IN_SALT',   'iuWeW:UXcUkHgT]C%0L%t.gHg^u+]1Nl-h,gM7W-Z^zZOH&r%u`@.OYSNQz=SM}#' );
define( 'NONCE_SALT',       '51~nP&:jLHMgT~33wo1 %I6>jj^]:E.dB_@pVS(;M+$^)mfa,V#yQquJG)SP4E~B' );

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

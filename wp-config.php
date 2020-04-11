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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'goodrx' );

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
define( 'AUTH_KEY',         '^^kM9a7d`D[$J/|Za*1DX|2lts|Y1DD xE!54Sz.-B#gy@=o@wj=RI8}|?00{SW~' );
define( 'SECURE_AUTH_KEY',  ']-?DF2?{V:MJY&;VCJR.n@)%4U7M<BA/:>8tq;VN/be6aM)xYxJc2I$J9&4]!g.)' );
define( 'LOGGED_IN_KEY',    'pASQT+fZb=M J|!pBZF(L.BB={6703!6ITP_Dvh;5Cebw/oXlIs*8cc]_QUlT*gw' );
define( 'NONCE_KEY',        'F|@C1Q%lxzzVd&*,*q~R2[`=Z !egj(zK.LJkP_#Zgv<o|;c;M49V0#S<B^9tIxb' );
define( 'AUTH_SALT',        'KYZ|sk<Zxfs=%#Sn+/z!^,l}RhdjZ!y1S13IE9=cs=9+S]gKOZQ(~@)>O;f}9 .F' );
define( 'SECURE_AUTH_SALT', '*2bU[Ho<!XVJ>;s>Mb[0xgy$HT8Q]NC*ONj4e@uZ-,|D(Q^irne/B@S8<A.E$jV@' );
define( 'LOGGED_IN_SALT',   'MSpJ+pK^FR!+8# Ht>OayM51Y[jRdA(f|ZKq^IMOzN%NLBxv,]ru?*A4CduV*Jhb' );
define( 'NONCE_SALT',       '(2pO3AA?`OX8>3r:F[HA/imQ2r:?}(>(DQM;[q?;4C:P6&PVvnJp~1S+|$;@KUo8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'helporg' );

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
define( 'AUTH_KEY',         'ez/)YwpvoObpgmcMG|z=T@B0mXS3E_E2qA;$!`X#t8iz&=.@Ue+qTzf JE7 ~tWV' );
define( 'SECURE_AUTH_KEY',  'cLdp3/*Dj-TF02Y!#+7(1.6]2CNBYB!MTQ1z~2IP9(DA@Q[9PL;Tnj<Z)D=J^ff*' );
define( 'LOGGED_IN_KEY',    'H{]}5Otmct?dRr5vsqxNAMkP&>K){RrQ@-Xgb}:,P&!1^Bm=Cx%6%)ta/Lt.e (N' );
define( 'NONCE_KEY',        '(M(Bw3]Wly]:}F]WWUyNiR+*Je6>}mO|Oo%@0h+e8mW&m^{YdXs7Ef8lq5|g$nL?' );
define( 'AUTH_SALT',        'G/A>1NOpdb{9Ch@.UuYHv$e_XLGAmd9u7.J8<;iuntf&)~tdR^@Pgj7Xy07ZkkM=' );
define( 'SECURE_AUTH_SALT', 'dR^M_+1IDwj/80/mRYQU#R!-8<XYN-Jja6xSxOuV8-QC~TtX6V8^{aO0xso-{J5~' );
define( 'LOGGED_IN_SALT',   'JK|BKaKrAanc^ZiB?XE`(][Vb,:F2}S8S&*-*R0sj0/E<Y?W(anH{R0J:%Zl7@L~' );
define( 'NONCE_SALT',       '+X0!~Q]TfZ+{//b#r>[{!y|TYP &?,&@vc~ZN^0`!!~skJ$;OBDv8pkwMG{.H$Rf' );

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

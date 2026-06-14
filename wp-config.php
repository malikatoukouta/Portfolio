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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'cWo.cRXpG}4DJQszk!K+[gFVUXCLBcf+wbK!OpoJeToOn|4tpr[Ikz%6_+r>>&{h' );
define( 'SECURE_AUTH_KEY',  ' _!o#P]AZmFHwW_((x6Y@D(gsu|~W;lZs~UDCnj]SV df1{XLt .il?K0|&lQF7q' );
define( 'LOGGED_IN_KEY',    'X&bjo,,|-Lsq&fYwWn4R-(#h3$#Y-X?`?CmF%5pT5H~ibQ&T~)xY)bx[fK$35 +`' );
define( 'NONCE_KEY',        'B>|X@Pi.n]+WPk$:0,YmTa+uhYv=P!p(O6(x|7N)]H-(5?[|t.):2u9((=-}#Z}U' );
define( 'AUTH_SALT',        'hyJDEl3#?IiV|KG-+E8Pts]C*N vmMWb!BbUP%*$v;]hj,06q?_a x8)M>FNqIK!' );
define( 'SECURE_AUTH_SALT', ')l{V/p//SO$TZAlT#=wB8UT;d,of#ixPM5Z}l4>~%Dd6B6W?,(?QT&4l>+-[7^M1' );
define( 'LOGGED_IN_SALT',   '?>OY9+AE[Gn4jp#<t8rt3xWRZn0`dd./r;Dz:OMw0g}~Q:XRJF%c=E|D.-~~^4}~' );
define( 'NONCE_SALT',       '(Ls:m$8ZE<uE,WTdH}$8PZFsUQ)F0iWp$0.QnoNN2foY)ePE!{8p!4~e`;j5Ja s' );

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

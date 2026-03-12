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
define( 'DB_NAME', 'osakashimizu_mainwp' );

/** Database username */
define( 'DB_USER', 'osakashimizu_mwp' );

/** Database password */
define( 'DB_PASSWORD', 'mC8EArkV' );

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
define( 'AUTH_KEY',         'Y-DLkfBj#-[}urV]qY2znoZP_i-1F-r|O*6V{eojv_0-I$swU#~/t[<7Z*V)bWb=' );
define( 'SECURE_AUTH_KEY',  'h|.Zkmmrh!R^b?Eck#oD/Pt9_c?i8>~R-g5wNfICN!ph~?||YgVD?RmC1#mMjMVM' );
define( 'LOGGED_IN_KEY',    '@|`mI{U-uP*<6~WC|^GL ybZ5fWj95D !)z6r~^QwMy{hevL#&.4v}|4CbG]:V@`' );
define( 'NONCE_KEY',        'TFaWgvw+bi|!?&SjInooc3f_JJ|BnAmjL2k/7xo4)czQ)+:D$c_Q7~zUJmusp4mh' );
define( 'AUTH_SALT',        '(6XL0qFc1y+62.rsMjxFoq3~pLAr`QE/0:dn|Y)H3D!j)Cl?-8tS9-,#FG;?wJAf' );
define( 'SECURE_AUTH_SALT', '?~&>;Q_@&!}y)&:mAF~,~}9*Khle-|$7A~pTh<)c32)4J&y6j;v*uN3CI=LN.-2/' );
define( 'LOGGED_IN_SALT',   'yxV8qKLuND0VLu84{M+%pz,s+_Iqder=NZ+H.G|bRikFu+@VakPU594 97l8;>D2' );
define( 'NONCE_SALT',       '<DvM(M#xOq 6emh*|>+vYp[VYz04>sz[9ER3Ef1+%.5W=&+$:a+{LW4vi3uW/j|<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

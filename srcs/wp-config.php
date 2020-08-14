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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'QS~:,VBM$|g+t77--`Yw4rCqK-0s.7f?`);ru;UbQS ovqezxq*7xEu+R^t&Q8><');
define('SECURE_AUTH_KEY',  ' !)PW7/M&ydW@;hCqM-_-P|~:zVl-1S?UEQENC*FT8xcT#c_|/=v-^,V-Zg-z:|N');
define('LOGGED_IN_KEY',    '(PNZz0b(4mI.7z[-VaW1,^)sLya<lD:M#T1~3HUaq&::gT*f>:`@XK!g=Xz?-H|=');
define('NONCE_KEY',        '@l< g(`>i JXOcX`,bQk}DLuj=. [7w`<8}*J#@h+KqtX-P*A`p_6GXF:XJ)+x8{');
define('AUTH_SALT',        'KWM|L6(;s~C.BRu!|~sp-lPS%;]R=GYp*!2P/r86|lXC@qvYL=.S`=u,8`tUptsx');
define('SECURE_AUTH_SALT', ':S(>mbC(EEY7Ert.pPpe|z8Y)t}DiW~WSfs-zCI<Y+?B$+Wksr^z+vNtGF[5B>]]');
define('LOGGED_IN_SALT',   'k<M/4O+^ (mx(bu`?OxgZ:zDD.y^{nfz AW-av(@v`cMv1~k+-CxelZ2`DY--gQ;');
define('NONCE_SALT',       'U)}FQcoZ8=~I/VJ3c:6a&^y4#7HEW}g`9n%=2LLofa)7{D-[bpdre2#j}n%1q:74');

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
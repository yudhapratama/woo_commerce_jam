<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/rGx4G+U-+]Cu`P~&lCm 3oC|5w|hW4a:{pG:Jp-@6-Pk` 1bX9ot$VW,Vh-j[sV');
define('SECURE_AUTH_KEY',  '#-@_6?_c!lG!:b:&JCM:!P=?0z%!A6P4|t,tISDTE|RsV:bqp5Cr~~rw5iC<9-i_');
define('LOGGED_IN_KEY',    'A(#|%iSR^aql5et-zY3:Xo0aeQj=+4n2,w.aX>~4STCqD?`^wZwAdS]+ZD]HYdun');
define('NONCE_KEY',        'SS0*e/-!TNK3fq(FSmaw|-P1?kY$T= OTp~Yxg)d,VZW>cJtlcq3ld>yH7q+JZ-W');
define('AUTH_SALT',        '1AM@@1X9-1lLRh.[*q/<s[Q@R4Z4.rzsA%%4C9Vs69pyFFrb|:/N2):Tk+b|C{/7');
define('SECURE_AUTH_SALT', '/j0fkE:nl-+O(I;C^R#eDaSHi-Pp0Q R8z:fRDkBb,:pab+o%(*qcr,|t;L-(g{e');
define('LOGGED_IN_SALT',   'n<XHl3bpiul#.hn&51(U81Mwm84 rJ~4I85*+)B4bK)x|MJ9Q`w|yGLHk @~KP8j');
define('NONCE_SALT',       '5Ubv^*#M5_/Z4j+,|aZ.|V`Ay->`C)_AzBC/R7(|f.^9lc!<MF|l[ ,h4_,jE3A$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

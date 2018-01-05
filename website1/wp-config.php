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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'web_practice1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+/l(k!9&fDKG8wzi*Ov-#TgC7(:Wkpzr.$54_3J,LXg-+1MK oFI89^7.[|3prr[');
define('SECURE_AUTH_KEY',  't:=bD}BbZJ/`(ZjU`dRS[3@M9;dQ=8xfK2pR1`duUvZCRINBWUd:N}pWr5O#|*&H');
define('LOGGED_IN_KEY',    '!SDCtai6HD.)FR.1~zIB uP5.uDC(dh4e cR+d:1JrSJXc4:3 388+4W?5NWf{~U');
define('NONCE_KEY',        'gt-{JK7bl08|>kqv P81+4Z(jd#h/8a!vs:/ 1y~m!1US?egtk=h-vAY@PGWHL3`');
define('AUTH_SALT',        'kCUqlv,6qiCkYn;va;H*vH@<= `Gqgjd/N74d!R@*{=-Wa<|4,THD6DHY!)#U|%?');
define('SECURE_AUTH_SALT', '--.[%2<XthSVsau^k=i>C`}{[XnD%(`1GaOW/&lJ&$I7hpPt#>zTvaF( lHCb5[&');
define('LOGGED_IN_SALT',   'e3mRX >3o`*@.Au>}W.a7CKis%Tku>gf$2B8=+}Yc%N)U)u/wk_u`j<g0*%rDM Y');
define('NONCE_SALT',       '*!/=qRkv8=:J<}kVTPW<K-JQNG2y-NQ/+!9Z6wDX|Wt#[`w;mJ_7AU]3Yg=r8(^]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

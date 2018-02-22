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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '|u+hxGo9f.dn[cU;DhKa:Fy`BJ#i4b(l`eVd*{H4T+6#v0XC|{{fiVF>^YL5QI24');
define('SECURE_AUTH_KEY',  '{y./Q`(WrB?flH6bO,$o__F^=)dRo3^s:8qI}rYoTaf6H) *a?arL*pHFF}b6?I:');
define('LOGGED_IN_KEY',    'CyC]>y!Qh>4@Re?9gu@n_V$D[_SlcSZUhl6x~]lT&uL=6UBKi F=R]yo2]i Qq_s');
define('NONCE_KEY',        '9?aY}jlDCXzqE ^5?~W7K$VU* /daTrK*<dRPe7#KS>=ZW@X(mjm4[.l4*{]C~$n');
define('AUTH_SALT',        'LC_s4yB;bdz9X(4~!KG60H_D J)AD.59V9{*4kYJTpd41Kec{tEy6B/Ob-!E(5;L');
define('SECURE_AUTH_SALT', '}jy;Wtu0)L1(*G?SWY/rETxg$rw)615+g$1u|0s=,{G9f$r/OC~TdnWvqD^K//;N');
define('LOGGED_IN_SALT',   'FT:)t5e@6]?6aM[~@3M?rpb*h!.!Z7D qI_#EvZWrb/2i>Dqxs~E5;$x=szZ4&/8');
define('NONCE_SALT',       'Wu8.mSBR,jr<WUq( ui`K-<]qZ4>$52euO]&8*~M:Og:3[,Zbi4?Nzq;EmomEp,a');

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

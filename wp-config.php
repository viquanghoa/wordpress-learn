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
define('DB_NAME', 'shopgiay');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '111222');

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
define('AUTH_KEY',         ',*lHto#OYjDGC]5AcRyv5?74f4*YB|J#$fxGg<3~`fu5dBJ185CEQ^.y(9o*y$kx');
define('SECURE_AUTH_KEY',  'z8w5`;(NDQt^$~[Nr6Q[@yGs> e1Y&vmRtm=kH4/N ($~1Qa$}I^wqpbGZls04.,');
define('LOGGED_IN_KEY',    'smA`ZZ:=a.ts>dv- +TJj-IIA9-$B-Yc>Dej..|TZ@FhOJ$`DDys+,6L;*nNxUSD');
define('NONCE_KEY',        'Svpj3b!B=:m-dLRwO Ii)d3?8jHfv&PQ>bvFDN}pKR:OQB;@Co@zx/T=(M6.9EI>');
define('AUTH_SALT',        '%s5JSmh:J`o60QeZf]-sG3W5lrp Vr:+%oTY(diPB0p|F>)ZJ`6e!_U`v(1AzW%a');
define('SECURE_AUTH_SALT', 'q&Vn{ysGY8T~wqY{5hb!v9g?!%%vX#0aD4buSY%E_-j(hb4S>we^?~<i?F&x37z<');
define('LOGGED_IN_SALT',   'pdDfHlGlJverrhl*5Q<!d.h[/wlB=$ZbS*XNTNA.+[?_|8tS.D0*MT^@i5[Qt_o;');
define('NONCE_SALT',       'yZ;eWlVd 5tqvB}ZYL`O~L]#U>qvxlwJrGJJG~AwsOaufoWlriXpt5ekN?y{b?w(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hvq_';

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

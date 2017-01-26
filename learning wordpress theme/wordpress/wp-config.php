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
define('DB_NAME', 'wplearn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '15[Qq.Q{Z]g^(qD@DCa^wzOo6^j^3lt~kPuR]Je,-&$i!TJ958.N06B b%0/}vz@');
define('SECURE_AUTH_KEY',  '~MG1%Q=ZuA~EG^+(J3x%/wpA2.Z3ce}/CXEqalG]o|!*S5*-g lWrUH&,9:03ff@');
define('LOGGED_IN_KEY',    'Y]hYKN;y#6~j@52WWB2&vr -Dnm%vN#g?nB# 7Dz6MXe_1.WGM7Z=tKf{q7#=Z:(');
define('NONCE_KEY',        '?X}r:IUMq|9bjy~S{0WyaW~SmnWqTxLplz:%Hu3{.]W*QnnUZyxO7E,|K~_`uC#&');
define('AUTH_SALT',        'h 8v$z&EPKowf([:5P |)1gc6K7la.|tvj.U7FnxFhx=T@1AdNL/Ze ;cO>:^N@b');
define('SECURE_AUTH_SALT', '|TXm1wg<J!ydUa-,Wq3{bz(S~W%a<x.u8z|PG*.IBjpM$0O~On;?=${XjK2a?Wt0');
define('LOGGED_IN_SALT',   'oTmg:g.r&Vun2kbB JTpeNaWh,4X@*Z?[1}J1v3;sS[jKH#y1,^?j 0l_RL4k&Eb');
define('NONCE_SALT',       'U/NSqSkza#4Q4oSnE;81w9t|b](k}0I#L(3p!+^} %6c?xW@F=3i`O02iWe7Y .;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_learn';

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

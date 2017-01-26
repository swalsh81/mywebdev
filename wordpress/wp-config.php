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
define('DB_NAME', 'Bog');

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
define('AUTH_KEY',         '{W|{YR1DAw&A~s8nbR_LXZZ@0u8D8V&:`gNnInE+Q6^o7fv;w.P}rJP.rh!%w*kW');
define('SECURE_AUTH_KEY',  '?zVpJcb}H%vbubleyQ# Q^*On2v1g#fOKmdwpOt&2s()Q=WbGeXx=3)bkZiW-noh');
define('LOGGED_IN_KEY',    'ly*Qea?B+iIs&cX{bPGK&WJPZIV@?O?_G{[bMydB8{p7|80H=HB`82q0 fBD{>_{');
define('NONCE_KEY',        'tS5r^{4TZ0c^)_,lkDX?`a6@>(g{^m^aDPEN+Mcgcp>~741y+z@7Ef6Y8Ml?99Rg');
define('AUTH_SALT',        '0Yxq>Q],9fK#=MC:EwZ:IzywHVf_M!?3E{nd;aT$@hEP&O1:?6tCXqfC[S0Jb~?b');
define('SECURE_AUTH_SALT', '#euUjgo%8[`#|0%Ei%Ql v1{lHZ,-[LXxL4mX2|K=?6emm<^mpjs:HhO3a@jT@=w');
define('LOGGED_IN_SALT',   'h+%.`532W]+[4>!RlM@K{YPo9}m1[f$?$[LC o=!9YO}MN@7/<2P*1xe&?L{El&_');
define('NONCE_SALT',       '/qK4M!P:L4q$sw[2_Om3I hdxFS#TBelfR}RAh/aTvlA:XRy>FS!/LPK`tMi+So+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bog_';

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

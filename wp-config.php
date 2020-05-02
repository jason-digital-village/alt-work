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
define('DB_NAME', 'dbuxqdxyv5pqg5');

/** MySQL database username */
define('DB_USER', 'uwnpx7n78x3nv');

/** MySQL database password */
define('DB_PASSWORD', 'mjczekd32429');

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
define('AUTH_KEY',         'aMjn3gjTD-Hu4!6X|W-oFwYLvX?SG|LGqDvS!.x4nTY*}a#*OA-xltb&+uYQk^a{');
define('SECURE_AUTH_KEY',  '4M>1]5+(R+xUql&9y-X;MO&.,/8Rk:G#8?[I30p|yI!YSy!d_e8b|Y{[6MM`vRUV');
define('LOGGED_IN_KEY',    '[u,X`8eFuI5YT0?co +sXG-#rgS?+WBgRNC%a?>P+I%~/]UcrVVy6wRO))e:z3<5');
define('NONCE_KEY',        'Em) i4^:~;Eyb$+ZJ,Z6k&L,Mt8I) g]Efrew*kcZ~kBkzsQa^Cy L6_r9*PYh7=');
define('AUTH_SALT',        'S:K/.&@-{w/$daAt 4|^-U312#,b,uB*eMp MMgHpQ4T>SH4IKSW5&?t};|FTYjQ');
define('SECURE_AUTH_SALT', 'qbPEB7LT08eq^N$1w>rX.jUS`7BRfT{Y1:EH05##!u*b6#._E7@<7-M]-$)E&?aM');
define('LOGGED_IN_SALT',   '`=W1%t?k)x;;d]AuCghh}+7*6P.j`xq>#Mw4nuyVq*jd4@9_1U#3~~x=Cy.:>XMn');
define('NONCE_SALT',       'wtbx(7*O$8w_&50UGNZ!,p!qx6i6/4mX,w KGBoW`vzq?;)g-~jA(A<eHlB2|v d');

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

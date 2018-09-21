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
define('DB_NAME', 'molero');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rafa2112');

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
define('AUTH_KEY',         'rU:0V$syC*o9wsV#FH%r,GC(:S*H&O~Sfi;HPD Z29UGC[$[9#V*?PS-BvH+.XHy');
define('SECURE_AUTH_KEY',  'dZpcIs-My^gU=)n<@x^>QrPDe6@GI[?{9k[*b5l+6<wW1Zo-Kj0%,f-n.V #@(#Z');
define('LOGGED_IN_KEY',    'JFdoJXbk-[C.t:%khY~~V5LoY;$]hm:T)-+PhyqHcI}rJ4 Xfb{B96sCW<Pnz k@');
define('NONCE_KEY',        'WkrknM^#YQ%f1IezKV)@Z7Fj2-zu!#Ik==-b!2!#^I&ApXV_SJS#$*;^k6: L]MA');
define('AUTH_SALT',        'hTu (tZb7{wBd$:8?<Iz.}2!O?ya4)agZ1 a9>X1n{ROl1I4c3v4!1_)k#kE,}`%');
define('SECURE_AUTH_SALT', '+]G21FERlJ(b>p?znD63646W,16=p<ibWu_s>DS {t$K9tD[%,o6>E!3J.~s3Z9K');
define('LOGGED_IN_SALT',   '>d#nzm89<3U-Xi2r2&J4X:Bv 3{uQTZE$)C=t`p|+li9>)VsGE8D,v}EFby=0R_o');
define('NONCE_SALT',       '1l$eW}Bvn[Q<,tw4=`7Hrl0{<&VP#zUPOKar!`w(6qEw&>U~Wy6LK!v1bK9AHsVG');

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

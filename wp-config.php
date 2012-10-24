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
//define('DB_NAME', 'lewisinsurance');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'wordpressdemo');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '-+~_tN0h)C/${Q*n.8W1kXPFW#aG +N/_7mES_NL_F6s1-I~27qdS}c4&3%:>ZUd');
define('SECURE_AUTH_KEY',  ')N^tx+plS2_;feEY!hTF&RRnVo(x+ndro;+|tQ&++VpIw,ZkywAXpyUmZXz!_8vt');
define('LOGGED_IN_KEY',    'wu;O;zTRGA[|>CL{MeoA%~WMj*?OVUiAcdp-cK/3F(+e)}V[-9yv{~`z(`F1k%1,');
define('NONCE_KEY',        '[W;-73D@e!gahD7d_:4vdn}kS3TgVb%3a+7?zRM~-5j?+:+f0s$(-RL5f;gT]TpE');
define('AUTH_SALT',        'qt#;yQJ>-E~~1o^dSK5S3i-}KfZ$I^B=3Cxkr)-k}-E+]q.0,:iS^r-G-3: |)MS');
define('SECURE_AUTH_SALT', '69SbaKI,K f~/wko~2m b2u%`+*42$s+Nf,CW5]Sr(jS/|6;AgT|7DY24omU;s3|');
define('LOGGED_IN_SALT',   '3I,=JQlkm,+I.Ht?v%j (@#}Fj^&L{D5FR!<|D+,8~H||C?YYD)28S{(;m{RY{-i');
define('NONCE_SALT',       'CT`9}?QeyWYA0T;F|!P3r:^Fja;-I]mn`0p-/; yA%>d8`jD]P/|+H +FMr7-+`$');

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

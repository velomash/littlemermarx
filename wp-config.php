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
 
// Include local configuration
// if (file_exists(dirname(__FILE__) . '/local-config.php')) {
// 	include(dirname(__FILE__) . '/local-config.php');
// 	define( 'WP_LOCAL_DEV', true );
// } else {
// 	// Global DB config
// 	if (!defined('DB_NAME')) {
// 		define('DB_NAME', 'littlemermarx_wp');
// 	}
// 	if (!defined('DB_USER')) {
// 		define('DB_USER', 'root');
// 	}
// 	if (!defined('DB_PASSWORD')) {
// 		define('DB_PASSWORD', 'root');
// 	}
// 	if (!defined('DB_HOST')) {
// 		define('DB_HOST', 'localhost');
// 	}
// }

	define('DB_NAME', 'littlemermarx_wp');
	define('DB_USER', 'littlemermarx');
	define('DB_PASSWORD', 'V1ct0rmy');
	define('DB_HOST', 'localhost:8889');


/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C1?W_70.-IoJfumF(_x.YiyhYDKds$_wL%>Q_.Lcu)&8e)%i%srAVfw3y+pj19w5');
define('SECURE_AUTH_KEY',  'dsvgfWqt-@1u!FeC|Z<`^o.lE1%Iw/vqP,yDTV9!$)XWP6W.xWFS(gq34`Xj@ag<');
define('LOGGED_IN_KEY',    'V6%v.@<wVphDV?JbO)+C5_+)LYUY+L*d[ e^xo,)f5q(5d?~bXPzf/&*MGc^@#kr');
define('NONCE_KEY',        'HH2_-L4?^,,QGGg3B0(6bk|kskF{!nxM+HE~0+MV;i8pCBYeyYPY2Y-[-wn^S%!#');
define('AUTH_SALT',        'E?+[4v7$+E]EZQ{fHA-bFH~5U+#K7-s?djFy=|FZxB>wcI;Cwp|?z^,cbofo8$r9');
define('SECURE_AUTH_SALT', '[R[7jW7sBcFL}0 m618+bPyX.I;Fx47rv-FOJU-_t:>k(@D,--/fN1?i,+SRxa~q');
define('LOGGED_IN_SALT',   ' [xCD;[)Wk*F:|%s!|q+vguh-emNpzly{rP[@mtg=wdYJw#:.Q V0vxP[3TB2?X{');
define('NONCE_SALT',       'DZ>,5FX>I5#h-4sRB-Q2eq-$!C1C^cBwI:Zka+j+o,|(]TO^_i$q_mLJR||Sh q.');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/wordpress');
}
if (!defined('WP_HOME')) {
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']);
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'photos');

/** MySQL database username */
define('DB_USER', 'photos_user');

/** MySQL database password */
define('DB_PASSWORD', 'JVqaR7NBn4Vekz8y');

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
define('AUTH_KEY',         '6Z4j^B_@u[|IO{v>D%kySWZkPMh?DlmC_#ER`27E*}Q$k>KwaO,f4OEQ!x~_6i78');
define('SECURE_AUTH_KEY',  'A.n|[`*9{7#SG!]nwXRil7`Z.:^.|1f`|:H/^|Pd(t&kB%8*g/-h.a|.U2XI52W]');
define('LOGGED_IN_KEY',    '.H,2`2gHqFrEtOU]f)3+CTh.,xtlGOh,rLyCk.XcNp3OLjyM//|RR`8jkG>k1q}f');
define('NONCE_KEY',        '0ke9p9%Y(r:54?AIBE*5uS3ZsSwEC6#V_!DAuKW]:qEYhGwV9DPI)j6$E|=+3s}7');
define('AUTH_SALT',        'BI}Fcn/% I6Et*4_o%7tl=T/FnJ}c=&N398(z%Bz`oXNv& M}_rA!`#?En(8923B');
define('SECURE_AUTH_SALT', '8t{b:v19?xGF][=HQ>W&r#|jiP?keZF^d&s<,&HVjKX/g_+1ZKOcF!v^*}6XsT@I');
define('LOGGED_IN_SALT',   'YSOJ?bBKe25~(DIOpQPr^wc%![p|Y}Bvw.x?>w8GCO41y|u%G39QF(>-(>yR~Q9(');
define('NONCE_SALT',       'pB|Tw{0Z+<B+RNl::Usc^$Z_+PRhi&{+q:ILdN~)xj,h>i=TqLm{Gh_KTQH5}bU,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'photoswp_';

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

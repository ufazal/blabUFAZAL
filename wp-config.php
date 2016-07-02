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
define('DB_NAME', 'bc_managed');

/** MySQL database username */
define('DB_USER', getenv("MYSQL_USER"));

/** MySQL database password */
define('DB_PASSWORD', getenv("MYSQL_PASS"));

/** MySQL hostname */
define('DB_HOST', getenv("MYSQL_HOST"));

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

define('AUTH_KEY',         '`a?b^+Gb*bRZp_]K}2-0[$toJ#LimIolVES?t:v-|q@z;Yp>j)Hel?h+w|7rig1D');
define('SECURE_AUTH_KEY',  '+@.K##+G6 789Q* ?9^Ur*Jfm]$no$qO}|n( =Rpi;,c3W+VhV*{XM{U%elp>o}:');
define('LOGGED_IN_KEY',    'AG^sA+A gK+a+{jWEZ&`xQtTqoZf`@A*8|Gw?Y<v25[6d6ss`0&apaFQw*f=du~V');
define('NONCE_KEY',        '{]|mxWaPi!P%!s/v{UN8[x~XQke+1<pS]c?HaYc#jzJ-hJqmF0%lV?4}Btb#R/IK');
define('AUTH_SALT',        'T);9/b+E=+aQn5.f|<S1uC0iekB2{uX]k`K>vwgiET1Yez.8>t+oxAgq&h_&T79$');
define('SECURE_AUTH_SALT', 'V2ByIC6][:{Fu$2*PODdxM >M1kU{qt3_wxcD[w&PUq|`t=D-?u0.D)<D=0ln5S?');
define('LOGGED_IN_SALT',   '`rA3XD^+q=%&X;bC6|E5Ex+->C4HJadI~+h]/Fdo:@458>h!cp8B*/,b-12a0%es');
define('NONCE_SALT',       '*p.,;~w:RHfPG{[31r&B&k`l+-G8V=$?Jo?.@}$k6-|22 PAy+[Ds,eAP7&$4=Cd');

/**#@-*/


/* WPMU stuff */

define('WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', getenv("WPMU_CURRENT_SITE"));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('SUNRISE', 'on');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bc_';

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

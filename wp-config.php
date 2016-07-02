<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

define('AUTH_KEY',         'x;hJ+1a8g*`Hg/!h/WkYZuwq3 6r^c4L)2sU+`U*wt=KDM~LFX<{J4m.1hvnO/;n');
define('SECURE_AUTH_KEY',  '<E<|L|SG7><*2nwmOfa;-%)W$V9<+mbD0!-=:[mrY0P22k*kzRj=d6e@M6j%^?r.');
define('LOGGED_IN_KEY',    'L4<J4h-|n(z)E~XaBXh04Z.fR;V`-8Q 9yV|Kt;q(U ap-*xycF)b-K:J6`LmK`~');
define('NONCE_KEY',        'rN(2P4lL~Oh4y_;Al+L<!<iH0WX=gJk.tA.DYbfu~A=A,nh{TzYOo8AR+{8eY4@4');
define('AUTH_SALT',        'V^;:$Fl15}9XCE=8^|6{K?l(?C>2(Ok`XDOM{W)`oUGmoM&D#D] HsbquaiPuXI ');
define('SECURE_AUTH_SALT', 'Z/|(GvUFdG*7mh+Z?>]=&M!(41K|DY#z<;s>gf^VepL;)=>RHCvRJhZ[f}va[,|U');
define('LOGGED_IN_SALT',   '#~3wh>7!0K|9pnF|C9V_<Sh4@(?*>}!hb5|2le!+@ WY..0fixc+H2`1v^mAqapR');
define('NONCE_SALT',       'xM}-+u5ut<u}g@(RPBj`QP,tkFH+05yDUV}[_FDj|vC:KCwD,F9-M^6rvL!xcr<.');

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

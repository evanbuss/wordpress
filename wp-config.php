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
define('DB_NAME', 'wordpress-2');

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
define('AUTH_KEY',         'qVl@7K{V#NurY$1)hysAn#l4vP*D+WCM.rCB.,@J&9Ez#)oo/8n?Pb3$#K|7`]ET');
define('SECURE_AUTH_KEY',  'pW`G2/v-Hd43Cw?DMQs f5|/$2!D[E35f~%x(f!mv K8;K&K$N[p2{[nn?/p`Hg%');
define('LOGGED_IN_KEY',    '#s-z$?F({u<`2}qg q)6SbW#d`[pP#BS:O3^lCZ@Fi0!tBxQ)w|v3&lyh#=-_gw)');
define('NONCE_KEY',        '=Mf25,DRoeIF/<yJ=^UWL|HT6j4s=3zj/XxSL{L){<O;gnE+22+M6By}VB(Pox-d');
define('AUTH_SALT',        'Du^dXw)4,CI@98-H0P-:XVI3_CCe$bg7goU|)G:d|+1SEwa+:_<b|LFuz9#<]UY-');
define('SECURE_AUTH_SALT', 'C_%O}J8y1b,8[;{Hz_HCAJ52=/W&`4cMSP1dg1>_pyY.OOWDrkv|7m4dWhS+&VE>');
define('LOGGED_IN_SALT',   'PFK.wqUR{6cikvKK#%F9O|_U^;STs2oGkS~|@S+L.fyDqhRyGdo~0@e^l,CGdZ:>');
define('NONCE_SALT',       'T<II B/}B+(7u-Sz-!KZ:+_;^uFarrFC6^FBMvBRVHOs&W+NZGiOSwz77Cv{j>]1');

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

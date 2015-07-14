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
define('DB_NAME', 'webonary');

/** MySQL database username */
define('DB_USER', 'webonary');

/** MySQL database password */
define('DB_PASSWORD', 'yranobew23');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '192.168.33.10');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i>ff,,4BwP9Drf.u<(!. 2$l,-3+FatMT}XTe5;Ymq`hOQYixX,1.VJhlIu7ah2A');
define('SECURE_AUTH_KEY',  ':9dtUc}N2Fn`,yL;1Js6=HOV/4;FRJL(K~rH[IRH3w-@E|)cQ6^[O|awgt!/+,1E');
define('LOGGED_IN_KEY',    'SYCs{`uK[<#noxeEl}F40xA?iQ#;-,OhF9Ys8dRuPXW+8^yLqc3kL%-gvkCQ9|jm');
define('NONCE_KEY',        '[--c?a)|%W}ne{:Y[W/4s(SXnJaTmL:Im+7]c5ZHl`XHl~d>F;C<>h2/ukJ`I @w');
define('AUTH_SALT',        '_C{g)6ZGSPNNq*p*tx@3*jH<M{Vae4Z;t}MXq|[M!!z]1.Z*Qfp%WGbVtXHI$}Pg');
define('SECURE_AUTH_SALT', 'Pr6`8-O~_o[NG4}^k1d7W:y+KKdD[kHx )+LC#en ;i+;X}e@-WwBahSE[DeFylR');
define('LOGGED_IN_SALT',   'T/~WKNzGSb!:wgS4QO*%{?73wHcW][(h2<c)@D({u;:+C%1BtT+aF-ET5F2g-Gx3');
define('NONCE_SALT',       'eX63_Gw%nrv;3+TiFCBL@wLaW#2T8pE|I3+`Q.dph*$wD}y$#qjIuIIK$_y},+q=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

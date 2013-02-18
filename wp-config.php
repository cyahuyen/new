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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'trghh');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_&4mdh`az+eYjQd$!X+=+mIU)#pIS$wAI%I:K-che>$sglRqp`mfb5b:7wsGxPfv');
define('SECURE_AUTH_KEY',  '3Q*8(ydc2_UO[Ta)/|KuOy3T/At$1(If{xS?{<@M(skt(&JcF3F?CzC:7iC`X(6h');
define('LOGGED_IN_KEY',    'D~A+wzreDqq)Q!gkMp1![#3Opa(}ltmgw,7N7_Pms{Gx.*Y.S=fjs;+_sa8(]cij');
define('NONCE_KEY',        'Wxjfn]Hn4BDD^`mAsYe3>e6o67-1+l]&L97Zl|$+CF37+!{,&1OP;`stK#%BxZqC');
define('AUTH_SALT',        'OCvC2#DU><&uSY-%AjTBNyT8q4<99:?PgFf&#8-Xaam4PbX:cjdO:>CLPL%GF>Wh');
define('SECURE_AUTH_SALT', '4M&cttSn&SGKmyKe0B$-6a)+7&56jzgXroo;]C.wCm8::F&Cw!E)q?3,7QDUwx3-');
define('LOGGED_IN_SALT',   'H] dx)KTi;(lX$m<_~lMpR()%[RFzS?@EHK=`&b@%pQQND)Do;zW<A4S0Ig%bza`');
define('NONCE_SALT',       '&.57&cA=f@>KU_ PP- [9()# ~+gU?S;Gz&A3~J|Wy&19kSH8/sd4<sR7!##MQq`');

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

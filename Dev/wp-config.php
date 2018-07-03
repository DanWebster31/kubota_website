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
define('DB_NAME', 'kubotacraig_wp');

/** MySQL database username */
define('DB_USER', 'kandcadmin');

/** MySQL database password */
define('DB_PASSWORD', 'KuB0tahCra!g');

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
define('AUTH_KEY',         'VJta([=8|Df;v|H=a.L|[>mm2QO%_:g5=PJSKg{Tc}/pbbVDN+}lTk8F~wvu|raZ');
define('SECURE_AUTH_KEY',  'Q|d_8cg<#Z)&j3Aviki=Gdf&&LCmrX(Ql*-F(wM*UrVOy+{]UwSJ{dK|-PlnozU]');
define('LOGGED_IN_KEY',    '-lRD2FNM=ry9A}^^aFD!H1.KveEi3Js9>:[:T:[Jskw+|69.a+PJ$WU3n7#OmTzh');
define('NONCE_KEY',        'AZjeAQY-E,` `|rG^+XdxRV ttF<yWq27Ug{^l]w|8ei!-B`|*f]gIQQ0BB}uLjn');
define('AUTH_SALT',        '+r7M@jY-(lXG+_;KxGtX-i`N+al6]:^WXbUq-Vme (PtUq~ !2n=0ULJz%M&:{W~');
define('SECURE_AUTH_SALT', 'U7&Av`xSV{L)U`!Lm-};yhPd60BO+p,gF5|*>~+K%~,%D?+;8>{+#6Tbgs(jW:Hf');
define('LOGGED_IN_SALT',   '7kI.#hllgT2o?+~L7ipWwe(4E,JExf`G{XBtHoAG7>1i*#+Ky4V#@&X]Nfb/$+An');
define('NONCE_SALT',       'Q}W@P^p=nv63Ka+kA;P@? X;vdYkKXB&aDWb@W7n}k,K^&+[t;cIR(qZo-3I<`49');

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

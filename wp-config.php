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
define('DB_NAME', 'DevTool1');

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
define('AUTH_KEY',         'Cq:<2>]X1fLK{5PRuLmBt`x}VH4{![Yc3wL=@trsexP+bD47BEl}TQln8Ws%9;HI');
define('SECURE_AUTH_KEY',  '0G&jEg8f$jFJ+RUh?uNA[sm%V*$pF<1hE^}!8v@:}HQ<Ax$*7>UO`fY1PZwesy/[');
define('LOGGED_IN_KEY',    'X;5u{Zj]]E$Hzx<dGv@~6rUdy,L>xk4Lh6fs+LJ sfeUP*oVLqqMy.otg P!40M.');
define('NONCE_KEY',        ':,X(5AlE=#L*7zBO<,]wnSR01}uHyp2kE7 gR(]7m<+-v8z?U:Yjaq2|RZ3A}}4t');
define('AUTH_SALT',        'HY-3bZMhJsX|AHp6|1S%kM;<Zr(c/G}MCI6yd+[{I:~Y-jqY@0l;r6P^|+ Ke%]4');
define('SECURE_AUTH_SALT', '1uBU[-+h_.`wur^D9@JtY,Z~C1p3Z~^rr9n8_j0v8Da@T/(s;0sQSK+pv k^xcd|');
define('LOGGED_IN_SALT',   '`4 }ObME(CsQ5_[FN:&VTZf.I,KN4h ?c7`*Y7PnXIk.=Ge{/Fl6MuE[>:mcE.,{');
define('NONCE_SALT',       'aTgb(Ue`0>24pS?N(?jfgG>om^#=p(XiGFl[Hg^0GVAmV.wUmlBBiBvO{9Y,uf:P');

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

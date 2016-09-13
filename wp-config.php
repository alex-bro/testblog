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
define('DB_NAME', 'testblog');

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
define('AUTH_KEY',         'hO^1qhoi92sBL0(Q6}p27jE.o9^t4%*P=j6IvD]9]p_Xr1[YYN|K94xV0M f5rI5');
define('SECURE_AUTH_KEY',  '=sM@}k.lx/Tq{Ig`7/RZR`a6#6fTuI7hy5UQhu|?e=$0`W<}Dt|GIT5rQaZALAv`');
define('LOGGED_IN_KEY',    'HaJ:=o{w+V|OTXq@541tn>uai4R,e4~uAPH(w)|yoRjYH$[X1KB+G;}8*GviX!d@');
define('NONCE_KEY',        '0^ut[x&=.AaN7Ey_Ou}0fVxt*gLd}-;@YCsF<_18,Jtzb,OxZ=y],|_35zx_g?m]');
define('AUTH_SALT',        'SLlT$~xb)_ED,TYQ^A6+DC5ImK2Q`=^THu)!DoDTBJ#5@rV}=^o9)A5rMw=L|m*N');
define('SECURE_AUTH_SALT', '&f3@!L/6b/M m3?]{KyvTJ{]wA~(#jKQ}hQZO;!ZX>[gyo;ZL+,x(nV@pRA=yd&L');
define('LOGGED_IN_SALT',   '%Z5.D5+Zy;p-VnUFr9CF_6#9FajxyND__lT!*#b+@.KRiJMEt_Z^%8.;C^x)YSl,');
define('NONCE_SALT',       'ySslE=Pf^@]bF$|P10URkF;*R:U*[V^vWi+IEb=,snr=x9WqLvKJLKL9m+^kpYk_');

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

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
define('DB_NAME', 'php');

/** MySQL database username */
define('DB_USER', 'admin54B8wUT');

/** MySQL database password */
define('DB_PASSWORD', '1872dkVz6fHH');

/** MySQL hostname */
define('DB_HOST', '127.3.170.130');

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
define('AUTH_KEY',         'Kc=|J?pG>N+K{A0*H7y9h17,PB{[cVwT:+r+x _ea@q3&zwTIpo Z~cj$JyO@ri!');
define('SECURE_AUTH_KEY',  'YJw(Y!I*P4mYSb|@CK+PI+U5?+2K@a:917DdmH6B;s4t+Z-+SQ/9>:0UOevPl(3!');
define('LOGGED_IN_KEY',    'hp2^<Rn#SZA8gxBaj!63:ZHTw_8^RUK%x3=yFO:w*hMP(v}ra|0?Gq+}#aL!$wAN');
define('NONCE_KEY',        'a|X9m.H<K!S6L|^YH$EpmGBO7l$sYi7|p45la(.+v9F,-?tH_^#Vj:FM,MndNtZ3');
define('AUTH_SALT',        'KyKNKMlHqwd&p8upJ$X%RCnIuIPbS/Gc.GO%$UYY YC;Z-tq9x6qo|({R-ldWz`l');
define('SECURE_AUTH_SALT', '!Hrtj<EhK#!JN+w-ajM y+[c<KSD0X]pLCfod`gV:Qh)>-3QRL<U}KW|0k+f18;(');
define('LOGGED_IN_SALT',   'ak&[keNxm0N$!*z0~5rqD^h^RPN3rhNLj*6_E5f1o*CB>Z0P3Cq/d=%H$DE!4~1V');
define('NONCE_SALT',       'pWW^+[w;YDhsNMBTb]}h`+;k%*gLJxUJGDiJB&HJVOFGc}|E,SD2%@o6ZtW3Vn*T');

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

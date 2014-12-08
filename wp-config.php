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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'r2gG3*s~R?,(*f@HJY-H@L$Zq-{l~&a?3/|{>V`(N?L%+k:M)IZ]R-#9tjz.9v=3');
define('SECURE_AUTH_KEY',  'c&ZI$&9N-xv^U.BAgWU.dkWwm`@-Jjj{<8vOoXJC-^cmu.]Q):qZR-}?-yo@?]pu');
define('LOGGED_IN_KEY',    'o3p/-?J1MoN;}aL+]fg|d}%L#oPPN@TYPswPKWQ&X2 H;d!#|11CO:PI]m|8TqpW');
define('NONCE_KEY',        'n)#A&<`< FYYRZ+d[1E$NV}{+}KcQQDgNVgS*ZI+g3FWNA|xh-x~7`y^~C+_mG?C');
define('AUTH_SALT',        '5P+EmN-8HS#B)sx;$r`E8F(R@y-m+n:r$r-{@|wxjaGR}YIIK187H,ur-b(cLz%F');
define('SECURE_AUTH_SALT', 'qZZd3<]02*6qrpX6xi^VZ:UT ]+!,DiF{76#_a91}kIBy3wS|`d{5HMnjokYG4]3');
define('LOGGED_IN_SALT',   'h<8}U|kpr-W.g2WQ4Khl$.<N>7~>sJj/AM_2hXLKGq2wVPs#]FlYPb-zkTv?)s8]');
define('NONCE_SALT',       'X+:y3-; o}cg+%OzW<Aum5%*QSrt=ga%K.+q[m5$h?}uQ J~$K5aUA]|o|bfx0OL');

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

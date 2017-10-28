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
define('DB_NAME', 'wordpress_test_db');

/** MySQL database username */
define('DB_USER', 'mysqladmin@test-sqlsatporto17-mysqlserver');

/** MySQL database password */
define('DB_PASSWORD', 'my#sql!Admin2017');

/** MySQL hostname */
define('DB_HOST', 'test-sqlsatporto17-mysqlserver.mysql.database.azure.com');

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
define('AUTH_KEY',         'E8>8DKsFXXnzdP06X~KQ_SUrv$WxvF_d-x/qA*<}+~O@(>L<%kq1!_w YNzz>N5l');
define('SECURE_AUTH_KEY',  '3OC*leCPi,RDWm?y2xU|bEfu5fbIFcauIO1~pNi&OQF5X|W%01$iB:gQKY*E0SJ)');
define('LOGGED_IN_KEY',    '|:},akbxa+p5vFh~-}B~5xcni+Z!sf`{mm!PSQ1I/_^h20A#Wm4lY=c0p7huHC.?');
define('NONCE_KEY',        '@kPAcidHd4JNup@[E[h&rsVM#.vqin@y8bO.U#ZV_yZCauN^2E2Ql[.%s*FHy)~l');
define('AUTH_SALT',        'n6@n4l6?/dv B~Y|q S$`_I2L{}L{o5:(,zBbrru7ag,{^E`08E?{LRFlU-I$ <H');
define('SECURE_AUTH_SALT', 'a0M*E_~*.k8H~jh^?UmFRV_aEE#WD mb m1EECq+N3V_>gT,CraLROx4fU|*@`=V');
define('LOGGED_IN_SALT',   'wprr0#I9OYR%ls0?E/nll{dv%88w/j$Y.lsCB*hx9!vd:t%C%?vS=!~F(d6=h56n');
define('NONCE_SALT',       '{YyxwaX{c<Vz(g<evm5c6)k;u59^>`R<^<V{cFsxUj9vTX?BI i82kq@Y#6f.F|F');

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

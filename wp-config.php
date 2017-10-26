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
define('DB_NAME', 'test_sqlsatporto17_db');

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
define('AUTH_KEY',         'BljMZZ9rbbrD[}7=aXmLvF9NnA5k%ow]h6 R#m5>%>3>ID[KW]^qsi7mH:zvdm@#');
define('SECURE_AUTH_KEY',  'Kb$(),MyWr,-]t=(>eU_ls$8+X+!3?c/T@UDQ|9=na=uz)*@1wEx1xJ9^8@3=4Yz');
define('LOGGED_IN_KEY',    'v:7:Q4j4fZ(#IiVMtm@ESqVK-km#-;XsZ2~Z1lfwu[E1z.PN/Ai5l!|_%X5~)?.y');
define('NONCE_KEY',        '6h`a%mYYyaY/xt {kg$aaX,|aFRoK!.x^kkQ<EY:Fm<zcXeJvEzy/@:r>8iPW2QD');
define('AUTH_SALT',        'wPvpS2PRgM_tZXoZ_=Bhmj!shm{83Y<9Khs4+.5ovepv/ @p%I0.O>d[H8M{VWHM');
define('SECURE_AUTH_SALT', '-,Ot.tB3GzPDA+cFHzX_hX|M:^h/M<RzKn;,:o-HtmmlmcSz>B4uos>)EVg0]%iP');
define('LOGGED_IN_SALT',   'rTN$K;A:f4]rWB*/LMEp@WgC$MaG13^K>$$a+Oa^{+wcIAKgm% Z7_^{I(T[:{Xn');
define('NONCE_SALT',       ',sr]s?<E*hyt59F|zwV%6A.Ic/&2(h]6UOK1`z{Zs[KJn-4/1SNL*7)TfP^Z3|_g');

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

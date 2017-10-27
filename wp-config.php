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
define('DB_USER', 'mysqladmin@test-sqlfridayporto17-mysqlserver');

/** MySQL database password */
define('DB_PASSWORD', 'my#sql!Admin2017');

/** MySQL hostname */
define('DB_HOST', 'test-sqlfridayporto17-mysqlserver.mysql.database.azure.com');

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
define('AUTH_KEY',         '8vMi)|4[D)QlewB~gbS,.5eAA7Km]/1:2+K@crE:ZvipWq=3t~8m>RxMl&12Jv5y');
define('SECURE_AUTH_KEY',  'E,g8ZNnb1DWT!J+jw&MQ%Spi;B0PU[Z[^t|A:5%1Ezh)R(a;{M6BVq)fK*b9Y$o*');
define('LOGGED_IN_KEY',    'NUz@k>(0q>5: z|oyc@lXT`:OQUw;UD0=oqsBdHwmklD.),A-sn1pcy7;tH)K 5+');
define('NONCE_KEY',        ']c;iy~/FH^ge]_+wR6*|<9vE#tL5Wn[jS#yrcsdjV.YEbFaYM#MlR[Fu[ozzb~mk');
define('AUTH_SALT',        '!PJKy9E*Ww}ZsxkBvdt3E8ki1jb<:KLe4}=uDO|EdthC)/Y5/sqz7!^dFrH]a?_r');
define('SECURE_AUTH_SALT', '5dd!/ZoZOe[,O?{>S`}]H:Y%Fi<pPEo-L&o5b_7%r[-k}8AF!bCP}1[/mqcF6NtY');
define('LOGGED_IN_SALT',   '0jZb+x_]5@2.{B|Vsp[s&qFFU[[ 8D4KkQT_s{,5=DSpW_9f}h+^:qF[cng 2Bdn');
define('NONCE_SALT',       '5KH$Z!W{7;YhW@DN-C|u=lDBi`sTmH 6#%|%.S^T}3x[.,zh-/?up`yN8htK&MYE');

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

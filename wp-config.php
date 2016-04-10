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
define('DB_NAME', 'kynghedamai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A_%p,z%Gmv!{Co%+`z6K^e472]]#Tc1/vP$+yms-Y<oAqh87b^9GlLigPA>?w;u(');
define('SECURE_AUTH_KEY',  'p8<#w>aZJGhK$ueNu#8z|!]u1-)&xK-&2gG$9bG956n(,hVV},ZSS,+-3nzk:9>%');
define('LOGGED_IN_KEY',    'mkqV2qM|jABS??f;p|`RI~hI~&z&-`=u6Wo9A%4I9Z:?BZ2E942N*`EN^&tpI!|b');
define('NONCE_KEY',        'bluVm@ i+)EMOUNG6(G=QLai|/:4]6a>Wqp_wE-f2[dJ_czqw~:3Ssv)u+Z-f6d&');
define('AUTH_SALT',        '-:u_4hM-DYR(Q&P>FLoi*M7vs]Yli`,kX%W3|SL|ZG.n0l b+@v,,%8< He{,yBa');
define('SECURE_AUTH_SALT', '|q+qB 0}+&;~*?B]A#axr_|6I`L~@)){|#IPNh_-;{KkC@oNBPYG 0Z#-)<2LlaH');
define('LOGGED_IN_SALT',   'pwPXIp0FlU 6ld,%?3&=kV)k%p0v^0#bYKLO Zt$|IA+2_S:k|43D+aR8|Zm.vA`');
define('NONCE_SALT',       'fV]B?:wk#8F@?+$CYCvT9=eN+-}rjStYF/FQ7LAFZLiRQf,Nc$A5AU<?**>F7#C(');

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

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
define('DB_NAME', 'app_index');

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
define('AUTH_KEY',         'kh)siu|TRRF 34qD5<|j-TIVtPY$f/XNVnc6qmiQR< 0O+xYb!~2QrH_(8U<bmor');
define('SECURE_AUTH_KEY',  '=uL=}>g:f2RNH+eHprTBGSaKzr<&VUEx-40ge3Vy*Xo{ze+IL XJ+#>SUQ/JBRD3');
define('LOGGED_IN_KEY',    'VVKR-;HyC}|qW.y+X(W4==S3lR_+|J$5{q9X+Cu$!i|=1xF^eBHrh?;94N1-,04F');
define('NONCE_KEY',        'v>t_1!Mpc$`(M8Z~sF;Yg|JCH1w11xi2Fow0,f}x0HHJA_P@Jl3`sEjx*R++?~g-');
define('AUTH_SALT',        'qkP7#i9wq}0a[lkc!`WXjpZN|PNb(|0;)Ci6+AOqSsA@n#!=F+<1!-H`safNj7hs');
define('SECURE_AUTH_SALT', '+Ao.W+ P488x3-P2-;g+$-wl08J9;c|<V%e;]F`.M$iV:;si|d=-+5dG5^}]5^]:');
define('LOGGED_IN_SALT',   'Lr4/GWJ=+d!#x5lh_,*c{nk(;|;O94SB(p+9^IGCGd MEAjbs1n6BH=.:5Ie|O{l');
define('NONCE_SALT',       'Z<9z),ZtmwuN5*Sljx=h.Fi++6M_Kqt&->?+hD>(3}gT^P>_n<ZzA%K,=W=r=c< ');

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

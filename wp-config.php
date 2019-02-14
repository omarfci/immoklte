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
define('DB_NAME', 'immoklte');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<zj&B[WT5]5U!rXjXu@<fE6--tVT[je7^o=cE*t4L~Y)&.$oya-7,|gwk@H?b{vx');
define('SECURE_AUTH_KEY',  'q)Eb8F](191CKolUr;_O>~{lIudW03./hTNcz=0u*(ONHGn+pnn=7|t5(dt<x||F');
define('LOGGED_IN_KEY',    'uM@SC@bz`{z|ydoNMD%++dU/8wUH*luQ[-Zlcf%QV1,BaQPM%<8Z>Vf@S>aVbXAk');
define('NONCE_KEY',        'q2$mD1Y##zaZ&EW.[e=!c$mXQ7HnW-y0x4<~K+k8j} O56)>:P0 (_:v!z*|>;ol');
define('AUTH_SALT',        'V{Y]&ht?$]0v:VJh~hiZ+TFEVCh7Ivo85v5U-$-e-?e:]&8poghG9R2Zh,R6]wmo');
define('SECURE_AUTH_SALT', 'I$G0_0F|rxdnVOGIKA/{;Y!8[v$@:+vLa=6n|x1}#c@zz2+D0~_/-nUd=W09zBy#');
define('LOGGED_IN_SALT',   'GD)9=@octkihaV+D `I]!YMk.tJCKDe`{v5qs~u-DT+ Xok%{Ens<+-i2KZ4B++M');
define('NONCE_SALT',       'Zwhp$b_d@X}]<2+|qxJ|Xo4WJKXeGK_*}gf`u~=hy21rH&[7rh.ESEa++aA!1Y|f');

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
define('WP_DEBUG', true);
set_time_limit(600);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

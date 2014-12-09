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
define('DB_NAME', 'gimnasio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '11070020');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'voPGa$/>oLv`K3=eLo`)D|-8nOwvMBkbH*2kpH>ExU,No?!zJB4S0;f%TMAO%&Tq');
define('SECURE_AUTH_KEY',  '?Bmh$)fVK2f,`FSY ,ZL:!UmcHj0j[;wW9](%IWW8#ZoCIVDE)Z0(GB/J?w HvH;');
define('LOGGED_IN_KEY',    'ir{;H^]l]UUZ}`Rb!/Urfd-(Q}ST]tp>=;b8_8r_W9jSTMJo5i~kekVn@xpFti0i');
define('NONCE_KEY',        '3RS{|MaFV]Kkdt@f>3]~eJF~+WGa.SRyS_a4F1ku?1{_ iKX69_I7[0.b@``VX/5');
define('AUTH_SALT',        'ruu+Hso6r!yHY1^*t>!4f+r!=+iyWlObw.j8ru88BFZ,E!vOJGDdr7.@LeA(^wjS');
define('SECURE_AUTH_SALT', 'SXge=/Eoe,ns*$2T1A!aRMR_`4W[jOSJnG{/h RY~~yyx^|j,OKmclTY/M+e>Ipc');
define('LOGGED_IN_SALT',   '#*UObEI~cjb$LIM7<7(fn{n(E3p<gXF)ceXOxn)Ehtx;xB$0#E>qnD(E?usses6I');
define('NONCE_SALT',       'T_+v]Ox}8Kng:LXUR9{d?t_N;Y,b9/VA5leVL4o[NLtZkkVB{4_l ]va*T_W5aOm');

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

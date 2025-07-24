<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cpb_blog');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('ROOT_PATH', 'http://localhost/cpb_host/');

/**#@+
 * Authentication unique keys and salts..
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kI7(GvH[l[Fy4zRD_VsY$s4bj]q:ZxiA.~[N|Cb8zyZN+/MY4k:k2lG+o&;Fo|h.');
define('SECURE_AUTH_KEY',  'k]CL-X|q_,:$sic|0YK>3lvP{j(:l!a]{G2U?&00)>B(ia)JuYs1{22&}cPG<CNK');
define('LOGGED_IN_KEY',    '=Ps~$dAH2UQEl?52BpO |5Y=yGDbjhL26*KLQYjOC2X.)c`3yqlRAb=6H+5f]!W)');
define('NONCE_KEY',        '1)B-g^U<iwNj9B<uv&yhZa^>Is({fJ2m-j6P j/H[:4$90S?{FWpwvid,5j?!HM(');
define('AUTH_SALT',        'ZtJXLVZe@/(%)2X<bZi}Zp>!5QT%yLU?+-m^G{haE+=WSe[5h:d_DIg)E)}J urE');
define('SECURE_AUTH_SALT', '<TR3z}q?<_1M6[rDa/#U+08Gm?K:RAJ.wx87%.7vD&U<UX[TLS8c@(2<m_HM^`=b');
define('LOGGED_IN_SALT',   'T>Mt_R4Z?h15t4H4Vd[-m`{[1no#:|GhQvOsCqKDsa@}XD{:} MK`QrHT![c<17W');
define('NONCE_SALT',       '5,JNacb./imVAv {MUVLaiv#0d%um*)$1~.$_qnDwQ_mva^q1^c<7TD,8`lr&a{$');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

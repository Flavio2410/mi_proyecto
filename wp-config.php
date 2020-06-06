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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'muebleria' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OW1YRxw&|Y_Kt_TC0^OUczIlh2o{By2j&)CfksB}c1SFIw+!~eUm(z9[U*$e^@uQ' );
define( 'SECURE_AUTH_KEY',  'GE:*&p`?@;X9viFvthsO}^5]?WOw/ok~+#=oJ6ykqhtb*4K!+mkjE>~9O?4KB7%P' );
define( 'LOGGED_IN_KEY',    '%W7$P[}4n,21n<O;fH{qWs5!8s8jX?[=JUZWT(Up[]])MCs)Q E=?3QB,_&@FLhP' );
define( 'NONCE_KEY',        'u_16DL}lUGRe~L!;(+wcjf`|!TPE@%HxFs}?P@v_73ia.8eAQx)KK*+{i;`},SSz' );
define( 'AUTH_SALT',        'jfJ$D;P/wu2rnmM7}m4LDT|o4UAN8BoeLZQ17 nT:>OjP*IayJ`5Ee/*Yzu;9A{K' );
define( 'SECURE_AUTH_SALT', '-%#]QMwF;>/s|A?4VXt5$7j?(I^UijfmT6o&}aT=JYm}?0{EE<67f1bS0F6$S0S(' );
define( 'LOGGED_IN_SALT',   '3$+h+R+/%m*=]?s+1l_{U&Z*q:Yu>ao0|opknv6gzfYwVMjA!S<7[l*b!k6x2H{u' );
define( 'NONCE_SALT',       'Qgb>W@!<>XA` |0.G6!46~+,*fp5btkW!yO[IW_Xep$2wOa^<cdGM{FIaL0*tI_K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

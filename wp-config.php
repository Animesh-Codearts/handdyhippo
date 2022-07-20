<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'handyhippo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L+|7G>BK-j)5vA m> KnQYK19SLa%QLx[HsCTc>NO$fOjibV*+3AxlT9%7UU:R{0' );
define( 'SECURE_AUTH_KEY',  '.vT^x+)6Qz`H[N<};B)zFPR#/X?,,NvN0vNcm5PdW_GJJ32RlMGJ#D1mOHOA3}D;' );
define( 'LOGGED_IN_KEY',    '433gO{Sdt>`|{sTk4ywnz9dV Ec=h7o7CjsY/g?#<<=IYYLgmRhRK(WuXSe;8/kV' );
define( 'NONCE_KEY',        'FScYmeOM&jI{)rKWFk&0`f@&;L-gtwn[PGR9rAu(DlWi:;@8W-BJ:`!/%i/~b>YN' );
define( 'AUTH_SALT',        '?WPcZ1:OMiwcy~J$U4G`3:t9#&lLP>QagK[sYHO>vn+[.cg{27`}CMDJIFlH%6~8' );
define( 'SECURE_AUTH_SALT', 'O[?vH2!h<bL!-ITkr}S,laimZd>b,Rq#F8wfNo<#Ew!Z.FOz;DezTxiK2EvL%I]t' );
define( 'LOGGED_IN_SALT',   'm EI=~F-*j>$6ekD;K5}tA#D&i_mSD1f~AIh.L/yIo*72VV&Q<ZJ}.@8U8)To[^-' );
define( 'NONCE_SALT',       'wuBG@^>s+)d:M_$8]II,=]&pzyJu?>mT^-~2OPAoGjdnGwqezg)nBJ|!ur{C>k;E' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

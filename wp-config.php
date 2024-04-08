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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'nmd1406' );

/** Database password */
define( 'DB_PASSWORD', '14062003' );

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
define( 'AUTH_KEY',         'g.dtwpWsZ+Oq4 K=+y&uvLf8@-5)?f~{(N_#)0N^9k/Kia.l`@KSAZ_K)yy%FL6#' );
define( 'SECURE_AUTH_KEY',  'hq8AZLK~Oj/!`?^hVsP>n1Cgajq`lsTH^iO#WrJi?QQo3KXi2vl,}LP[2.V{v!zd' );
define( 'LOGGED_IN_KEY',    'GViWr.<SV&i o4Uax4P#|&QsUzQrSQ#/f88lO?K.4ZF#GdU78nj->c,;Btw6wk)%' );
define( 'NONCE_KEY',        'I&*h$p!ChPyLE14o<-*)4P;yl7Vogt-IK >FZ5~9{G_gvq4`M<:%s2YD6z&#J5>g' );
define( 'AUTH_SALT',        'G71wuaUY:`ghNcCiE0(K%9Bz7fz:lUvUj:<GEE[Qx<&J:#_(p3s;y+7.BawVNQO@' );
define( 'SECURE_AUTH_SALT', 'H]H{wjsbo@7[y/tfL590{aZQj?o7z{;y+Yp{hZ!~~J~drfh#>P:X!BIau7`SOV9q' );
define( 'LOGGED_IN_SALT',   'Q&]Y>LP|)+DRBA64Zy%Pd`m==;{}_E$-9nlNkv||xCc!7W3`:<8El,bor)fu=;Fz' );
define( 'NONCE_SALT',       'M+iG&2NcIa6i%DdO=ZVQb:zWRzp6DGZ?p==O40hfTfXaVB1t0inO#,y;W7.hC+j9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

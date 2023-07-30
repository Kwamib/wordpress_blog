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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.cig97ucpt0rz.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'D*gFz)2(VE!VkJ&Z~?GEh0dZ%+W:Ks]L(uSG|uysJ27_bQ M+H.7lPn6R*W^+^;x');
define('SECURE_AUTH_KEY',  'Nm;-D2(.9^@]vT|t|J:k!ouXj_>(7$GlIU[u6?]iC!|C3eodh*?L+u5f7)*!eG>R');
define('LOGGED_IN_KEY',    '^F(q+0.adq|+ dfiJ(RgVwO4GYcL WD./|;6dbHW*=x@XAd]2gnw=E.+h:W`iF0j');
define('NONCE_KEY',        'TI.qpLO}{vh(|Nr3_+:Uxno0ac?]- 5-rGvosLx_`>|-&oe8+7_]Xo2NV6|H3Ddv');
define('AUTH_SALT',        '>f[P^}w{B}^Uv|4MS-J)t~V!]jma?Gvbgz2:^cK+B62Y<%H]]nq^GE1LY.LqLo/Q');
define('SECURE_AUTH_SALT', '86.yK3FN6InOc}<`qfyZ#,+L#lsipn^{UIduXqpOQ-F`rz=%3Z[*~YA~]+Ba4m[&');
define('LOGGED_IN_SALT',   '{/kK|c[h~Lk=$+]2^K[,FStgs7>y&O EP-guz<=TOar[(-. 5 V-Qs!uQh-eT~`|');
define('NONCE_SALT',       '^JEJ`a{D+e5n2kMNvE M(?FIw(dg{B:_pU6`=4+wG_]b@0i=[1FMT>y$#yK9-=)X');


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

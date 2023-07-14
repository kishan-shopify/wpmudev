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
define( 'DB_NAME', 'wpmudev' );

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
define( 'AUTH_KEY',         'Q1x W$.w?cg1nqlu)TZrAO;7D,cTriP#`=:Q0Ro=f%2xn /eZbaKu{FPJ2^n4]QT' );
define( 'SECURE_AUTH_KEY',  'm,?4P{OL#aX&nkD,9FrilP-Wf6RCT>z_.mSB0)-pMa$%W>?_0+1t9ehS`+k>Ga_x' );
define( 'LOGGED_IN_KEY',    '=ARC~L:m6|-4G0$kLKMv`fCb4AlTftGW?B{/Sjhk2<f)iQ8m5fi+D-~9i;w+_> h' );
define( 'NONCE_KEY',        'a<6@19twFq`8];i-{*bji.O[<b+cU!^,yqR<aSe3Xs5zFw`9Wsg+f_<$NLMGG$VU' );
define( 'AUTH_SALT',        'lt6$4r#l1)aXU^.8))2~4^-3YQzy<%;wR(l{PgAY&iY><G:mH[}u6:yj9FeGd#LH' );
define( 'SECURE_AUTH_SALT', '/)EaRa3-k|Vs0xF~^{FVWE25ob{rD0~F$gRA$}w:@G05z^z9V%*=PsvNF(lcUuna' );
define( 'LOGGED_IN_SALT',   'Oui{dmcakLK_LZD)=O9$udF$GPxf&pa6jVnT@%VR>d *T$p&#gJWXU8r5UKVrjQ8' );
define( 'NONCE_SALT',       'Ke+oeAb%=m@tN=-9{^B.}At[dyb@c?3LVz5+<Q,2V68&@0URjHx_/,K|Cq#bgRxT' );

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

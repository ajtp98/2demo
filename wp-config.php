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
define( 'DB_NAME', '2demo' );

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
define( 'AUTH_KEY',         'vC1?S;,~]|HQy}<Q7wZ/R?q$tZn-H7h*;um>>o)Pos{P#NFA>MF?#n5~Z~bnqAuc' );
define( 'SECURE_AUTH_KEY',  '`Y=/kgDIP[0zCyRQdI=]Fx[N`.XJ7MeCK_Llc~4I`ZEgsRkto| 6,h>x6)A0A~ x' );
define( 'LOGGED_IN_KEY',    '-fZ<*O}mEm!yJtS8ZC:gWmou*%DI9,81,E?&a|{`e&m-^zzyj}HXg(@V{N[s&.$t' );
define( 'NONCE_KEY',        'S368=:#34LIByH:gBXOc{}Q{J-z7H<bSzY7{iSJh$r@*wdo a$;H8(_Ulp>wDu?r' );
define( 'AUTH_SALT',        'XQ]_,V+VoHf7+J~Mf0?_=jA*lWIxZV(C>0>.3 k1%. v0RX;2VIo:Na/=(B$2j.f' );
define( 'SECURE_AUTH_SALT', '%A_U8H.}9P2W$e 7!%1nGODhd1{3T0 J)X0{w_S0OGcjTLKaJ`C#i(%,1c!oK)aX' );
define( 'LOGGED_IN_SALT',   'j+8$?Qso,X$eaENcz``Prg[~8-Edy]w:axlawjpE@Gg FbVqINm%@sg%+]W!Tu<!' );
define( 'NONCE_SALT',       '>7mw)5]kqXH2R-0UE:vE0sk;S{JTH[E<f=` ~Yd#?SGUbU_ea9PL|4]`.7F3^B&a' );

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

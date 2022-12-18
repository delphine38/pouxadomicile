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
define( 'DB_NAME', 'pouxadomicile' );

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
define( 'AUTH_KEY',         't8*Kzz#4~PI|:VM7O/OmA|K8{c{{ZGcrx7$!3m$Y4BC4A?PqytK:_u|c7iuraD:+' );
define( 'SECURE_AUTH_KEY',  'nC*[<lrPWujRhEAg5(N7afmmN)/]? 8037~[0S]`o|71CD)tTfz]=hU@qwY5]_ T' );
define( 'LOGGED_IN_KEY',    'wQaF]4}09v%2gQ*vB<6? Q`9zPlK=(PNEN/:eI+?~6fxk+H*p.Sf5=3e1{,_).4u' );
define( 'NONCE_KEY',        'ooZ^kp%]tWRF jM2I!uU)Ltn7~&>}s`W&!.-&eG*n4KVs.il+rGY1^*6rb<3-#; ' );
define( 'AUTH_SALT',        '}rP7K[m?{wuosp?lke9[2qr%@sXK@A)HwUwcb,b0*UvL4O2Ug94^2G7Vk.;kl]{{' );
define( 'SECURE_AUTH_SALT', '{NDBoJ8S1EoH_;&4?sz=DZax#oK!Vn.VkhNtYfJhmJ<F6P^Z?,&7^mXxTClkG0Sq' );
define( 'LOGGED_IN_SALT',   'ca! BLCYX[+<Y}N<x&E}5TL`Ir~xGdr=j75&`uhjIsHx:ZfCc~oS*{X{PrX/V[*6' );
define( 'NONCE_SALT',       'oqN}<Sup$7(oDCAty>2,)svpiYY+h]~gjLeE0KvTo1^Y+9cSD6N &Z:qZ38;LWJ<' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

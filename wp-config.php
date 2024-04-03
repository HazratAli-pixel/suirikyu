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
define( 'DB_NAME', 'suirikyu' );

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
define( 'AUTH_KEY',         'm4?+7*t*/R4xU}qDDRaO/x>z&3c80t>a=.[5GjI#o0M5sJ96/-]Tq?>VQQ>svC(|' );
define( 'SECURE_AUTH_KEY',  'J>tmL?IAC}g~|ocN{ektsoM@ZJ2RE@QZI:BW8#D6 YU){okFMfIaljsJM9fb`k>t' );
define( 'LOGGED_IN_KEY',    '7Q&4#nEYt|9*ZdbvMxxcduNjU<!IA;sXc@F.~Hb[zfLf+OS<GF<8/V-avCC-R`<S' );
define( 'NONCE_KEY',        'J{b]zoY)^52wIf;,96T5G~[3)lTg%E7R3diggG(vg~x`k0%d;lx!kj7&I6%[x^=&' );
define( 'AUTH_SALT',        't]B4LcA.383rG]<KV4>qg$Zcg:WR~bozCg3$t_{QK9d1?9Q17uOr x0IPqqxq-/>' );
define( 'SECURE_AUTH_SALT', 'TKlF[gLQ$dc*p|M DY]{gPz3,cvYp(o$p,^wm)D)G-7reFo^-SzNyidNHu[mbeLu' );
define( 'LOGGED_IN_SALT',   '-<&J{8Y+&&]YtC p{=JCR,o%FR?|ClnWHCv+#Ydx`sRg/*>ZHX057d7Zp1>LF]8)' );
define( 'NONCE_SALT',       'B=$=Lz%o}v$n5@B`3MQC^c@(O@apfbCM=5m.3VmdHR}xh-WAB~9vQ[?!=cpxv@%+' );

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

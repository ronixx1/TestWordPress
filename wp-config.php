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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '~%}N!k&KKM+vO?!z.F3xL96ux`,dGC3Y[ D7.b-eAd< ].+mzg4BR-Rp&8?~hYsb' );
define( 'SECURE_AUTH_KEY',  '8DY.(G<o*+JFElBEK06i7uc]-CA%1LI.Mxl6HG1T8jC/q$)1U)Iv;KVSP9W*faJv' );
define( 'LOGGED_IN_KEY',    'i;`0*#kN 1SbDQ( p~$5&Iv|!>A_2`Bman&DrLSuTtb-*SZ<qjbt?p}CDnJ!|r]q' );
define( 'NONCE_KEY',        '_/;ME1!d7)TDCy=wII%HsH6r~.%.WAfs~&!xzu#TMVKiKAGSoD2@s>4-@{YXuLYv' );
define( 'AUTH_SALT',        'P$`1kSG!$<3zsGX]NGAT5;:cEDOlx6LH[S}Kw.7q]98o=H;>*YlpwsVtIQezx rj' );
define( 'SECURE_AUTH_SALT', '[UHpl?k/LmEJv%e[1+jK@z%j[Jd9~g80hr./ev2C{lR8ckfi[dLMOWw8C6OVY2+0' );
define( 'LOGGED_IN_SALT',   'MLe3%`>qD0+a2?x3<(g1`]]#4PVIp{S*&flwn<teIp<AeL&3A;8N?0sg2oC^DPW9' );
define( 'NONCE_SALT',       'maXiwGB*-@eU.l8~4L[28yKu&Y<h1]7_8l4P2~~vHDE#_0DXM:2&8MQf-zWJxiex' );

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

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
define( 'DB_NAME', 'bd_timcsf_2022' );

/** MySQL database username */
define( 'DB_USER', 'timcsf_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'timcsf_mdp' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[f )}%&U}[a!la[j-l3^`q&r,r5r-4t)/bU|N+.rU-om -t,jcF!S/-3Y@[0v^~)' );
define( 'SECURE_AUTH_KEY',  '{a^[0O,8.#<<Z&x=o<crkPLtz9Ljw^orOZq=BC,jx>#@_X@GT`kz$}%u:ne:MG~.' );
define( 'LOGGED_IN_KEY',    '6e>]lPeX|)LfFZ/9M&n)n4vA*aY2-nAv|{R(Mr<w=7:p.<#h|3uoVV&`oZUO2xWV' );
define( 'NONCE_KEY',        ')LbC?gO_yueHL3Qix[oRw6`XcK,5=kxYg6:KcgPJ8KK[=|CL5>f4k=;IKzJ!|emi' );
define( 'AUTH_SALT',        'ajEP9L2FIJb64d2)%aVz+N!eE3@0wd}[MQjcD5JhOQPy]f<H+.N55#(Xd{Z</ xe' );
define( 'SECURE_AUTH_SALT', 'g xnfRlJnOEpp W-PIJ8Hq,L<N`t$F!#XkX/L6MonyewO-P<sS^??f|E&:ZT3$@2' );
define( 'LOGGED_IN_SALT',   ':vy!Z.Whe9.cd:WYaqag&ct&Lb5]d^@v}sgEW6#7}t!)Y.3Dg]i-Blb>)OSPu1UD' );
define( 'NONCE_SALT',       'feC&v0[)N*diF<B9~{ %]h|M7d[/YA0Ow  _aXu6?mb1xrNI3{Yv]5}<>*Vpe)yI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tim_';

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


define('WP_AUTO_UPDATE_CORE', false );

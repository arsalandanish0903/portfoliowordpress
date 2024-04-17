<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         '+,z7A(qzc9#O=j2-PFzKHXC.C5$74;> dR~p@C9y-7Qx{J7e(c`3|lv=_(!yS/BR' );
define( 'SECURE_AUTH_KEY',  '(|7hVjBW9Ogxciow~yN^6ulv4e}*h0:kfvqtN:qf~mUWHZSbLl+mO_>4Cr7`5>nK' );
define( 'LOGGED_IN_KEY',    'c wJ=Q*H#t_ou-c/H.5u}`lRjgS]jK=sq=wu)RR#0Os1J_Oo&5xK~um9}a%tSXEv' );
define( 'NONCE_KEY',        'A2KC= _st.9vw9=)238ku5&&+sHONqzM-B/JY;AWhJgVrcz f-AB(v`YOO5,@4qy' );
define( 'AUTH_SALT',        'veQY7aq)[i%zRx;}ic8I-N1I`]#^_1]@t{F}*tGln&(3OM:4Uz95p*?7pj~Sk|m,' );
define( 'SECURE_AUTH_SALT', 'aeVd9qdJH2oSW+=M[=ZN#[@TLEqhi=.`tkLIk{,jC?@wxjH|&{kq?+cz!Pk-H!0t' );
define( 'LOGGED_IN_SALT',   '3dY`?-j3WC?&:(*XZtMErOS=7;.`oW`)rz_b$Qm>fR@k@wGEjF|`?8GpaGPf6Cf.' );
define( 'NONCE_SALT',       'z8}k$?Y=d+oUlp +q7u)gvX7hZ]Op1k[nT~L`mQ4u<%}L1vI7AY<E@Ul+zUed1:E' );

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

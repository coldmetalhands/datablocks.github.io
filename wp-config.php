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
define( 'DB_NAME', 'colors_db' );

/** Database username */
define( 'DB_USER', 'curt' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'c?zW@?Wl3@IG0wXm/2W6|-5yJ/S{3@>c-gv;0nGgg@9uLPgKvm{XJ%L#8Iu,!~GE' );
define( 'SECURE_AUTH_KEY',  '|vMA<``39B7*saMJ2eUH.1S[sF+[v$4})eG|T2.XA0!<&FhMg<32^DzUbABf~j*)' );
define( 'LOGGED_IN_KEY',    '7z*DQ++q<77j]1v6F&Z5>>Ee!7jYaS`N|R=EcV?yU 0_BHgnlNLdQ+_E@  qgN`^' );
define( 'NONCE_KEY',        'FT^CHF)ME,L+bP|Q:[f(K1DoQSHP4VRrZX:j((L/9-H/ims&I:V_K)>IlY5Rl?;n' );
define( 'AUTH_SALT',        'P:T7[$}kRP^#u9$%j:G#v We%wB`Z=c(FL_FYk`cl{E7BQ2SqQRCxt#dosfw%Na&' );
define( 'SECURE_AUTH_SALT', 't?5mHw-obyz:f&`-lbn`o} T_wB<<=/h-[w.yWEHPbk(H?2A9P>L! 4-H!jg2<d ' );
define( 'LOGGED_IN_SALT',   '`!LU`M8vGZo_f.H^?PCyVT%1[C~z,;vpAtvaX.L5d_voah^!SeaWY|RfNo($N$6&' );
define( 'NONCE_SALT',       'xqM#&v3n(<-(!`GGZ*/mmeD>W;Xh3J2fX)ti/E`]0=#QRKApwp=%HFPTAdI&Pxs}' );

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

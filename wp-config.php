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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'jqu XU&Q:(Uoa&W0@<wV&MS]Z8Y0zv.WO%^Ls{1o-&uA9RQxi[)l6i3SU6b:A<0t');
define('SECURE_AUTH_KEY',   '(%/??<3-(Hgh.O9X z.z3h[!6Fauv$n4TCg`zUsQ:DzdYyn;[o.nvds}|gS>Jlqf');
define('LOGGED_IN_KEY',     '=!F3ooizzx ?WKa&^au0G!tI>(k GNC&]:aF58$p?5^w|Qsvz}%puth=0{* 6xaw');
define('NONCE_KEY',         '/ku.h7LdCBZ)G,,i8W0,6>zPL}(^!bug1TB9LWYZFVETV^`RDa5/ qiP18OAuKie');
define('AUTH_SALT',         'jb]g#5@u1oI3$yG7jmx{8XvHFuTe B@=dCf`:464VpGD@rI1IT=;eAb*ab,(cw{x');
define('SECURE_AUTH_SALT',  '6aX16uJ~Im(hcy_I)2aFI;[C7wTJ_ W[tGMJDNcmDy8@A[2,qH90i0Os{c}zdI.G');
define('LOGGED_IN_SALT',    '^BhAAX+a#c<6S) 6O0YF`1E!DH_GQ5upOu%0S]s~J&PReatA:De?4XOjf`4@JL?X');
define('NONCE_SALT',        'E&5iq-!@? (]&{r7C)ztP+G~iOnW@s=Ad%M-o(oQ8Lv(LMzzgZX]u#E. A4zZ}6Q');
define('WP_CACHE_KEY_SALT', ' G]*J3vC!@30F/^ +(>qwy3EY,[{e1O^c.i+Iqelsc489#/.sYTMh[qfF9cLe./1');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	// define( 'WP_DEBUG', false );
	define('WP_DISABLE_FATAL_ERROR_HANDLER', true); // 5.2 and later
	define('WP_DEBUG', true);
}
// 将所有错误信息记录到WordPress /wp-content/目录下的debug.log
define( 'WP_DEBUG_LOG', true );

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

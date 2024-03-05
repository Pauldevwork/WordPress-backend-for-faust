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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ']IkQ2G vr;ZnHT?~OZ7Dh~v}uNu&2]vvXOt7Le`6X+O*Z5#|[[X^53yfX:z, <*x' );
define( 'SECURE_AUTH_KEY',   'e|FOHLKH0B%h$=yKRK/(ZYavtF4P 6BW1gEooqCSA`~qh`8FjhpIGXXp:fnC._yB' );
define( 'LOGGED_IN_KEY',     'S^`zfL*Fs&My~WK%rxPy. Seg>#$#&%m^F^d(2Oe]X,stb_[|YjBmEx|W#3o$MjC' );
define( 'NONCE_KEY',         'k)H%}|VFNXlpkD=(f w0m>EO2JiH`AY#2nb&q7Rq3vuZ!FdYPXa41)FS4BKx&b0w' );
define( 'AUTH_SALT',         ';f=^lfh WUe@-}4eu`P{MgrY:dhrBdrX)tn;jkZpw0=|0PI*;bu_4nsW+n+SB)Wp' );
define( 'SECURE_AUTH_SALT',  '{XdS[caB2=O3WeJB4kwHsLo18+aBJ9MaF 6}E(/+Y4X@@fkSbCh?OQ Jfz<^<kD9' );
define( 'LOGGED_IN_SALT',    'vUJ}f+<2EuG:r{51%1FCrC0K(:eG>HUq/qL%y]9<[Mf,42[`iP.|xRjJ!Oze*3EA' );
define( 'NONCE_SALT',        'tlVE3~7;/B#Umh >j[:1<0a1fo;G7+5x)tHH:T|NE:2 E<+AKKx9$@S3wJCocZ`o' );
define( 'WP_CACHE_KEY_SALT', 's]K sdk<tV }Gm_]cK{z3rX~Lk^-Kyvx Y+xXJC=+h/xtm~U`!;F#[#@}mRuXiDW' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

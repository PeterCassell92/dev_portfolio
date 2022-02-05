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
define( 'DB_NAME', 'portfolio_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l%ph&aR%I{x~AAHfL*z+0Us<28~l4ztRuO98te%)& vM4j)nmn=RQ3i1=)y10T#`' );
define( 'SECURE_AUTH_KEY',  'H@vlDJvl}A8iA[&D$f)`F/@D#>vh6q3D4>u8d4}VLX$Kt%8DiyU,MlDsSss0u^b+' );
define( 'LOGGED_IN_KEY',    'E/^G^FOy5!*y[hIqEoB51(!D7Zr7VHaN{Uwbr=t1OXed0}n. p%}$;.[fgA%/RTX' );
define( 'NONCE_KEY',        'T%z$BcVY|)pygI`(ZUG/7l|lcukz@HVH8+S<`b4c?1N1[qxPmYz|RnjMd_(I~Pg!' );
define( 'AUTH_SALT',        'a5L7yzdzq?>ag`2G0sH?kT6 Hm5,w3GECO%mfV]E]39Sum`E>DbcFZ*4y)bprfdp' );
define( 'SECURE_AUTH_SALT', 'QpEhZ=FPb.F{l,So{[dt[KH&3<K4|W,kG7>Z qqqFZR}Y?s0g?~yV6N5w{X4&!^K' );
define( 'LOGGED_IN_SALT',   'HBT4F1Axk6&({<}%W/;ZG*&K|pj/p}+KogFUl^{c]9gzSYQF&-f?Az8ES4Pw0HMZ' );
define( 'NONCE_SALT',       '`7-d^m.F+?4@J&8zK>|rss>[Gb1`Nkwy84p|w;{@yy8M6AKtNA(@7tj(dnB#?BG2' );

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

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
define( 'DB_NAME', 'depsa-admin' );

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
define( 'AUTH_KEY',         'PWKDFO-tBwkFD$ELKPJ}Up8DK?cZ9+@J; UP3RYa7UU2,rtB/JYecSc@aoM~U`:w' );
define( 'SECURE_AUTH_KEY',  'USpG7?|MA)O`nEk b>,;ObMOqlEJ{5>SoFuS.kxk)r?H0IK-._776:f8(gC7=}/h' );
define( 'LOGGED_IN_KEY',    '7T^TW;1Xl+F;?KQq~{5D|YaY1&I.TCcY75tc$kKY5RyOoeUK#y[A3==M/f.!yMdw' );
define( 'NONCE_KEY',        '0lx@j:ghDsd.j]o>q*MUb?*/2=$BB5VjUUKoc4sRzX]8bI0|XPl(R0O3c]6b*D(`' );
define( 'AUTH_SALT',        'Ff:EUl$`+if*D#X8n:}$[5((cqR(sHHL6plQDd%J3Nv]vE$VRA)eDB:o&6ULXP>-' );
define( 'SECURE_AUTH_SALT', '$oAVdMqs:1TH$t!}%qR7oa-Br$*=2{8*%C}xr<QCU3b2AojnX!3KaUfzpj)2v@>N' );
define( 'LOGGED_IN_SALT',   'AyuyaSI>r|%[qMW/IZT|)3F1Ed)s:+[~`1/Nxx{EU]F^%^byt?Os[Uc YRsI(jIT' );
define( 'NONCE_SALT',       '{-MmS1[yaG13Y9XlU5 G?T#1te!u#E%-*S&3D+aJ3zHvRMmJt+852Zy@f50ar69~' );

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

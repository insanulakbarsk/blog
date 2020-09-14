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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'TL%>vh723cjsLq)RklU9Stb!i?;/*$@R@Y nX^~g;-t>A6ux$Zp#rz&4x-?jq`4%' );
define( 'SECURE_AUTH_KEY',  'T~&tE>nY;}*|mxS@])#JxO/4#DOhp34q-%l{ jsT 0S9eiB9_Nh-Ap1zBZ%ptH>2' );
define( 'LOGGED_IN_KEY',    'f&1lp6yTf(&CFZ~]?}oCUq)++Qb:yV?Tg4=^rwSinv.m[=5oM;dApAX$NJILg6.$' );
define( 'NONCE_KEY',        'v`QM5;:>TjN <kJX,TSoY9rbQ[ZIylqn}Fmq18Ywo,Y,rR-LN%V$85|+>Oz?rj@a' );
define( 'AUTH_SALT',        'e=:u&~a_#KpNBu#hg!Ka.P6g#9#e 6%TD2o:H}e$<DFCqYgE}$nwBy1$#Mj~;g4f' );
define( 'SECURE_AUTH_SALT', 'eWY^_:8ts5#efzodx:@@t>Cb.rkh`dgBe9Nb}l<VVk_LDG2;vJGy r.Es#4dejQ?' );
define( 'LOGGED_IN_SALT',   '2l0# h-1{lH]MIwPRn*3rUL|Pk#A%sq28rzftvZrh+3Ys#Wj{FZs#4 p~mNzJNry' );
define( 'NONCE_SALT',       'xI$Lz-MxTA1mRavBI~jhu,7Lv!FQiHO-xWr~`R(U`}kq-Jqq=j`Z!a5MxU5P)A.A' );

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

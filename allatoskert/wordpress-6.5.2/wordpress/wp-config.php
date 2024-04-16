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
define( 'DB_NAME', 'allatoskert' );

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
define( 'AUTH_KEY',         'N$gcU.=@PKQ-};5 `/Fo>9P%{L~3/W]Kaus]p7`BC7R5aXN^L/8sYnw:h N,bq-z' );
define( 'SECURE_AUTH_KEY',  '#~6b612w@K8S<#RD.&nmOTvTSi^4vp>jzQVk*52SB-)AVqq&[!0lVXYW?d1gpf|x' );
define( 'LOGGED_IN_KEY',    '|~#Hyh9#?;UMRnxm!4PfNH62uux2#ng%>(=ag9p*H%^$wk0l.$ RR2g>BwBMBFD~' );
define( 'NONCE_KEY',        'Ysz.vUC{h9mBPm6%vBeDpV{/OnF=|b_j+cc<;mg]ofPK_:OcwTbQz$px?mm/Fd^E' );
define( 'AUTH_SALT',        'n#]D2x}vl`^b)qZGbJ>x/(4{l&KQj3uU;G!5X!Ey`fUa,TwOy>4,N5y$S+hPKCLi' );
define( 'SECURE_AUTH_SALT', '&MZENj_j<r%N1b;!m$p[SfENnUi*)tUE@IX7-kPk+0mU/O0Yqnt}%VZg*s^+bXOG' );
define( 'LOGGED_IN_SALT',   'Sxg<:SmT%c;.+g9D,;Mh-L+P%V2Os<oC2}zq!ssgCV+=1tVoi/J-E_[~uPW{Q/[r' );
define( 'NONCE_SALT',       '<Q)6_L|?rvQJJ2Y.+*D&C;NA.+Xwte1$=ge]T]j#,0bw^)gTr40a?P/Wu9}[;HMZ' );

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

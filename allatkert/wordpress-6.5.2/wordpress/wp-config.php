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
define( 'DB_NAME', 'Allatkert' );

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
define( 'AUTH_KEY',         '7Y C]>QW>b}AI0+@MC<yro!Jy>33C@N;xM|N[&c-mB^Rbns/zGS+zi{n&d:oT{42' );
define( 'SECURE_AUTH_KEY',  'J~@pUK%qb0 {1trwNbCvzoCM4tVmq~)xG;0,6<](IP_&a;eUc$f`tSo<vSRL:#w]' );
define( 'LOGGED_IN_KEY',    '}9{$mRj$S+{v|Iz _)5Z{YT9!fuv9sA$EMxR*z9can99};FIT$d}(q,UMh|Pa >p' );
define( 'NONCE_KEY',        '6_Bg)ba,NQ;Mf%[DC$7K.pauWKou$<v?/w[yS9SjO:+j<04t`M#%O9Av2cwIfmPB' );
define( 'AUTH_SALT',        '=NQoS8)Je?pm#nYsd&<lQNSjE!S9]AHRDK1<34e !U?r#`MZ&cE!Aq8?J%9gEEqT' );
define( 'SECURE_AUTH_SALT', '_d.,~9UE)VP|UzxU#3t[_oi^N/d4BmTk1[:_-i7.D2K8L%3n8Ts{AzUZVr6G1LpY' );
define( 'LOGGED_IN_SALT',   'E8zBlqrPSJKpks|e%c-_8;4R5*oo~Wcm;XBGP(S`#oQ3ohT`iXS[=Rer!BKLx%~K' );
define( 'NONCE_SALT',       ')JoF4/_fJNooSOo#htJ&17&ML&Ol7xmOB*VaRnn}($y9dgQ6?R`5t;k~ZAh3Okos' );

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

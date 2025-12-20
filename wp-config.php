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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u300605004_Yyoa4' );

/** Database username */
define( 'DB_USER', 'u300605004_3Tg8C' );

/** Database password */
define( 'DB_PASSWORD', '@Store12' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+

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
define( 'AUTH_KEY',         '$c^,#):*inZOM;hm{;HHxhFfbEnAC5A<~$wz~e-}N]>>^[2bAbr>_Ao`J`0v++@C' );
define( 'SECURE_AUTH_KEY',  't4D1_F0,L.efbAi#r{1PHnq3ZWcvY-xPr7*qP;7r7y5&QoS6b<7=EE^n9.7~HOBR' );
define( 'LOGGED_IN_KEY',    'q}e+IB[Ea]l$Q:Ut~2zki-:i^VJW%/su_DRg!-Hz6ZXlaH5jLq$cLWv;C4zPbjU1' );
define( 'NONCE_KEY',        'wXrY}*:0.q1RZg WNY@QR9?}#dH>Ur)sz4D7.:XJEo hU2Nm!%E|DW9lshE~:ds!' );
define( 'AUTH_SALT',        'vX0@=L6Z]>#n^e&~{^%FLJ5I=<:,[.g3&<UVDo63`/9G>@{E||#Wrauk+.FndGP3' );
define( 'SECURE_AUTH_SALT', 'MVUwg?$.1gT=C%jDf?hXC^|Do6?ux}P<93<$P9%624*]39)_nVu|wZ;ubl?ak~A=' );
define( 'LOGGED_IN_SALT',   '$-6xm+nXKXkLqVW)1DrKEg@y>@Uc2cHXFknC]E1$Ycv,U-i$xuh_jFx(JBFFS6|-' );
define( 'NONCE_SALT',       ')$[dW3<75a4:9RA5EZs#$|kP.%%=+|R~ ^J0[AMWYMn(,S%RiK0PkwbjzXFuDQiT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

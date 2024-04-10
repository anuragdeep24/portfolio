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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '#3wcfP(kND)Wa3t(|)eXLd0[7t4>uI#Tuiy7iq;t36E2H-O(J>yMZNuVH&IMAd@L' );
define( 'SECURE_AUTH_KEY',  'Y1u3bjg3q&NK+l/LMB4g- }.8s&esg5s6KM.76]NP1;5oqXs,DNE84/N5-6%Yetq' );
define( 'LOGGED_IN_KEY',    'Z>rTh&>^%ijE$`8&77yguPP7uz5l%w_C&651`q2NaMa )uX:LuV?FIokMk.]K@|w' );
define( 'NONCE_KEY',        'Sg!PPD7=P;1/$5JXRjTw,Rb{*!T4Z{<BXToJ%;}B r9%hG39cs][zo.TO,cS73^F' );
define( 'AUTH_SALT',        't?d%~rsi2>Z+$ ri;s1gJrjY3KO#R> W36Yb0SwE5k|cX<shxZ?37PF<O@8gvMX!' );
define( 'SECURE_AUTH_SALT', 'Bns/^jBCR{<Qd!@2Afxc<Zo?T`DsSpoJ3ze;( +b3Zs|:8@{&}.i)Ju }U/njwjA' );
define( 'LOGGED_IN_SALT',   ')2jQ_aBv<4](}-<?rG/+b|gbv`mL}@]}1w{S+/%,((1c-e `$6b}$4,6MFpvDDiI' );
define( 'NONCE_SALT',       'p^TA0}!D[z2YtA,4o8qT9FCW&[27Xpiv9PLGt&v,_xBFEGKlm:hvmSm^$_Cf2!MT' );

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

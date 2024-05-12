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
define( 'DB_NAME', 'Roccopetshop' );

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
define( 'AUTH_KEY',         'QX/KPmPzT%!EA;[[^P3>:IV6u0Po%l^]B>)povhfCys^n+l!D_%w.nw&hsZrx]n3' );
define( 'SECURE_AUTH_KEY',  'G?^V)}2RRmP8el+hi>Zz_QhHFDx6t:;9Qq2HAhuLc7zI{<awL8Q&eRFC5,87wuho' );
define( 'LOGGED_IN_KEY',    'pccemJp0Eh.8G{PzCe&URGUFlR|ep.R,cSBm;F>1K&I#UJ?T}[(hB*v_%kfo(#=l' );
define( 'NONCE_KEY',        '9QZ@E?rY2grD2s6S3EhB:OrYAr,i_hvk,O%lghxnHuekC?F7n, ULd$`(azFT%6#' );
define( 'AUTH_SALT',        '8Ru4EHe:ZTyrn)kCsb@H#oV{F3.&MKNvYSn?S~52i.ZAqyJI,+ ZhO.!4R)HgD`8' );
define( 'SECURE_AUTH_SALT', '@_CrL(^?qMyz!sp u:S]x%e,DwacS?5Ys<Zk@g,/(mz+MeZ!67GI9EyA>wdC/8n&' );
define( 'LOGGED_IN_SALT',   'qE-p|{j<`b%50Y5FV]S;tQSjCI)FGxV $RCi8#@Q1mbgrL=>Y>8@eqKB,lU%AiBw' );
define( 'NONCE_SALT',       'eZ|~N,Oe1wo>Uqab3-E(D.nz+q]=}M}&~oiZPkgE7e{-4FwAv!P.mv8w19O2tsX=' );

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

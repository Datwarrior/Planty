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
define( 'DB_NAME', 'Projet 6' );

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
define( 'AUTH_KEY',         'c9b<:(H+5.NqY0V`CoKx-_`*_hZ)2mr97[LJvD`,B!g@T_D67}{[pby>u(*Ne[U~' );
define( 'SECURE_AUTH_KEY',  '&=GNTysn<0dqetgVs)ee0hnEX|R_6-iqI>u).%>3CQi{R!QIsmGnN_PbQI*]{$=;' );
define( 'LOGGED_IN_KEY',    'i:ut5M2oMz:@MzlL$%Gxpjqhx$;AW.<6Y:c:|7:rtx*j#7y)<Jh+nvI&K=Y3M/vh' );
define( 'NONCE_KEY',        'rcA 7pPxv,%<dU[TU`}@gg*AzZ3jb_n].<Dxg?&l`Q#9Ok=*XT;5/ot,nkZ:Wn$2' );
define( 'AUTH_SALT',        '4D`WTXM}?M[H9GO(z/!l%R>gH#m8pGZ,byHc&$%_uqm|bYXfpyL/5l{{gcN-0,0-' );
define( 'SECURE_AUTH_SALT', 'H3jf{epuV#n>ZkAHf%nZKqc-m]V[RL{/w}Dv|LO>GOleYF:{IBR}jqw5um!BdhR~' );
define( 'LOGGED_IN_SALT',   'nwNO;c$.?/F>1?*[Ysc@GNoz.__oo@.#L/4iDw`tJMU=sYI9a}0uKaV:gON{lM[0' );
define( 'NONCE_SALT',       'F60=w4xh*f4=UiW9KlK~y6A:a-}rf1?)fBY=41j=PCwJM)I5g{$e!uoHj>sY,(*z' );

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

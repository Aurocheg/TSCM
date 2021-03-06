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
define( 'DB_NAME', 'tscm' );

/** MySQL database username */
define( 'DB_USER', 'tscm_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '7/y$ZUk9"]cD#PUH' );

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
define( 'AUTH_KEY',         'b~W{{b h[*&E^s(&Z(pX&Pgm2u2:-s2}u}%G!+y~ol5dC%_>]<*=fP]:+,BqW4:l' );
define( 'SECURE_AUTH_KEY',  '=!xQ1o72[cPC!;Sx/T@ymSFW6[g`v2ag%i7K:=]6? Xr}-gao<2l.m6v[{>,~2|.' );
define( 'LOGGED_IN_KEY',    '|vJaq}-P~rvbgr>TSk9=Ok{UKaR%hCsb|C7P-L]l#!9Dye5.|x`O:%TPY;Q-e%t~' );
define( 'NONCE_KEY',        'D-^+lx,(LE^u]=a7N>&yk*}a<gzI$p+;7,iV2wF4Eyv@Z]tosy[|GrXgHDQ2M1+<' );
define( 'AUTH_SALT',        '5-^2q/*:OTf</A/? S4UdJ0m|@nJ22Y50oX$u;z0ec%f}ecJ=Vpw gQX^8*9r4Z4' );
define( 'SECURE_AUTH_SALT', 'OFEbnvkh6~~DJJonCk7k56pjacbN 5b+fW|JBr}G1%ptTvmV?KJHPH9^IzuO.,;I' );
define( 'LOGGED_IN_SALT',   '4HI3nu;y</FU_ct6U3P5z[pYp;!F27?}+B?Vg*Nli&oJ1 =OPS[*;Y4aLdB d3zj' );
define( 'NONCE_SALT',       's0,N,L1%d]G8VVXM.i=(DZ@S.a;`al,>B[SdNvR_LY=iOUN*ARE`v{UdX9:#q8BL' );

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

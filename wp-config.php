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
define( 'DB_NAME', 'miiko_anderson_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{O${6e3F:q_]#k(MHi4nLly}i>3h+gs&=[RUz|rB{tQ>Rj6u62<IkdzZ*1E2ODGh' );
define( 'SECURE_AUTH_KEY',  '}(z<^J(_u6x>&*Am%wtDSRPklY7usLZKN;|gDu;jy0/7|NU2Ru!O]uYVP2./^p.O' );
define( 'LOGGED_IN_KEY',    '{>tT2hFuM5w&SBT4|R)0&],T1.v^_n/2ed9Ir*5#D^`KQt Wa%~C*~A}q`70nIYv' );
define( 'NONCE_KEY',        ')2Ph&)i5PZZ~XB i:atYrp/s]OG9t>,Wb!^*/cO:Id~[CG1Hu8}reyEWQu%C5gx[' );
define( 'AUTH_SALT',        'k,{QNT?^ge50<yk7-EbCMc)~j&6X;Qugz@c) 7M  (&UqmCaO&6@V@2Ig@$vMBk2' );
define( 'SECURE_AUTH_SALT', 'K)$c*sm&srO%$imLN~ts<UNPVXL>Me+68q=vxk+s/I7X;r&2}2LZ1xr#Oes{z=N-' );
define( 'LOGGED_IN_SALT',   '+vWah4>/uvVwM.hJk@^A1L MY^Mg$/yh+iyG0_x$J& 5z8|[:[j5<ndge(+mV**Y' );
define( 'NONCE_SALT',       '6/}IE*0pRrH)o_d*kP.[*@R./fqq*MOEsUCW9-o?T?h5[!_@G3W6[=IzK#X[,NL]' );

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

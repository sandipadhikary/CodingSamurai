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
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'ZVtmu3nh~6qjgk)&?hT-Ev1#jk(N9t 6qoG~2wv.ZD%u]U^(s*RE*6vOwiZWb*PL' );
define( 'SECURE_AUTH_KEY',  '+!Bv@fR~CS*oF0qTdeA9fYr7[Js&9-?Sv6[f:~;T%4<%*KA]?HixNOJT`>T3pE/]' );
define( 'LOGGED_IN_KEY',    '0G_C@sRXcn?jFBEOKs8h&vHmzdxZr~xkglp/p5QKLw&_^o6Xy`}h=c@*[g3f:WB{' );
define( 'NONCE_KEY',        '[VcyTh{;uFec=.RMxURXJbCdDG!X|h]kW) ?B`si`lcXu,_1[A&O [:vq`.<xixT' );
define( 'AUTH_SALT',        'Lm0Y92noi. +H*NNGehB^hCvk<e*_jAmqDyjrG_5CI9n+Z|$#nMe#{F=(^%@acay' );
define( 'SECURE_AUTH_SALT', '^-Ho,+H*+S`?TgCxI>hS/D]oi.J_*)tkL-Co(,RI5,n)O/-Pwe0_-`eBt>@>80E_' );
define( 'LOGGED_IN_SALT',   'ACP92qkR`nm |A.cDRJ{xPKgdcO,*3ZH.z<UiJ/BdtI}(cx<eLl:{-yA,OrWmfuR' );
define( 'NONCE_SALT',       'Z4%I7<A?>aEm)g:PB%C6J9J|^-Tj:$yj]&uJI3[xh!8/$_}_4hFaCfQpDD)~Pl`&' );

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basededatos' );

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
define( 'AUTH_KEY',         'GH4_*Siq[gU&wo1FBPtP!AT1)=8mBz;TBwBSXt.g!lgVL~#l@MwVo$prfbR)@7;R' );
define( 'SECURE_AUTH_KEY',  'ayG^%/{9TgrfT82!R/6Q$}nq2c}.=S|>Z2XAiv,O`6PV@)o;*!8so~6bgah(=~15' );
define( 'LOGGED_IN_KEY',    'czJOE]u5B,)P2[{N)o*4{Kxmq*8H`iQxOb)Bp4+9g15fL_9F`=)G7~-:tN$Tf|/0' );
define( 'NONCE_KEY',        'CpbscX4XkZ+E+{ng!z|Q.>Yhenf=uPPaY..jLnR#&wx H1cqXekTJY]?Wzip3269' );
define( 'AUTH_SALT',        'Rz7K%p(b49FfZYI5alMX*g)71x36iC]jz9Xdnui))&>Ta<d<;-r*@kHgk@?<&)X6' );
define( 'SECURE_AUTH_SALT', '-aINl.05/3VoIZp-T%$i?2P4P.&m:UDMOi*AQA|aSPKAj]nw-{BTnzy:P{*n={-u' );
define( 'LOGGED_IN_SALT',   'z9wZxye#SPO{Wq^}2O_@rF:}f/nt50Ei}D_gKT!&7<tV0Ns4IvB#kCJ8_6pwnc$G' );
define( 'NONCE_SALT',       '+A|Wd60d3O:m:y8YVu,@`@ccPBJV`>bN$^&>6<A=:]@gx@3y&+L4{dT4Mj8OITV{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

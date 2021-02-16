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
define( 'DB_NAME', 'donarmando' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'odonomar5' );

/** MySQL hostname */
define( 'DB_HOST', 'donarmando-1.cao7qhwz1r7m.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/** @qcmarcel : for heroku & aws rds */
define('DB_PORT',3306);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'huX:43d9Zx.zPX{Zsj?G*]emipHz1RDgt2fE]E@6ka JKYk6:Bdmak1>.>P%j!X5' );
define( 'SECURE_AUTH_KEY',  'Bf&rypzHF|9xsL{pbBbH5LcbJJ6w@oGJohE1.}ghpH9L`lh03cu$;6}5AF-HwkI:' );
define( 'LOGGED_IN_KEY',    'F/elYM?*xo7/RHk)R6tGc3s?zGv!n vRV5nMlMz{IH&E`2RL%R5?}pCZD!Z&?3iO' );
define( 'NONCE_KEY',        '-tQ!_Q^_W{[04|4ZZQ:tfXpxK{8eN2{+UUS^nW`ftp.9QBORs|u]o[%ldRB]UqJt' );
define( 'AUTH_SALT',        'IM+8Cb<F@MM#F6CG)Wm`p g.b5w(&~tx$zDtFb0[]*&E%G^EVl$^;~w2y1Xd>4C@' );
define( 'SECURE_AUTH_SALT', '%amP_|}{gE~tet$N5XbuoZg8<)%2l?&A.m`q!5P2emx,t*9&Ft?<?<*ZW:^S!R;Y' );
define( 'LOGGED_IN_SALT',   'V_IFqJlw&a6(-]lj}KV>kp5PgRt.m 6ODA7.j-1tWR?`u5aVei{ByW?m*;Z~xdBz' );
define( 'NONCE_SALT',       '1$6B`*Kfncct~W>`]bNG,,(5E$ f,q^BP!y4(+lHs$EBWGm$(uCVd$xxA68_}|3n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpar_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

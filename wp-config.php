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
define( 'DB_NAME', 'wordpress_practica' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3,(gYX}y=%Y6Ef+sMxakv3x>O3p@O{4EiKbRuV.QXfdS6eSTl;5!Wg@j//4bfz5?' );
define( 'SECURE_AUTH_KEY',  'hw>$lm`@7yl*~7R`g@:$0=Az=zk:tF]Gl`oPK!u}-`*!SXU#*L3wY3?52Ymb*Jlm' );
define( 'LOGGED_IN_KEY',    'j}Y!81P-!K{.B4Qm88|HMwQ_F%hxeU.yhb3yQ`QGK#*#11x%!LYX?S>4}vCjuzkK' );
define( 'NONCE_KEY',        '<zGw?i]QfW_]8W61NQu@2TO5&-*}:9o4@|BGD&Iy(RDyPx7OkxD~EgTd5OkrppWO' );
define( 'AUTH_SALT',        'hUJcdSR(jgjMcJ>kh{19sgDPr&BL7Ub%?H7]F0?0=b?,j<J,dsf/H,a3.Fp$S7?Y' );
define( 'SECURE_AUTH_SALT', 'J=#GbjCMr5Y]A(0Dj49_{OxsQGqD>R+`@oeh)#3bv1?H?V^6Czx`h*2nnNNw7g:A' );
define( 'LOGGED_IN_SALT',   '`!;+xW;:m2YM}(hg|Wkjz70.(86S_)0_ sWp?l7z(>%&T*KY+lobfetG8*1Q%3P2' );
define( 'NONCE_SALT',       '~6Ku z6jzXK) oi[:JI/vV(&qw;n:TT8*.D?iy1xU.WB.Ve1znqE*}kI2?D@UN(^' );

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

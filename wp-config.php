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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'd.Qd!]xgDY%&P,7M(q>vQYeA-qIxN38} Vx xp$;Xt[(3[Lpm[@J[P1k[j)P:x[G' );
define( 'SECURE_AUTH_KEY',   '+;<)kNm$m[2NsVF2p>A|J$v.+yL6 dO8q#q@{KTO:!)<Z;n!=k-2D{{k:O)Z?pNd' );
define( 'LOGGED_IN_KEY',     'NC#w)-H_&T75UTla$mP~iG@sU+S8*VK;v6TiCP<lxYfgr=yI2^i!i-|fQt+B]g1t' );
define( 'NONCE_KEY',         'QiiW*#6BQ&+2W@u|/J#5(HLk{qi7_s[RrIwi#;u%Iz];3^___)w7N!D@nTgY I)M' );
define( 'AUTH_SALT',         '|Wn_S67!0h6~0(gq4Y?*eRY 7,azlS?/d$CviWF+;isdNG`0Bq{,q/&g+Wh8mk$]' );
define( 'SECURE_AUTH_SALT',  'NKZ(}Yx|9H&h%H?NH#kguRO._!%DJ56z$NlX;upAr8u>KiTGF]t@sGBM<XJtBv(]' );
define( 'LOGGED_IN_SALT',    '@V:QQI~[Rh&da}32RShv{-xCd7nH>l :RB0Gj`<>=:k!9FP?QHmU$ES(*Kkw6/6S' );
define( 'NONCE_SALT',        '6r%|Kvb#Jt4WZ(?_y0+E_YC:8gfakObkfaQb]XY2,cgl@Yn#Z|B[d}1@z[3SoVbs' );
define( 'WP_CACHE_KEY_SALT', 'VcJwhO~<L$g4:*PKZr&`NEMiw(?=^YVX/R?V0Eh;:npq$FLYjY>}6ad_M*~^2#:W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

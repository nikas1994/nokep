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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id8549441_wp_e5110d2c6913bdb9bda0a7ca5acc29ad' );

/** MySQL database username */
define( 'DB_USER', 'id8549441_wp_e5110d2c6913bdb9bda0a7ca5acc29ad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bea73257ba6345be5d8566793b679f14b1146ce5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'y4Q3Lih/oUoc~Qu@ho}T4xnx)biQ/TBakz.^Sq,C7b}AK6|;Ah$fz$u(B-`$`zks' );
define( 'SECURE_AUTH_KEY',   'nPA|S;77,RP-|X,U>osS.}s3o>r_x[Gk9{nJ`a#wy@e|&vH_qz}vG)6UY&2~*`02' );
define( 'LOGGED_IN_KEY',     'ti7Ao:5}OcydzIsVvqTPIv5oDG.QD1.-@@eS8,*(+7maXAEe8Q84Fuf(,_C)Y.2f' );
define( 'NONCE_KEY',         'J`K!_u^^q,^d>_];`]aS9gYE4L9oOfr8Uqxt891/mqH Di??JFRb(V}uP{4SmnB~' );
define( 'AUTH_SALT',         'sa[0sE{F2nPds_xH |U)^3yE=Hy=g:JF[E5laH^.rPUC9zPOWr+:n*>2R^~<dFL ' );
define( 'SECURE_AUTH_SALT',  'T=3D]96-iOXD,RxD3rjk=(sj?O4xzWDKmx1_>Q=*Lp}}{pGID_THSyjhb%#}7+]d' );
define( 'LOGGED_IN_SALT',    'Im$u7Y1YLs|q(@I6rg&d/Ef^hZ=MMhv5KM]&c>(t~n(r)RQ8rK!G>*Q;r+ Hh]%=' );
define( 'NONCE_SALT',        'PZDZ{E&]E#)^;;4H&Hj/Yo W-@XK~fMR1Y&2$:gSbX)[-7M-2cUq-F|#BO7WJ9uI' );
define( 'WP_CACHE_KEY_SALT', 'D)+JhUc`^z2$oT:.s!n-/DYPFbSmSb%%DD(9{GR-~<})/HGt9mERE^2@poT2HO#m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'wp_local' );

/** MySQL database username */
define( 'DB_USER', 'vlad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dopedekan69' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         ')l$6PJ^PI%nbx5X*T|=#P)$kTe{.S}9bnn[c;</nB<gB52KXV4mDk{eqhtlp/aI6' );
define( 'SECURE_AUTH_KEY',  '%=WSPAC2u)Ve( v,tJ^QPR&2~Q8n)<>;_PikdNqdTjlA_/*@1=&uCXg#43r(qinM' );
define( 'LOGGED_IN_KEY',    'Oa|.PE`) ZS1M$]4k!KnqsOU_GDz;T<,&iBmN3RO@n*/o0o,0+d=J`W_h&+e[f=x' );
define( 'NONCE_KEY',        'sY^M,^4U.Pu%0gBj5=^P<#XAOv,IB}FD;!3pe)jV6UC_YTY6xmSrT94VXGUyF6=K' );
define( 'AUTH_SALT',        'y=mqFnycBMFmWtiG`jqpIu@9~9OmYl!w_Rj]yp)lGFd{W4kTDST]VuRLPo:t.O#C' );
define( 'SECURE_AUTH_SALT', 'c/FFSdRv@VZpiGZ?N-#cU)|Y|49)jV#8I~et??Xd:y)MFL1wG66/NL0j1d.;!DP{' );
define( 'LOGGED_IN_SALT',   'joCD_a|3(&@BPM!/i1W +DA!?Ah@|pN5wQ,Jfi@NicqC:7&f6mF3oTm61g}h_}#.' );
define( 'NONCE_SALT',       'G}&98R,l(eNjpYeNF#(N`l}?cajpR3Ruo.bS6;cyH&zJTBui7te(|SqB$%E=Mv`?' );

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

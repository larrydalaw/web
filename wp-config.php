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
define( 'DB_NAME', 'pandaland' );

/** MySQL database username */
define( 'DB_USER', 'panda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LL456852sa' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 
 
define('AUTH_KEY',         '%p|8+.%qVLH3NGsbM{Z0OV%IcX]oV4bWUo[iR~tRTT&L,)`d{+:AC#a3!IcmC{()');
define('SECURE_AUTH_KEY',  'H#1wX7n@5]+EN#.P?k!cTT=iL>zE_dBa(Xi}o8C-U`5C0x-x(jv9-OCD2/4eri<n');
define('LOGGED_IN_KEY',    'm}rx-ARjee%q9N Bt}85([|W@cDO`%M^<+/ I+)s+-%/q*iP>|lJ[T37==l([^(m');
define('NONCE_KEY',        '[rq2vT5yA8[H8/A[|>Hs<LFKOjsE;]#Z1j/A~zEJKd)!iNn[~o3>PC2XScqTUW&q');
define('AUTH_SALT',        'h^nw2h.K,@U2? =`hX4}AXGEr];kswNatRm#>u{U-1h4]&BZ#?2<,gmZ|^/9+!GV');
define('SECURE_AUTH_SALT', 'X$U_j}8$0Ax>s4|:2bQa9RQfwXf@`M=-x<N0C#L8+J3O|,peRo8P}6IZB7>Dmw,>');
define('LOGGED_IN_SALT',   ',lZI[|;cHFKn+Fn>.n6!sy~F(%Qe+p*LASv~A`lI|O, Ff<2||[ a|`Ngcs+Bm]Z');
define('NONCE_SALT',       '<|*79r-c*q_btpLrnB`F:(Cy@Gyd>Kw7{H4+>22+&yI0 5<ZkJ;j?=)U1/@pUnr=');



/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

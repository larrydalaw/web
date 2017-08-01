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
// ** MySQL settings - You can get this info from your web host ** //
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**
define('AUTH_KEY',         'm4%5gv/92mhH?>/y)f7&Z>%ZU8MCqD+`Z|h+LNSb>}0++_a|-f2:!d^hj?kD7ouZ');
define('SECURE_AUTH_KEY',  '2#^-N}+5[<s0-yT7IppcPVWso2B-kIecTc-rU.]HJ71H!De2~tUp.z}g-!A4*Y 2');
define('LOGGED_IN_KEY',    'zn91k30aggv-x1;`I+uVluG  IR-Uy`x]r[>N]@|Tk+`~MM:e2gL=f`E2Ed~1aM5');
define('NONCE_KEY',        'rj<a PkOJ&9c}}L8PGcB#Z-5drD}jV/i%g(*)EWsZ(LP,w1!Xy#y&]$>D]ZE@Ij4');
define('AUTH_SALT',        'Jrpll+# 0RVM[EP@Evy5rB@c?wQnTkAB|A>Z+o(E(?{z)P(FQ,6e 7Bs_*_7fWhI');
define('SECURE_AUTH_SALT', 'U[|)38<++IrL?QX3%!u{xYpdH?r[-A++~V~9wC x1{A-AQ9:&g|Bx9wLBiLWFjE-');
define('LOGGED_IN_SALT',   'S_)cGrz-0sNaoC61S0s[va[wh+oPkL!9IAq}!meJ|$|iO?R^;8rIAdJ$i=Y+mg%{');
define('NONCE_SALT',       ')4;J:v(ayg(>gE-Q9j,#S81!UB{(ujkOj``l+_bF(5_|1CkORX{Mm|(%mP>aN7:J');

**/

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

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
/** The name of the database for WordPress */
define('DB_NAME', 'sage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<_c[Wu,:5OPNHj^jbV|uG@y>xQ>fntvr4-RJS+*o<N2@mx.U~k<=~U[z7Oqa3&Bv');
define('SECURE_AUTH_KEY',  '=T{YeH.%=9i>}FT[AVXy1>18jzIlm! &{ZeYC[!ae J4VID7&Yn&RrK}<ARO6iB8');
define('LOGGED_IN_KEY',    '841K._OdTGt|d=tfg]zYVD@n4~5.1t4]UvC+-[l/3}1YcIv[i#cI>oK=g@KZ-k6]');
define('NONCE_KEY',        '-;yo;Vv{$:yim@gXS?T>6J5^K=<ZO%vT+P8REBta}&~]]0yZBee_d6KPveJKPp*X');
define('AUTH_SALT',        '(3y{&I$[ nwMOj;<nDBhG#(Il2h@aa(*ZV=0LzO|&3b(JB`SqLOjh$xa^CUY7cHS');
define('SECURE_AUTH_SALT', '-Te0s[-hSCZn-H>A5c{DV(r.oj4?Am s2~OR*X7#,nt1R/cEu[[9m{r8--%J<%/I');
define('LOGGED_IN_SALT',   '411/+1N?`L~[jqimRU$WZJrsq$s^$hoFSUT{m],Xu3|nF&.,puwl%0daS+EP]nRd');
define('NONCE_SALT',       'u2hxGdkxSA=c}<w96@GRO>%!WRIAlDw&V+W>_f<E#fNca(>3IJXJu)8j|[Ih9!ig');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

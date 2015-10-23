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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qgL#elS@z8>8dg?SmT?wO;Cr-Gqr{|<YaJhKeI3RKwFfirLm4EV0|9$Bdq6/[!?.');
define('SECURE_AUTH_KEY',  'Y_|{[z]ZG?gvZK4TA6fZ|aE0=NP<W)8nKoEl{!C^A4^_x*;G:N/srZ:MiYYoe.9U');
define('LOGGED_IN_KEY',    'Kbs+^(TN>$pZB466]}-,9(UCWZC-@vC3d)}A|J%gi|pW<XyN4-YmH{<o9AAUu5Gp');
define('NONCE_KEY',        '|&{)&`4wgqosgsleY+GE?QKi,)5mB*+J#&A;YAX)4RI)-2r-mccy&Nc3]}FIKCv]');
define('AUTH_SALT',        ')Qt=he]-KvP&3+qb*||~O!vD=*M6)vxU9q>AsD[xN]_7)rhOJ-T<*O,|2D?G){|F');
define('SECURE_AUTH_SALT', 'C(`D4p;yTb1+i`nh5+iy[>eq/}x7d_J_T+gF ObKWzHrik2+3^wW^P%nL^(5C1I ');
define('LOGGED_IN_SALT',   'q]H%8uk-6bp-(2K/PjcQRO&Z>>J#?brazp-w_puMv&c|#uJ5#,U?8c@(b5|[w/:_');
define('NONCE_SALT',       '1vnvq_[VQ,m e9&g4S?o tuF9_8RPiWk~&p#|,S)87qj VUeM,)Ki>=K0ni~*Q+e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

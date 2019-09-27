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
define('DB_NAME', 'toolsndies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'flexi140');

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
define('AUTH_KEY',         'HXhWCrLJ77`M)le{dX(Zdvs-2zZB:xR{v|a}8dmE|?OoVBT#/lC:S{~FH|60EI+u');
define('SECURE_AUTH_KEY',  ' e_R&FZu(C(iI<Z,m40aT$mImNxnyx{s!SBk_WQ(8gdv+iGm#}>~2!`EkdsA?Ri-');
define('LOGGED_IN_KEY',    '1P.8oB186%25}JIRXgcVv`U4+)wMQ2u$@/-7 F_6:<x6t `3Yfc1eXo=~l4gC#OO');
define('NONCE_KEY',        '.k 2euip,v`>,>Ml/Zq}oqH$*4A^@lB:%30V/_Q76e85A/xPL6[4,]RQO,Y! Mf0');
define('AUTH_SALT',        'ec@Mo|9rhYmHy/%CK7k~z/W*_tAa%Ebqqg^CUAM*-cxjgSnJO.Q?E|EI(1H`HGSC');
define('SECURE_AUTH_SALT', 'b(|i; >rl,ZQ4Nu{Y{:^QZu(|XTGPYAcNTU~Nul*>8y~#d~(^V,hQG/(bsq3xw_s');
define('LOGGED_IN_SALT',   '#V@u!,gJE6if!W1FP|H7m>5#SLXoks[Jb95#.5|=y3h`b=~-Bsz970u,Dx7oOCCd');
define('NONCE_SALT',       '-P.BQXTAX{5|e6!rvmWz0n3h/:`H(B.A1 U7.dKrx0[R?#]_mj )>1hTMGB |_9_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tod_';

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

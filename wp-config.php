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
define('DB_NAME', 'stallingkott_wp');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         ',0:F^jI$JL;8dH0P4AB!?#yDQNRzH]7X=C8@-9cztFd`3v[q=k7o,{{v|usi4]Fl');
define('SECURE_AUTH_KEY',  '#!R^k~P4r}T+w[zlzwel>g51@y)m@ycNG4N*(8=h4[Z@6j43bb?;IQ6/W^t?wBS7');
define('LOGGED_IN_KEY',    '*%DS.~wC-}pGiefnxa^yS)LiDw)27#`i?jPhgm+gzLqtVeC4kjr3j1=i-V:bY41Z');
define('NONCE_KEY',        ',*^M%]Y3pG~5^sJX=_/D1WSNl:,=1j%,LDaA,U91I92C;]wG]<./%iVsO1~AyNI;');
define('AUTH_SALT',        'ewfk}Bo,^~{xf6h2-m^W9(4+:H~7FXSjp+)GdVeH;4ykc<<v> YIfG9:@1d+iy|m');
define('SECURE_AUTH_SALT', 'MgE0/?^6VrrMc#Q?0c]1R|{c*x[ol60?O?vgGuXRpP4MD8!0rrXXv3/wLbEO-d-P');
define('LOGGED_IN_SALT',   '8Z)LE<nZoMF+YwshO?9S[H(T7e(J2koEl8=-e+5YS@LQY7p4/He.8TY> !r{{47t');
define('NONCE_SALT',       'i,d02EfIV7zihBu9/[3`fmQPvQdfiK#KpTAOiF_eYk&J?jXf23/omb<kdP(YF7L4');

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

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Wec3c7}T%8U-_tbvX:!U.+_qCBw5Ta8TQ-+&nCpsQ4<YxWg@cclgZ@`RQ2NV-&I:');
define('SECURE_AUTH_KEY',  'j~Ll=:j%{w*&|*s*]H[#R#EFA[vo=|^<dZR}Xp,X#s|+h(2V05Oe{Coxxb1?jgJt');
define('LOGGED_IN_KEY',    '={?CjP$gOWAcdSb2gP?E[&|r:4dA8*-JIvl(I(3Z-hq9&=3gH~gs:^8H;Bf9`acI');
define('NONCE_KEY',        'Zl2:c{t.)9`v?W@j01_;%v>+[$j|)V<<3RN]6S,S/$JNKwlY5Qi}ky&zM!(.wgOd');
define('AUTH_SALT',        '8=5XN+0{9Aw^~l,-Y_rE$a-SAUE^SYIWs3YxW@z`>mt%<b2UKK)YPUqL A/BF*>t');
define('SECURE_AUTH_SALT', '-/`($OWuOpipMjL|@d6o$VydI0>>{!,XW<aO<N7GJ%(qW~}Y4HI.33~mT[t*0Z :');
define('LOGGED_IN_SALT',   'K1epN%*7TS=>r0gW_8A~wbGqS,wW{t|4L:vR{v-@<GW?UzvRq<|i*;#3@vjI$Eg4');
define('NONCE_SALT',       '|&A4J.mxb _.;xB$##ix5]brHZSyxePOf?rAMHLpQ7wzZmhNUl$z3!0Q{&:BQ/V3');

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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TRPfe1vF[{T2dGW ^0S|&L:pIG{H#d*|_QjvE9{&Mw^yrCR/^IK|QbxZ#741=>D$' );
define( 'SECURE_AUTH_KEY',  'j|<i=Lb($ A;G<KPH{8NGKPZT9B]J[)zrp;:ojE7z&Dgg<+ki8mg_5D>X|r.#&pv' );
define( 'LOGGED_IN_KEY',    'nyvhXk+,^>`35(:*zK9rO<H>)|ssXGQ4]1fRDdnZ2w4pKDe&=k~2I1#mH:HV_LP;' );
define( 'NONCE_KEY',        'd;9*EnY=J>LI: & 3xyKLT~G#W];xA4`[pt2KPihx&@%2G&@WR5K)je2+-UO  w`' );
define( 'AUTH_SALT',        'L[tNF[=(YuPJ+5IH/b~:fl1mC:8re/o=RV^+hgkkG@SCp(q&w XAn7RpJxBbZ1@v' );
define( 'SECURE_AUTH_SALT', ']HREQzJz*0zBrW9ag+1(K7:#WRgFAeWE4D%QtqBC{n6f2nG2uwS6-xu.S9Mo@[=6' );
define( 'LOGGED_IN_SALT',   '>5A98` *,&>`H 13?,,!u^xAH`Gx|%3rEk^qMQ{3PN:N#$/D[bJC/T:m?vN>Pn4G' );
define( 'NONCE_SALT',       '|!5P8d<m1.S}[hS8yF-ea[n.ak!=V.{7*ORN$rsV3}ZHm-{~S.A[Ml?kQN^+; KV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Acorn@Caleb' );

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
define( 'AUTH_KEY',         'uFG&&|U9aA+uQ7N/;[R9RhO,C211CVpRgM#:FlsAkjfS87kZu@#s)>dd8sS6}Z*m' );
define( 'SECURE_AUTH_KEY',  'EQg@2woD>(R{TKGvEKQOHt|?jB=P)=/eW{&]Z9L +VI,!. xI(8%K[aGq<>{l_4>' );
define( 'LOGGED_IN_KEY',    'M?FYdQXY]ne)N$Aq; vhbOkZ<{cOsl[}M}2qNRoE mQ=lbmb8sB<95}rM?yA3@y1' );
define( 'NONCE_KEY',        'Oc1oZV,Hq2ytd+;.+bW),cp#y[z{oj7VN d`/A{]u7#h$uPvrA[(&!Z6l2nYJ7N;' );
define( 'AUTH_SALT',        'o8yLxc8#_}}(5wM> ar<SgLnear{Q@YmzAI}I5vaa-N0}`p k)Z 3R)lIu?Oxs<|' );
define( 'SECURE_AUTH_SALT', 'O!(r!8fvx(d-b_!EQf2nv$<ut#$NZ>0FxD{7z{s-;4KuxKh)C<MymJaww25[Ms$!' );
define( 'LOGGED_IN_SALT',   'Yf`t!S2$@Nj9jwCS,io,.Y|u9%+L$]d,>B8Mvq>#gTvx4]ZKVL8FYa_l8_U}pk7|' );
define( 'NONCE_SALT',       'X+u]2M?~HpN@R%;84oj&ZxG!i6h1O/D!a%W9m ;LhW8Y(9/|-npL[WsE}dkJ,apt' );

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

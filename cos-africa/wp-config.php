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
define( 'DB_NAME', 'wp-e-com' );

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
define( 'AUTH_KEY',         'Kyw.nl}^*YsYUccPAWR@3s,$3y!s+krxN.xT<{U5-]Gw0POM%=w-mURMQ:d/2qe[' );
define( 'SECURE_AUTH_KEY',  '[VwLZM[uIKg0*~Nfv=%>?}zs6ZG W>qUuG(Id-xJra<L8DN 0@j<qXaoUMQQ=.V&' );
define( 'LOGGED_IN_KEY',    '<&iFE!MUqC BNmCOuJE3 zc))HTH!QR>VVQiS!M2w<Mah^#[P)!tdu?w_v6;k1Ht' );
define( 'NONCE_KEY',        'kakZQ#YLqf^S0;RVESFb*kVdEe8a&TbJdks,5#&{bsRyQ+;s|zg} qUU-QN/hbpQ' );
define( 'AUTH_SALT',        '9lH+jk|!S&(-{RCU>fra7QZl|Ttq$[Q;/g{.-l-:W2Z=_y(VL,>N~SDd{x]{_OA1' );
define( 'SECURE_AUTH_SALT', '@z_bf4TGE4qG]eAg{}.^Tibu(i3*pvPi> ]gi2;Z@6>,z6?y^NG^0D=%&_G5SL,+' );
define( 'LOGGED_IN_SALT',   'xop@nsSd3WSy3K$iJ0Vxuh {o20P6|[k2rWX#JsN+!`ow_#h=@b(jq5xqN~r<2+2' );
define( 'NONCE_SALT',       '>:cDx}gp|NKzHt}WBvP1Fyn7PHCwyf+9A4=p@KI!ZvAmD[DcSgLC-)ET]uol@C8q' );

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

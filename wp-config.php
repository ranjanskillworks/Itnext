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
define( 'DB_NAME', 'itnext' );

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
define( 'AUTH_KEY',         'XwH8te%@/VH1[2hAd&A_ BaEz>X8^%h$M!wnxu_MJm_xlfrgVyf@*d+,=gXBR].f' );
define( 'SECURE_AUTH_KEY',  '3o@:#i7fO&&A]Z*&Q>?.JWimjd+8!iqm2uf>x6uy|KK0l)ggd mVG`_jEda[)WmP' );
define( 'LOGGED_IN_KEY',    '`^bAB]c5i%L~2GwD-,gfW/51,+VVu[^kS0O*gQ>7MBd1Ne*#S$|,FJ(s%C*ls2IR' );
define( 'NONCE_KEY',        'W0(oa7pau1VlHgf#C8Be7R$tLRcOvE&1kZ]bxw_t}gx<W?tv7OWK./{b@:F2`qj1' );
define( 'AUTH_SALT',        'OFSDy:(pA^c ON2]<{X)LV53b~<-~K/E8x||5}@EVPbT{xu/[^~bA^_&UUKk]2&{' );
define( 'SECURE_AUTH_SALT', 'uJi~`;ZtU<=>/]7l{yVPH-hD%XGDg6:V{Dx~Bg. K&L[4&v4:CIe.#*]9N~I3Fwk' );
define( 'LOGGED_IN_SALT',   '0_(f;h-$7UeEJLzc>.)N_K>a;{oZ(}V^ W]FxV#y_?MiF?}Gm,~@(j]8sm~p7nTk' );
define( 'NONCE_SALT',       'l|(r!:S|kG$lMvyiXeVket0/fB2nTJ)Bw|*qT9tP|aQXB4eELb:im-W<kb0f#B_J' );

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

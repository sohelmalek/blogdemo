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
define( 'DB_NAME', 'blog1' );

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
define( 'AUTH_KEY',         'S*9~q5tOhIl`u8^B2a@3I% [l=x*mJ:U(Unh8h-x}t99-,e1^4:zUz_&Ut-uYbE]' );
define( 'SECURE_AUTH_KEY',  'M#ggY&6J`QSB!&.&!HJ4A^1p{ovlW9Z?0SUkg<NkoAC&LEU_St#x me;OsWf3ef{' );
define( 'LOGGED_IN_KEY',    '6:*Ti7Av~md!jyoM~BIJkV}r5f04acHmG5%u+Ou/D+=A0n16N8}yc6sGcs){-= :' );
define( 'NONCE_KEY',        'T&i(yz-9b,<8z]lkA,=#dln}@*-`{s=; 2nG(w3(=5TXn@3d%PLQYLA}.ftGA~Rv' );
define( 'AUTH_SALT',        '62>VKubwd^&<^#C2oY-[GFA5!9NeQ?^,Hx;x~jdf(X:54/Jt2]5Xwa<URN-,T,I4' );
define( 'SECURE_AUTH_SALT', 'E1%1ok->s2 L4_vDV#C[uhp1fJ34?b2)*.we*7P{xAuk`Dzv}?W)JJT;%Z<s !U3' );
define( 'LOGGED_IN_SALT',   '%+[8P<!bHRxO2etHg LpES)&6TU]6y>OhRh=:e>)3z^TJDfhBsskrV.#Z*v$Jz@;' );
define( 'NONCE_SALT',       'oAHz$x1pKWJGhMUxUt(BQQ5`?#bn3OG(Mq75$I>9*#oU@5@G(;LYPb-66Onrqxb^' );

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

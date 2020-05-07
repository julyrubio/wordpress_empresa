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
define( 'DB_NAME', 'bd_conta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

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
define( 'AUTH_KEY',         '6><<ACLCIk]qm>n%8u|F+Md&BHz,^07KD#7xbYwn%$BgR!nagn?w+n.N0k?+]p&>' );
define( 'SECURE_AUTH_KEY',  'fcn(rAx-o^7,(VmT!BjCcg_%y|2b-[|wPX>Sv|rV!n?]v%Dx=gvk3:+,_]xjnA$h' );
define( 'LOGGED_IN_KEY',    '},SOX-V(<!$XO!EI?ciZQAMcJ#,?>([gGCx6hnM4peT0*WGW1Y9]Q)Jog`V9b1Vq' );
define( 'NONCE_KEY',        'Oc1Qdz)rhu[.Yrv2uIE%~hiOx~Kvgq Bti9sa-FYmm`Nyn} |Y5@V*aZnwF,k4`$' );
define( 'AUTH_SALT',        '-`|B5LPkUUXb[qZO8[Wsw[Ek4Rn=Fz(MK>?(t+8qp?`u-d~zcj (B|RNq2t!HNLB' );
define( 'SECURE_AUTH_SALT', 'Wdux0RT7Z]G,+[AIDm)Vm*v84 FDakJ4+AvUkfk;((e/}9agEw;;7r`a$oL+Y)fu' );
define( 'LOGGED_IN_SALT',   'W2+<X_:]A:g I%PI1,|D46}=BS{kjuE)d>th~R5JI,F4NH6ZVwanK/w@im,y!|~l' );
define( 'NONCE_SALT',       '0fWmCZ=WLee$MJY! WNdh;38C1*Jk=:DR<0%&lmz^P(N!:_eDM[F5;P`xVMv)k:l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'utf8_spanish_ci';

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

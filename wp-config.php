<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arch' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VoxCF6+4cB3q`zrn^I)qp~s3U)u*&(NJp<8NEe|.GHe.{~x*<sW]O5[?yZEU7~KG' );
define( 'SECURE_AUTH_KEY',  'o?6j1Q,7|jt9jnb`L^YFF`NmLOPWUXll;]B[j%<(2O)n9cpyK%R3#nS}x:PjYX`*' );
define( 'LOGGED_IN_KEY',    '!|*|i)Af!Ltemf$]M|)r)tQss#jhP8&?/ZZ/{0?Q57fOc:_L.f@uCX)rNcmM<t~=' );
define( 'NONCE_KEY',        'a_Wl&o:*BUjCHJK#+Hdw9C14wy+1K|}rniyOlLf?eE&|VKGDj;|=a>f*w=#NM+ u' );
define( 'AUTH_SALT',        'AU0rc7uRyr0 p!3tp}/>e+w^V{k&Dz(hGc4}H~y:]Ub(kXiH1f7Mq5@+vZ/Z2:>@' );
define( 'SECURE_AUTH_SALT', '<J<h+7PPD}+0sw5LpnVeVe&oz:{|2QXqf,3ua?;d~0$P$R~o+,@|X?y?k-I[#]U`' );
define( 'LOGGED_IN_SALT',   '$-:FkG;-%P84J n@}KWOYZ:]mOLV^7(eLwo:i.*<GSzHC-OU%uBy}]|Gy1[`>DSu' );
define( 'NONCE_SALT',       'EKd!%XnXt>Ef0)mGMf5^w<G5;5}1)Y_c?{ZVf35^1YYEjstbgO_mU0uT^%DMeK([' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

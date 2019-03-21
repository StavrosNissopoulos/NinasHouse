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
define( 'DB_NAME', 'ninas_house' );

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
define( 'AUTH_KEY',         'F873U]boY6R}v;Ge>cLjfh@T^BAnI_Wp#_4vtRku1tY>b6nnQ,SjwH5.71t]c%t7' );
define( 'SECURE_AUTH_KEY',  'q6-yU[}?RWOK.h*[q[TuR/wMG3IX#d:0B~z)&[UERE%u?=j2e&^x5QM,iza@8e)S' );
define( 'LOGGED_IN_KEY',    '4^iw0T(S%g7CV al=JNzOGFce8Z{09zkq]}[veDAfK2q|N?WL4Avnhp6?lmJg cc' );
define( 'NONCE_KEY',        'h>FKQZ!]Q>.eUjq[J{5,zk3QNEWUmaE?_Sqo~*1G.HadOVz&vIXY)Zd|.7W7Ywh1' );
define( 'AUTH_SALT',        'UWCCv=Be(.7EDii:B_2y75~*hg-CE<LP[D}:yT?Kj2P?u@:%m*{>B0OD:#8aY!b2' );
define( 'SECURE_AUTH_SALT', 'L>G[. ,T+W_ *Y3~3uh#?)2D7tSjZ(HYp|??RgWZ1yzM0[sB-#hz$80d5m-MdFeS' );
define( 'LOGGED_IN_SALT',   '!;A{Z5.}1@/d!1^3N{c&1RA6o6@amRFC7xsRNWDjzv5jTC]NM=yj}k,dG6;h4hWp' );
define( 'NONCE_SALT',       ')Gv>+7?NYiNpyF*RGj}xj&Hn8Ts{&*f?yaR(R8sk7-~TNK*h:%|Fc0rt$Ed:-3-T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nina';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

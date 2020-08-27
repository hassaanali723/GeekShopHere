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
define( 'DB_NAME', 'epiz_26033428_w704' );

/** MySQL database username */
define( 'DB_USER', '26033428_3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x7D!p2S10!' );

/** MySQL hostname */
define( 'DB_HOST', 'sql202.byetcluster.com' );

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
define( 'AUTH_KEY',         'q4qkfxhy3icztffgpbojnrogxjpkljujj9laugegenaxzo0e5ctb2t0z8x9inqdu' );
define( 'SECURE_AUTH_KEY',  'crrhu0blwe1qdwxmkh5p7r8rt2laicbtxqbw80b7rkrtdjd8uobv0vj2psj1qnv8' );
define( 'LOGGED_IN_KEY',    '5hdi4enreuwv8tk1becp3cstto3pvqlp6txxyq9ew42fzdhdlkfzfujibsi2jwap' );
define( 'NONCE_KEY',        'n6wjr4esyyszmsxpz02wybukyhnupbfn4u4inin74jxnit5vnoo6jjz4zsraleyu' );
define( 'AUTH_SALT',        'edknwithijjd1skqojx6loze2w6auw4sc7vwqnabp2suuwaezodxppkyxo2bnbix' );
define( 'SECURE_AUTH_SALT', 'hk8zlorhl7rbdqo3snfsn34a6ewtz4sbsikdxabuzjlkwmpmjohikrrxwa6hsgdy' );
define( 'LOGGED_IN_SALT',   'zd1pqjaxwy6nflhkby8sn6bhtryon0itqe3wepi20sf3zhnr9igytmhsthxxpirr' );
define( 'NONCE_SALT',       'ydgxdvnz3sru0p38guftrcysbj1qq6buzqsopxim6ekvnxjiqfjshyycqkrp8bu3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0j_';

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

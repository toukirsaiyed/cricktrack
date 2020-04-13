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
define( 'AUTH_KEY',         '_6[0+,k0iw0Wo6.!N1|JRgrYw8wD^zz5>5~SXFSQ{QDP:/H+dKf*`0jZq8|,##f/' );
define( 'SECURE_AUTH_KEY',  'D8FYD_ofPxqgu! d 7%m@Emm$^-CNbK9H?U4pfT-UA{-?*LqY#zrte*a^j2KZE>a' );
define( 'LOGGED_IN_KEY',    'Ouj3 |UW!nDvs]YLcz&?dQ6*`:J6}aB,^a5?l8m2}?hBkF8*I|y#C_]6loh_LeeK' );
define( 'NONCE_KEY',        'd^sk&`?wSc8/Lx,/;bc~8Fu!^@o.9xSWwPjJnpudgc:L:mPbA^NNZxy+=@?T; KX' );
define( 'AUTH_SALT',        '!X1jKsM` M#_koyac=wMuO`yRO$w>`c1kqF-l f3O+VC9G=4aSSzsul}/.KQ2h^f' );
define( 'SECURE_AUTH_SALT', '#}k6aOzs-.Im3OVHyW.?f<dffhi[uFcC3lunD{/Vmy>iD6GR?T4TFt|5JjkW0=_-' );
define( 'LOGGED_IN_SALT',   'LBnNAhEd*uz^w4V7ME?MnW#5FyXTku77{=j3v2~wwNINMc%2A$TzW&%$E! Ec9>f' );
define( 'NONCE_SALT',       'esqP96V,_92PmZVx;r}Wh51njr(&8+QtJR!%OaH}fWn%+4DuN@%eyRC%mKY Gd_O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cric';

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

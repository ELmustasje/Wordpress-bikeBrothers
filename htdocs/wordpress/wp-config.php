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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@3&@-EQl?u{)KOsk{9AE8IX2o3@1D`j{04!/9BeWBz:UYM8XYD_I-`VAx[)VG)-8' );
define( 'SECURE_AUTH_KEY',  'f5U] fZw[u*/qLO=G%UW9S7rz9]LVFRV3Q-%`ga[&OR*L>HpR}j(AbZo2ixn_0Xj' );
define( 'LOGGED_IN_KEY',    '{x]Z_1kHEf:8;ET(2~/%;t4,j NL+47AWceAtVZOQ!pCW8vqs@$`eie908|@{5sG' );
define( 'NONCE_KEY',        'CpGCWV{(3SfpvjIo.F>r$<zT8?Z^^f/n5>E#jN[q+C_e[aZH=-L1p%CAlc/BJ&o|' );
define( 'AUTH_SALT',        '1%`ZMG>ozRez<n!O?4`[y@<gEy@?c)+[Ar*a@$KURs)n b$g@V~Dw%_aiq+? /CB' );
define( 'SECURE_AUTH_SALT', '9m=T)[rcg-oeI}qPS^8n!uoYS5%`Yf,V@/n6/ROHx}}RlsI-^mF/9Fopnf)cE sK' );
define( 'LOGGED_IN_SALT',   'n<ZU|1$9(B?5rEr=hs8_q/kYS{5q7SqH,FuhJ+t|QA3ue?$Z4LbK71AIaB@D:Pqf' );
define( 'NONCE_SALT',       'XxFsTL?v]P^Y5YV=}R=IUfRx4@B8EX=bu1dy Y@t#~7@ C}tkUsKEi3gT E-2#T$' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cursodesarrollowp' );

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
define( 'AUTH_KEY',         '{CVkD_($Dwu1RWaH:&G98>~UEfb!03X |R~gbhK`^[mZkeBEf?CQy@=Ws]|mGA5^' );
define( 'SECURE_AUTH_KEY',  '-rH sG#:jeh}}#1,6qYrO!-$Bb#(RZj8;VWA!FV(W}Vt o`Uxap+E1?$avzPhOb/' );
define( 'LOGGED_IN_KEY',    'wzblPmOJd7d~z|:Adh<i#X_@>G5QKpU3E,ZJV<}[1&8Gjb:Lq5Upm0}RuzfiC^BL' );
define( 'NONCE_KEY',        'MgPA)rbE9=pz2o1Q9crS]D|V7qQEe{fB+d@-*Jj|?v2{/?!enJA[DqEOI:l+w_k)' );
define( 'AUTH_SALT',        'tp=$~o|tg<DfMqnWS:{UTEdaM{.VUa?[ct}_O?p:0a$I`K%OjCP utXXZ0NV/%dd' );
define( 'SECURE_AUTH_SALT', 'u Vn(&$d%7Sd&@XGYgV>wx28][7W3JmTL!; :WO[TUE0frf&d_t@*Z)D|1KMRs]A' );
define( 'LOGGED_IN_SALT',   '-Ug[GeaE0fm7`WcVv-Cc<~2n7cWt7(_T>JK+wRG}g>Cw.*@k[As}&*Moc;w~% np' );
define( 'NONCE_SALT',       'Y]FU!VU-7X,*d!01bwZr4W2,%7Nz)8W;DC]x4NHg-]15kG.3&M+ct.z!C9Y&UMwi' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

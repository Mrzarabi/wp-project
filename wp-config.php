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
define( 'DB_NAME', 'learn-wp' );

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
define( 'AUTH_KEY',         'O+Jwt,_M0dVRQ$%qzF)7W3i`oRMCe>SM}QOtcg*m1a%+$L2CCWVo|YPu>p8G(44+' );
define( 'SECURE_AUTH_KEY',  'WiMq.hfG9x9-w3ar)x0)T56oG#(e&FzX$*HL4z(&:}hu;1+tE$JSes))X?}X^^E<' );
define( 'LOGGED_IN_KEY',    'd9aislF-U r2y8eA _ESq*}L%@>;V1nH~zO_#/3u@Z)EOTQlKcE~VCH;TBT/g{V:' );
define( 'NONCE_KEY',        'n:OHtP36O=kKs&^m2:a~ KCNTf&rtIU%w|J8k{VlCo50hX,<e**3Sh/Y56Q6o]tf' );
define( 'AUTH_SALT',        '$|wUl1|#,I<6w2LQ4a&c(dT|q]m97--0|IJ%}a(W)[3mJoereS~A<.l11$,[A&y8' );
define( 'SECURE_AUTH_SALT', 'z`<~0Dlcym)%kl?V]S8T;V@%K16h.:zKSKMd?Y{Jyic<%H{T3HBSe?F7u/;mGFRh' );
define( 'LOGGED_IN_SALT',   'lj1ZqStPx LFRoDbu,~XU&hX]~ON_Tcn$ZF$DxT4<iGh{_KRQ|V|[d+6QGKBJBiR' );
define( 'NONCE_SALT',       'ZlYqL93-vg|Kf_9A$cTG$Rck#Q*G.I+6`WNPV`AwJs;{wLsK=){.GrphEa]sqxVz' );

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

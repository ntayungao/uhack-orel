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
define( 'DB_NAME', 'orel' );

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
define( 'AUTH_KEY',         '!32{jV4]<ccoIj0NHIugwKDHUC2~8_{0z>-Z[sYxz@;4e>aYfHt@E/wfh}=v<fF-' );
define( 'SECURE_AUTH_KEY',  ':j@4oYg9b:=)0&@Q>ZRW# q(6phf*X=(L7&LMR5s+,y5xn80~XtJh$5gJ/^Nz.&0' );
define( 'LOGGED_IN_KEY',    '^%9rF(ZRP.s3{0~3LV7mb|6n6@|sdU5ssD$6#5F1Mst1Op(XOTA_R2+Y)v!nMAog' );
define( 'NONCE_KEY',        '|PNAH2mh%X,ooz),57uF*b$bmv=FY@G=>@3porVWJj-CA|V3E7%n{xq-N<SXNi9?' );
define( 'AUTH_SALT',        'ukO)=b;uH4i4id3[Fm[JOn|1ubT4AtT!,>dXf[@b$sQipN+Td**%!}B!O#@{S1;#' );
define( 'SECURE_AUTH_SALT', 'w{RC$@/hhI<xi>m<v0Oark,OpE4V94[8005k1ng:RQzWD8E$W5oFM2`y^b} Rml]' );
define( 'LOGGED_IN_SALT',   'T:gv]=#iTDjr9fFx4Yjg{R+S>Gf6f#kxC`3|NLsT* !|P@>CJ8z:})&H6DzGXX{G' );
define( 'NONCE_SALT',       'O[NfMI}9ru$]ancD<n> U+VDj>^$TP!2Q&+]OxKD~9Zv)MnZm3,9_HFv:.~=7DH(' );

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

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
define( 'DB_NAME', 'online_quiz' );

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
define( 'AUTH_KEY',         ']I&t:nbC=n:<Vu{?F`+Ao{jiQl^cgd*f)80711Ni_cXMzIZkNWU0 01HUg!qq`D#' );
define( 'SECURE_AUTH_KEY',  '+(_35n$#]RC&03<6mO+>n D+SV}CK_ M FG>EcQBSKY`7NK%vaM/%mI-h[6uISPO' );
define( 'LOGGED_IN_KEY',    ']uejN@f94)gpP5U-dCC<3a}?X*R!]foUcpwoki<QWqKNRr?=@DE$;3cGzQK!.f0G' );
define( 'NONCE_KEY',        'aVrPD-AvsDo&@Hb{g!|O8@}h[N1W.K1>7N.,c9E|}B1?n5B5]$q%g67=tB<|h3w;' );
define( 'AUTH_SALT',        'aiL%uL:o3smo>RuuO_cj4p7*jRCM*&4w$V3F[?InIP9xcX{GW)#I]K[%nWcs5!tx' );
define( 'SECURE_AUTH_SALT', 'n7+;x?3$tNWRj`R.j{Pa_<N3 o<Is{Izt2ERUEeP//AZZ~Ft({UCv?iom1/7NygI' );
define( 'LOGGED_IN_SALT',   's PGRcF{KO}G4YJ=)lnyWg!Ktj?tC]+tTwmiSjX{r8LN7=DJL.)PYKF9A3^J3.#j' );
define( 'NONCE_SALT',       ':RV:K%cJP:Lm5)@^o9~5-fR2T?C`W _3P4mK#2;CCjF}c)B|:fK*[^zlUb}WzJh,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WPQuiz_';

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

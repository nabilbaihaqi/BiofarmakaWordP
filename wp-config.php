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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+WZk9ebF8Ru ^#IIo?&O~E*i.LDWJg.-@{0Z:g<>FfOGoD[X$SDA0f5{v%5OK!!]');
define('SECURE_AUTH_KEY',  'HQ:fRKtdnfUK&>]3dUr~?4}qVU2Hm$UB5}FRJt|<L:)aal]90H M,c;vR{Qm@ D{');
define('LOGGED_IN_KEY',    'Jj@,qR;A$l 4<%WLA/?,0a,yLHob#L361]rR{a8rHdnE2~vJr:Q!b+p{:J%Yj0mm');
define('NONCE_KEY',        ')j3L{=XQv$@eGWi>n!{wu|S6ZV^8{#p&@q2mXv*Gg4/Pc(VKeDu&_|SQ99K[lw~Q');
define('AUTH_SALT',        '{.M(Ak;?wC8;G6^2!_8[D#mG)Wc6yAy%FY0[xQaeWCxO]@u#{P/=(R,&^XmoU=?*');
define('SECURE_AUTH_SALT', 'uPbD+Ky+u$`r(.Ty]Pv}|Ggq@8.0<M3Zah.WHN2hmY33G1yTBh^WuB0mO7iGleP ');
define('LOGGED_IN_SALT',   'KD%HKI 1oTc-,jmLtd/EE%* i9!D(|mDk82pIty.y|zFs%p]Lu4Qj$9AGhn]eNu!');
define('NONCE_SALT',       '8xx6b}(z4}x8ZKqTa#^z|n{{BX<SV3TBfPr1JQ7DPD5;)9+DF!qxR^^FW(OT{+0y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

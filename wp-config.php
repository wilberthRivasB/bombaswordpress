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
define('DB_NAME', 'bombas_db');

/** MySQL database username */
define('DB_USER', 'bombasusr');

/** MySQL database password */
define('DB_PASSWORD', 'HBqaBNfpM2N7hOLc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')G 8l`(-=w~U8+K4L]7dc9?m)Yperb:9@{k~>K.vTfkj6`Dq2vGwEmHA/C g4$Zs');
define('SECURE_AUTH_KEY',  '%9)s!r7f|a(ziWum?-S`24[tj/>l1&k!c kNE]tk|0<,f_:sI6+@1R:Ear+rDMmQ');
define('LOGGED_IN_KEY',    'pJ]*/Yfi7oF&i.t_yZ.ejDHvnz}8N]lReLy1LzR+tW$EHy+^(RX0T%f>&.Tvcln1');
define('NONCE_KEY',        'BapZL2!IpHuKj-!=&EW.ZTyq<R1:_GQAd/X([Mt:vQQU./c-^&bA^MgU{kPm |qf');
define('AUTH_SALT',        '8z1OxT/tlc|g=^##T8=ofqytg>oEa|v&%^GqwD>p;|N/S+Vq7u2NaAqeX.w|0&K-');
define('SECURE_AUTH_SALT', '1vW&580)x+dvhz5v0Fyt7tVExCrPWy=4bTXys`)YZ)nS/kn7&W+)VjxI!$}+FtKR');
define('LOGGED_IN_SALT',   'V,LB+ dgnkHB:/EYrls-IH(oD-=ygu3c&dMGk1_SCIF+[/IPZ)o01j/N-F` ]XK.');
define('NONCE_SALT',       '@8ET:CoP1u#?f:TQf!_jm*/xT^l9OFxw7$h`=GU`-N~09jAw8UE>[$<Lpv Ec]y9');

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

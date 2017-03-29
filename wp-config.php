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
define('DB_NAME', 'u658278663_xeneq');

/** MySQL database username */
define('DB_USER', 'u658278663_rusus');

/** MySQL database password */
define('DB_PASSWORD', 'GuRyTaqePy');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'wgDeSqWV3LcO5GZ0liZKWRL9VTRNceXh6R00cQVa19zmI5tuABnToqlazhnqVuNf');
define('SECURE_AUTH_KEY',  'gQWnIOabkGAgyFfGvln6eIBZTlxgjIQR1vfrnclktbeCqG5u1ngAGqrUuduoiGjf');
define('LOGGED_IN_KEY',    '8jSS2Anm8uwDmC7UGhJHZXVyACoiT9RTNXEqfd2lhMmBD7yfXW3GqncUFiTHYpHI');
define('NONCE_KEY',        '4lj9anY99hBrjbRdMiiRAB5gpSPusGxqGzJMB3Um3zzobrzzTz1WHQo25O9QxRJm');
define('AUTH_SALT',        'p59DaBWdgwAlHec3KPllo2kb99m1b6Q8wSxxgc474SGzWNmUasGfTw6FitM89RBZ');
define('SECURE_AUTH_SALT', 'cRZUvA3YKu5yEUCvTYSycylJLF15y2nkh2Kbl51WdelbJoPfGruD1uA6nJJReM8t');
define('LOGGED_IN_SALT',   '54LBDqpKUXhvlLRTirEHWgWyZILMwBVODZZy8aZ9bKl7RyPYe3DNSiekQk7Ra0GB');
define('NONCE_SALT',       'SvurnNs0qeEpshTsRRutC0sQoWRRW4eHPdbuj9IBetRlzZTSyyt6P5QTwlYimmYF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'utoe_';

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

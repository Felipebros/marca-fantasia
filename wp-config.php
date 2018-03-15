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
define('DB_NAME', 'marca-fantasia');

/** MySQL database username */
define('DB_USER', 'marca-fantasia');

/** MySQL database password */
define('DB_PASSWORD', 'marca-fantasia');

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
define('AUTH_KEY',         '(<OJi6L=HsB MDMcoiQ6p[PXfHg}n|2)IO!XDqD/&^+~KecnOXC%mZM5vfS>#AXA');
define('SECURE_AUTH_KEY',  'mEDl{L|2]7&T.)RGO(A7PUdwJ9~[p4%vVJDu?UVwDYgKl1&%Gz{ DF X+sRh~In?');
define('LOGGED_IN_KEY',    'o{j$LNm*PhR8yT+u-F1[60>>j5K2fM>ZfCUw,k6etCPTe^Hg^z(*92aRqFD(,^7(');
define('NONCE_KEY',        '#57* hX_=?|RV|-.G~9h^&]r}]M0Xl$/(9i3vRA9g4.&<@q<3xR{LOyOn*j(@]Nj');
define('AUTH_SALT',        '.x(2mA|zZ9=56LR[yRj5a&i-PQh%n{cskiL<=.PDi%JLz0NS=S:>5%zqgcRMBOl9');
define('SECURE_AUTH_SALT', '$k&WHDj;/)<O#}(5h,!i5>2Q J-X>[2DQ@FwkJs5~q`4w9Ugcm4wQry&DvQ;B4aB');
define('LOGGED_IN_SALT',   '@>gh|3J1<?C1+al@<RjCMA& {Ex]q`]oN@^IE$^N}8`);T-6< Te>O9Z8E2RQyT|');
define('NONCE_SALT',       '1?kMToA$Qo*Ey-#(B+q#/I-2]4m-d[/zO=F&vny}_x8omuSL274m+8.KPu*y,kDV');

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

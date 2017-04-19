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
define('DB_NAME', 'showcase');

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
define('AUTH_KEY',         'S4sp03b</Ilhk`8_]FM|_d8bz|w2ly6dX=^l`+{q!J%C.(J@NB^;s!*Z+?#.K-`(');
define('SECURE_AUTH_KEY',  'd<C8~`/B6EM4k$z:25THGe*t}J0x6i@p)KuNqR?xQEs_emN=i)Lc1!-3:{a%j}8N');
define('LOGGED_IN_KEY',    '!( a#dE3Kk~nk5pp+5xPj;1FUM~VHn&j#z~v+KYAC0Gh/[07){*fEu{Zp@j{TI{r');
define('NONCE_KEY',        'KjIO$d5-)l11ixMnyO2mI1.q22UR Y*P85?@]m#%*IR@sz@,5efc},{1mxVbV8Yv');
define('AUTH_SALT',        '|s~%}PSa{0}Ql@Sv8%n~/5)+upOIJi tggw=}>-o3$bg{ kUNvUOmnN`=m;4U6$|');
define('SECURE_AUTH_SALT', 'W{p7JUPJY$oJt08Q=)$.cAa95)lb[Qq`855Nx>4[wn;->Ue9ad Lq$j+ GqCED< ');
define('LOGGED_IN_SALT',   '@<RG>wHiDO.,|5E!0.$6*yKyu@tY0JH] *zd]iDF$~[I?B@I`lxHbvPZ8,se%p~7');
define('NONCE_SALT',       '|FJ!kt[]?D@7nX4qRm%Lr^w-*qk2>pZ3}e!{++jPkdziUmq;G3/i?1;`BPfY{NL8');

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

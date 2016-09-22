<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'git_testing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'A^]AsIai9zpTPoi|6w0/jZ9V-Bz}_{)/EVzo9Zj9TgqZGS|ep(0!7^Pc[d:/5=}r');
define('SECURE_AUTH_KEY',  'G893I|r*}[+R6efek?y)r*nURWabfyiU[8CsuE,=FhJTaL,rZpP`ZwHFpo1r}`FU');
define('LOGGED_IN_KEY',    'lEd,Gz>3{=}_@A,Ygup38m%$/C9lJ_lAiLHI8Jn[,l^02]f5;PiJ<WE@b|U.f0^Q');
define('NONCE_KEY',        'CW!z+W6i<(|:Oxg%Lc4P#Jc=7>1eG_N4oT?4ZEv9kgwHE3-Zoq4/7gsyj%lnax V');
define('AUTH_SALT',        '`=GQ`#CHXJf#T3B>Niu&}t<H[m(F`|XooA0l[ur,Z|xJ+uA{1YW]Q;x|il7w~5=,');
define('SECURE_AUTH_SALT', 'P^cVVwV;[Q[mU5v{ _%v:[a]xt^jd]O>7J0~;-RC,KTKI(xqQm5Fdeyce$T;%;UU');
define('LOGGED_IN_SALT',   '_mq0#6ok}!!K3j*(kd@Mzas?EaNw[5&?Qpzc0Kj5/.FoP4*5uL*!HIH5qt-{h|-q');
define('NONCE_SALT',       'A)S=j6]<VO#`j]P[MT.dCb.vm5=->UM05%;y..@]xjOcTr>H{N5JmipLmW<*@AXv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gt_';

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

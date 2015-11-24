<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('WP_REDIS_HOST', 'cwpress.iyoqcs.0001.usw2.cache.amazonaws.com');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cjxdv6y4ypiz.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'HK`7rUB]|jt!mN#0XAz73os{F$*>>E:L40MHapQ]F3N}O1 D<DbGg;8-y`Tm$qB ');
define('SECURE_AUTH_KEY',  'x@+TV|&ALpcVl}sP<Q_gtr5m0(/@Gi|NU-W<Or)@Px~i${%4SxOLH4y1R.w@RY$4');
define('LOGGED_IN_KEY',    'z3ia@w :l97]p+]SC[MoL@#sH-<:7/LPInpA$crbWg=%q&1Y^)Fd#iDD ~}Jf;/Y');
define('NONCE_KEY',        '+UVZjx}#dc8fqK 61$fp|$.yAr[P0+lDv^p_oAk*C-Z2`uvD{znU,WFO{=vaTU>3');
define('AUTH_SALT',        'G]KjgrG)V LJzic^K#lIInKNE=GP)>,9 Mc=$AyoYT(|,Vq@axI]w%UMz2Wj!/J9');
define('SECURE_AUTH_SALT', 'c=|Uh^U^0~kMHHhXB6$kQs8;>,D+e;r|&PxY9<Qs3b`5Pn??X. cb9u~UJmt+OK[');
define('LOGGED_IN_SALT',   '6ZbxxKeSy-+#1[Jx~Va#^8DRU/7k`{<g3|W<)OWd3Fs?n+F}:C,y+{etT5:TKNzE');
define('NONCE_SALT',       '(c.IwYVqTTN+HWTS=CC;uK~/=.pSXYZF|#x^bN%qWZt]Q<6V)+(Dcnx.5F8{1A$:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



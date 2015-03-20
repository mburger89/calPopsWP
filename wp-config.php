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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'NM+3GESI&x#uAd`1b[#:FyF#XEHQ5jYF3+RBwM-J|FS(^uYMR=9Ea$Wb64RtYWC:');
define('SECURE_AUTH_KEY',  '2)tr/$ZCD@/|-MY4</?B`J+|xxu;nu^skTaRAwmg@UZk|6aUOq-(T^snU-#$4LIA');
define('LOGGED_IN_KEY',    '4CBk`<:R_FR_f[k<} XF1N`)w@qsDK;~I8 qM%AM,xY%!-bo+eR?,KmiIZmL`Luh');
define('NONCE_KEY',        '>=C[fr-vdQK`Ia(_OT64$rUNW0gu=Dv~u|mJXX|*iF$@Uh}a}N$w}A<-o=>e!b9x');
define('AUTH_SALT',        '/UXPl%e-T4S+c^6q;X/p%5kM+dT9DMg #Hv2i3|e:^2&GMuDfR0`}`aV{&tr(&r(');
define('SECURE_AUTH_SALT', '_;o=2p-k=;_xjENT$.-%a;X0d;aTzrm/d:&.ZDM.:@{u{=/DD9*S(M.:qf95%/p|');
define('LOGGED_IN_SALT',   '/L#?@@J93*oZXGHEl.lO$:^(-N*S(~`c#Bl3V1TUQaFdTNV>*d^wF=e{!+*i48- ');
define('NONCE_SALT',       'P>(bk/-QiNlQ+HAbx4k-#)UP$8$Db5tYSU~r@hO2Mmjr*4byi;*op6@w.uGx=Ti?');

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

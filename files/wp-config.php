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
define( 'DB_NAME', 'EL_nMTw4Lmc' );

/** MySQL database username */
define( 'DB_USER', 'el_uxdevelopment' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x7IErgKyX' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-customersdb-273js6.endpoints.svc.cluster.local' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Ikq>~SlY=.{eeufdW^~^==5#if_>sz?m>D$TN(;I$TCGfk[Z2yz<qo;g1JL?2/oJ' );
define( 'SECURE_AUTH_KEY',   '-CMEBOxD,&Yy/AB ^OQSWPW~(wH9llen1Z?Xid#R*zb;(!t?-ib-C2fNVGyaT:W2' );
define( 'LOGGED_IN_KEY',     'UtlTzmE;7yf&cP>Ag;+N`g;&S@CoGs!6G^IY![JatN?t:rq:xWqp,W`ajx#eLM7=' );
define( 'NONCE_KEY',         'Sd?E,wd1ie_uDjiN3H+9+gP<d>X8G#lh0:29kw}`)w#:jk@a_0s0vMorL!9CpW2c' );
define( 'AUTH_SALT',         's,}nryVO$,Wbb#Kq7!0I5 >Zm^QAGr]J]K94M`(:BNR]qvq)Z:eSa2n6CD&.,s{)' );
define( 'SECURE_AUTH_SALT',  'E|}4e}B9ZXgTI2Jt>Jh62B,^*0j_mfPD`)QgS6vIBEXbB{V9FDi~)OQOQ`L86BU0' );
define( 'LOGGED_IN_SALT',    'vHroFm|648{kfUtTTC0cyWD`c9>yM`jW4,12hOo&Y%^mQYDG;e1.|@cDC>i+lA<K' );
define( 'NONCE_SALT',        'H_.VSUO:(KCCHlM@d[E!r`g@[WjYCK6_>Mb,EiAmwz2Oa<E@f`]*=M9Q38=g2$c[' );
define( 'WP_CACHE_KEY_SALT', 'e2+P,1>:}Vs$~jN:5Z3TQF48 iu}m!|UTP|y:qzB@--^k#u:-:Z^32=/;)J4%_.7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eWKHd_';


        define('WP_HOME', "https://uxdevelopment.elementor.cloud/");
        define('WP_SITEURL', "https://uxdevelopment.elementor.cloud/");
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
                $_SERVER['HTTPS'] = 'on';
        }


define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_MEMORY_LIMIT', '512M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

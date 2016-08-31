<?php

define('FS_METHOD', 'direct');



// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db645480694');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'dJz--Q<N7{mG$yXu{@/d8)osMv}![]uoz2jg+r@q;AS%z|}ts23w-/6/}^/h  ;+');
define('SECURE_AUTH_KEY',  'T4KPws|(rNy0k#y_Lbq1CSyOV:ed=Cw$&^a(_m8-sEg;-T!6w33{IM3Kf#R08-|A');
define('LOGGED_IN_KEY',    'H8xK`o-Z%fNDTOz~CA9c5SynsKh+ll-3TIO6W%mZqg;-Ns!|9N>%BN3_J_@qWK4K');
define('NONCE_KEY',        'Z{x,7h-~sEAz-|c8b!ZF7#/fdNS]S1zLMpv6ESKg1Cik1-g39Y4yms$9]cVoPfly');
define('AUTH_SALT',        'l7i~[YRgddbrU_8Qu.HJ18G+W9UOueX89[|.M3uIB04`b:*s-{LWmWsmXEd7IeX.');
define('SECURE_AUTH_SALT', 'biD<hq0*tc0YWinI++ZEWm^2z|_*vP-id`?GcIW>dBU|qL0ToJD;0&]q8zA4AE4D');
define('LOGGED_IN_SALT',   '_%)~QF-J3uCk;dG6f,T|2tYLeF/%kfJ[Y&OyYS5UU7,@igw9S0hhk^ZoD-W*t&^U');
define('NONCE_SALT',       '9OUZ}*e->s9WD~3b(8RZ<GGgk<q]YBe:`gyt@@o,QxM{& i>WFs2)Mn5V5,p,(-V');


$table_prefix = 'UYxmfBuV';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
# Database Configuration
define( 'DB_NAME', 'wp_ivycatdev' );
define( 'DB_USER', 'ivycatdev' );
define( 'DB_PASSWORD', 'DQT7JntRgJnZSfyVW1jN' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '8vLD$u(r S)f(feHrQ@FR86f-T8-&9,|0bz9Jl{}$7!4|9tnS`S-!$X/n0U*;HJH');
define('SECURE_AUTH_KEY',  '&(zK?hz(Y|Jx9y_lTUp(1en<uP5jCIAk_DAS2<A|h,y!O(H%995*h=.2h Bv,myu');
define('LOGGED_IN_KEY',    'pH,j@iQ.]:$Yh1I%:o+SgC@$7-Ji=qWXQ=?6:nB-y=D/IGMfyMK`aV}[1DNuR=~)');
define('NONCE_KEY',        '7&<W+og%Gjs==x-)}asgdX7?yA~O0g(R?om=0aDX]{K8r14R_P*lct-5qXw}1j7W');
define('AUTH_SALT',        'yg=00-vR*5TOl<T+*t8AC]46:/Tq8Hw*V|Lq_q:V,Y5kMXs>; yA!/ ++&|~}1(d');
define('SECURE_AUTH_SALT', '34PVbt*}<[ <Vyz(Nryq#T$3q5G+UEhMEU,:.<Z-@4DX7f* gpg>`=J$4$IhCEG~');
define('LOGGED_IN_SALT',   '7,_v+ck1,7<H`S6O{HQLC5znxO Qcu <ZWe+%c$0,sf*0A+b}z9/P_$^wg32k6H1');
define('NONCE_SALT',       ':-NFSY<CE|h7B|l*9e@U]OBE3Z||gQn$s,J!ddL5ssE,&sbpE2`VpO)b5_<<:}HZ');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'ivycatdev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', '385455da2da1eea1f82c4e280c71ea2f0085b20b' );

define( 'WPE_CLUSTER_ID', '120005' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'ivycatdev.wpengine.com', 1 => 'ivycatdev.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120005', );

$wpe_special_ips=array ( 0 => '104.154.246.157', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

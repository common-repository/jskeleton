<?php
/*
Plugin Name: JSkeleton
Description: Skeleton adds a shimmer animation while images are loading in your website .
Version: 1.5.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: JSkeleton
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
    die();
}

define( 'JSK_URL', trailingslashit(plugin_dir_url( __FILE__ )));
define( 'JSK_DIR', trailingslashit(plugin_dir_path( __FILE__ )));
define('JSK_INC',trailingslashit(JSK_DIR.'inc'));
define('JSK_CSS',trailingslashit(JSK_URL.'assets'.'/'.'css'));
define('JSK_CSS_DIR',trailingslashit(JSK_DIR.'assets'.'/'.'css'));
define('JSK_INC_URL',trailingslashit(JSK_URL.'inc'));
define('JSK_DOMAIN','JSkeleton');
define( 'JSK_VERSION', '1.5.0' );
define( 'JSK_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'JSK_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

load_plugin_textdomain( JSK_DOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );


if (is_admin() && !wp_doing_ajax()){
}else{
    include JSK_INC.'jsk_frontend.php';
}



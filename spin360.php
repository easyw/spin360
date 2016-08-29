<?php
/*
Plugin Name: Spin360
Plugin URI:  https://github.com/easyw/spin360
Description: An experimental plugin to add 360 rotation support in wpV
ersion:      1.0
Author:      Maurice
Author URI:  https://github.com/easyw/spin360
License:     GPL2License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// register spin360 scripts and styles
function spin360_enqueue_scripts() {
    // wp_register_script( 'spritespin-js', plugins_url('spritespin.min.js', __FILE__), array('jquery'));
    wp_enqueue_script( 'spritespin.min.js', plugins_url('scripts/spritespin.min.js', __FILE__), array('jquery') );
    //wp_enqueue_script( 'spritespin.min.js','/wp-content/cstm/spritespin.min.js' );    
    }
    
add_action( 'wp_enqueue_scripts', 'spin360_enqueue_scripts' );

?>
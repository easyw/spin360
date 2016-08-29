<?php
/*
Plugin Name: Spin360
Plugin URI:  https://github.com/easyw/spin360
Description: An experimental plugin to add 360 rotation support in wp
Version:     1.0
Author:      Maurice
Author URI:  https://github.com/easyw/spin360
License:     GPL2License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// register spin360 scripts and styles
function spin360_enqueue_scripts() {
    // wp_register_script( 'spritespin-js', plugins_url('spritespin.min.js', __FILE__), array('jquery'));
    wp_enqueue_script( 'spritespin.min.js', plugins_url('scripts/spritespin.min.js', __FILE__), array('jquery') );
    wp_enqueue_style( 'spin360-style', plugins_url('spin360.css', __FILE__) );
    wp_enqueue_script( 'spin360.js', plugins_url('spin360.js', __FILE__) );
    //wp_enqueue_script( 'spritespin.min.js','/wp-content/cstm/spritespin.min.js' );    
    }
    
add_action( 'wp_enqueue_scripts', 'spin360_enqueue_scripts' );

/*
 * spin360 shortcode generator.
 */
function spin360_shortcode($atts) {
    $spin360_atts = shortcode_atts( array(
        'imgs_folder' => '/wp-content/uploads/images/spin360/demoSpin360/',
        'aspect_ratio' => '1.3307',
        'imgs_nbr' => '200'
    ), $atts, 'spin360' );

    $folder = $spin360_atts[ 'imgs_folder' ];
    $folder_url = wp_get_attachment_url( $folder );
    $imgs_nbr = $spin360_atts[ 'imgs_nbr' ];
    $aspectRatio_attr = "aspectRatio='".$spin360_atts[ 'aspect_ratio' ]."'";
    
    return "<ul id='commands' ><a href='#' class='button js-reverse' ><br>Play</a></ul>
            <div class='spritespin' ></div>"
    ;}

// register shortcode
function spin360_register_shortcode() {
    add_shortcode( 'spin360', 'spin360_shortcode' );
}

add_action( 'init', 'spin360_register_shortcode' );


?>
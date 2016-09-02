<?php
/*
Plugin Name: Spin360
Plugin URI:  https://easyw.github.io/spin360/
Description: A new plugin to add 360 rotation support in wp
Version:     1.0.5
Author:      Maurice
Author URI:  https://github.com/easyw/spin360
License:     GPL2License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define('SPIN360_PLUGIN_MAIN', __FILE__);
define('SPIN360_PLUGIN_PATH', plugin_dir_path(__FILE__));

// define spin360 folder in uploads
function spin360_upl_folder() {
    $wp_uploads = wp_upload_dir();
    $products_path = $wp_uploads['basedir'].'/spin360show/';
    define('SPIN360_UPLOAD_PATH', $products_path);
    $products_url = $wp_uploads['baseurl'].'/spin360show/';
    define('SPIN360_UPLOAD_URL', $products_url);
    }

    
// register spin360 scripts and styles
function spin360_enqueue_scripts() {
    // wp_register_script( 'spritespin-js', plugins_url('spritespin.min.js', __FILE__), array('jquery'));
    wp_enqueue_script( 'spritespin.min.js', plugins_url('scripts/spritespin.min.js', __FILE__), array('jquery') );
    wp_enqueue_style( 'spin360-style', plugins_url('spin360.css', __FILE__) );
    // wp_enqueue_script( 'spin360.js', plugins_url('spin360.js', __FILE__) );
    }

add_action( 'wp_enqueue_scripts', 'spin360_enqueue_scripts' );
spin360_upl_folder();

//in wordpress admin area
if (is_admin())
    {
        include_once SPIN360_PLUGIN_PATH.'spin360act.php';
        new spin360activation();
    }


/*
 * spin360 shortcode generator.
 */
function spin360_shortcode($atts) {
    $spin360_atts = shortcode_atts( array(
        'canvas_name' => 'first_canvas',
        'imgs_folder' => 'spin360demo/',
        'aspect_ratio' => '1.3333',
        'imgs_nbr' => '200'
    ), $atts, 'spin360' );

    $canvas_name = $spin360_atts[ 'canvas_name' ];
    $folder = "imgs_folder='".$spin360_atts[ 'imgs_folder' ]."'";
    // $wp_uploads = wp_upload_dir();
    // $folder_url = $wp_uploads['baseurl'].'/spin360show/'.$spin360_atts[ 'imgs_folder' ];
    // $folder_path = SPIN360_UPLOAD_PATH.$spin360_atts[ 'imgs_folder' ];
    $folder_url = SPIN360_UPLOAD_URL.$spin360_atts[ 'imgs_folder' ];
    $imgs_nbr = $spin360_atts[ 'imgs_nbr' ];
    $aspectRatio_attr = "aspectRatio='".$spin360_atts[ 'aspect_ratio' ]."'";
    $height = 400/$spin360_atts[ 'aspect_ratio' ];
    $purl=plugins_url();
    $bkg_loader=$purl."/spin360/ajax-loader.gif";

    return "<ul id='commands'><li id='$canvas_name' class='buttonSS js-reverse'><br>Play</li></ul>
    <div class='$canvas_name' style='background-image: url(\"$bkg_loader\");background-position: 50% 20%;background-repeat: no-repeat;position:relative;'>
    </div><a href='#'></a>
    <script type='text/javascript'>// <![CDATA[
       jQuery(function(){ 
           jQuery('a.js-fullscreen').click(function(e){ e.preventDefault();jQuery('.$canvas_name').spritespin('api').requestFullscreen(); });
           jQuery('a.js-start').click(function(e){ e.preventDefault();jQuery('.$canvas_name').spritespin('api').startAnimation(); });
           jQuery('a.js-stop').click(function(e){ e.preventDefault(); jQuery('.$canvas_name').spritespin('api').stopAnimation(); });
           jQuery('#$canvas_name').click(function(e){ console.log('$canvas_name'); 
              jQuery('.$canvas_name').spritespin('api').data.reverse=!jQuery('.$canvas_name').spritespin('api').data.reverse;jQuery('.$canvas_name').spritespin('api').startAnimation(); });
           var pathVar = '$folder_url';
           pathVar=pathVar+'{frame}.jpg';
           // console.log(pathVar);
           // console.log('$bkg_loader');
           jQuery('.$canvas_name').spritespin({width: 400, height: '$height', source: SpriteSpin.sourceArray(pathVar, { frame: [1,'$imgs_nbr'], digits: 4 }), sense: -1, responsive: true });
           })
    // ]]></script>"
;}

// register shortcode
function spin360_register_shortcode() {
    add_shortcode( 'spin360', 'spin360_shortcode' );
}

add_action( 'init', 'spin360_register_shortcode' );

?>
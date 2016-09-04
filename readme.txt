=== Spin 360 deg and 3D Model Viewer ===
Contributors: maui2wp
Donate link: 
Tags: 360 deg viewer, 3d viewer, 3D model viewer, 3d model display, 3D Model Viewer WordPress, 360, 360 product view, 360 product viewer, 3d product viewer, 3d, 360 product rotation
Requires at least: 4.0.1
Tested up to: 4.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin to add 360 rotation support and 3d view animation in wordpress using shortcodes;
Responsive Web Design
3D model Rotation, 360 deg view.

== Description ==

A featured plugin to add 360 deg and 3d animate view in wordpress using shortcodes
Responsive Web Design
Displays 3D model on wordPress page, post, or custom page
3D model Rotation enabled
Based on a sequence of images to animate and display the product
Images can be generated with Blender animation

####Demo####
[Live Demo 3D](https://easyw.github.io/spin360/ "3d viewer plugin")

Download Wordpress Plugin page: https://easyw.github.io/spin360/; 

GitHub Wordpress Plugin: https://github.com/easyw/spin360; 

jQuery plugin page: http://spritespin.ginie.eu/;

####Plugin Features####
* 3D model Display
* 360 deg and 3D view enabled
* ShortCodes System
* Very Lightweight

== Installation ==

1. Upload the plugin files to the `your_wordpress_plugins_dir/spin360` directory, or Install as a regular WordPress plugin
2. Go your Plugins page via WordPress Dashboard and activate it
3. Use these shortcodes to post or page

[spin360 canvas_name="s1" imgs_folder="my_product/" imgs_nbr=100 aspect_ratio=1.33333]

   `[spin360 canvas_name="s1" imgs_folder="spin360demo/" imgs_nbr=200 aspect_ratio=1.33333]`
   
   `[spin360 canvas_name="s1" imgs_folder="spin360demo/" imgs_nbr=100]`
   
   `[spin360 canvas_name="s1" imgs_folder="spin360demo/"]`
   
   defaults: canvas_name="s1" imgs_nbr=200, aspect_ratio=1.33333
   
4. Use `jpg` image files to display your model as a dynamic sequence; 

   Name your images as following: `0001.jpg, 0002.jpg, ..., 200.jpg`
   
   for 3D models the image sequence can be generated using Blender
   
   upload your project image files in a `your_wordpress_uploads_dir/spin360show` subfolder 
   
   (i.e "your_wordpress_uploads_dir/spin360show/my_product/") via a standard FTP access

5. Modify the css style to adapt some features
   * change `spin360.css` to change some style aspect


Shortcode Parameters:

* canvas_name = canvas name needed in case of multiple shows on the same page
* imgs_folder = folder of image sequence project; i.e.: "spin360demo/" or "my_product"
* imgs_nbr = any number > 1; i.e.: 200 image screenshots

  Note: name your images as following: `0001.jpg, 0002.jpg, ..., 200.jpg`
* aspect_ratio = any number i.e.: 1.3333  for 4/3 aspect ratio
* change `spin360.css` to adapt some style aspect (as loading image or button font color)


== Frequently asked questions ==
Display 3D model on wordPress page, post, or custom page, 3D model Rotation, 360 view enabled, based on image sequences.

== Upgrade Notice ==

= 1.0 =
Basic version, still under development
= 1.0.1 =
Basic version updated, still under development
= 1.0.2 =
Basic version with shortcode, still under development
= 1.0.3 =
Basic version with shortcode and multiple shows, still under development
= 1.0.4 =
Basic version with shortcode and multiple shows, with relative upload folder path
= 1.0.5 =
Basic version with shortcode and multiple shows, relative upload folder path and Play button
= 1.0.6 =
Basic version with shortcode and multiple shows, relative upload folder path and Play button
with natural sense of interaction

== Screenshots ==

1. Screenshot-1.png
2. Screenshot-2.png


== Changelog ==

= 1.0 =
* Initial release
= 1.0.1 =
* Basic version updated
= 1.0.2 =
* Basic version with shortcode
= 1.0.3 =
Basic version with shortcode and multiple shows
= 1.0.4 =
Basic version with shortcode, multiple shows and relative upload folder path
= 1.0.5 =
Basic version with shortcode and multiple shows, relative upload folder path and Play button
= 1.0.6 =
Basic version with shortcode and multiple shows, relative upload folder path and Play button
with natural sense of interaction

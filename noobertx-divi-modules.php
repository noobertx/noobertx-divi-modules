<?php
/*
Plugin Name: Noobertx Divi Modules
Plugin URI:  
Description: 
Version:     1.0.0
Author:      Robert Talavera
Author URI:  
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: nodm-noobertx-divi-modules
Domain Path: /languages

Noobertx Divi Modules is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Noobertx Divi Modules is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Noobertx Divi Modules. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

define( 'NODM_FILE', __FILE__ );
define( 'NODM_URI', plugin_dir_url( __FILE__ ) );
define( 'NODM_ASSETS', NODM_URI."assets" );

if ( ! function_exists( 'nodm_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function nodm_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/NoobertxDiviModules.php';
}
add_action( 'divi_extensions_init', 'nodm_initialize_extension' );



endif;
function nodm_render_css(){
	?>
	          <style id="et-module-styles" scoped>
	           	<?php echo ET_Builder_Element::get_style();?>
	        </style>
	    <?php
}


add_action( 'wp_footer','nodm_render_css', 19 );


function nodm_widget_enqueue_script() {   
	wp_enqueue_script( 'anime-script', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array() ,"1.0", true );
}
add_action('wp_enqueue_scripts', 'nodm_widget_enqueue_script');
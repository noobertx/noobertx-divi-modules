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

add_action('nodm_render_style','nodm_render_css');
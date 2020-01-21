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


// function Hello(){
// 	echo "Heloooooooo";
// }



// function Prep_Dlipbox_Module(){
//  global $pagenow;

// $is_admin = is_admin();
//  $action_hook = $is_admin ? 'wp_loaded' : 'wp';
//  $required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' ); // list of admin pages where we need to load builder files
//  $specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
//  $is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
//  $is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
//  $is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
//  $is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];

// if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
//  add_action($action_hook, 'hook_css', 9789);
// //  add_action($action_hook, 'DS_Flipbox_Module', 9789);
//  }
// }
// Prep_Dlipbox_Module();


// add_action('wp ','hook_css',9789);
function nodm_render_css(){
	?>
	          <style id="will-printe-after">
	           	<?php echo ET_Builder_Element::get_style();?>
	        </style>
	    <?php
}

add_action('nodm_render_style','nodm_render_css');
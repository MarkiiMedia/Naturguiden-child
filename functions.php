<?php
/* 
 * Child theme functions file
 * 
 */
function zakra_child_enqueue_styles() {

	$parent_style = 'zakra-style'; //parent theme style handle 'zakra-style'

	//Enqueue parent and chid theme style.css
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style( 'zakra_child_style',
	    get_stylesheet_directory_uri() . '/style.css',
	    array( $parent_style ),
	    wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'zakra_child_enqueue_styles' );


/* gem adminbar fra users på nær Aministrator */

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


/* Ninja Forms required fields - DANSK */

add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );
function my_custom_ninja_forms_i18n_front_end( $strings ) {
    $strings['fieldsMarkedRequired'] = 'Felter markeret med * er nødvendige';
    return $strings;
}

/* Denne er udkommenteret det da var planen at loade scriptet herfra, men det virkede ikke, derfor loades det fra Pluginnet "Insert header and footer" */
/* Custom JavaScript fil indlæses her 
function my_theme_scripts_function() {

  wp_enqueue_script( 'myfile', get_stylesheet_directory_uri() . '/js/myfile.js');

}
*/


/* leg med quiznavn ændringer start her */

/* leg med quiznavn ændringer start her */
<?php
/**
Include theme javascript
 */

add_action('wp_footer', 'footer_scripts');

function footer_scripts() {
/* 	wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/assets/javascripts/bootstrap-transition.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-alert', get_template_directory_uri() . '/assets/javascripts/bootstrap-alert.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-modal', get_template_directory_uri() . '/assets/javascripts/bootstrap-modal.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-dropdown', get_template_directory_uri() . '/assets/javascripts/bootstrap-dropdown.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-scrollspy', get_template_directory_uri() . '/assets/javascripts/bootstrap-scrollspy.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-tab', get_template_directory_uri() . '/assets/javascripts/bootstrap-tab.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-tooltip', get_template_directory_uri() . '/assets/javascripts/bootstrap-tooltip.js', array( 'jquery' ));
		wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/assets/javascripts/bootstrap-transition.js', array( 'jquery' ));

*/
		wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js', array( 'jquery' ));
		//wp_enqueue_script('retina', get_template_directory_uri() . '/assets/javascripts/retina.js', array( 'jquery' ));
		wp_enqueue_script('custom-jquery', get_template_directory_uri() . '/assets/javascripts/custom.js', array( 'jquery' ));
}

?>
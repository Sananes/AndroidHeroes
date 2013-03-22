<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/


/**
 * Custom Paths
 */
if ( ! function_exists(theme_images) ) {
		function theme_images() {
			$theme_images = get_bloginfo('template_directory') . '/assets/images/';
			echo $theme_images;
		}
}

/**
 * Theme Framework
 */
require_once ('admin/index.php');
require_once ('lib/includes/jquery.php');
<?php



// Magento Developers

function magento_post_type() {
	$labels = array(
		'name'               => _x( 'Magento', 'post type general name' ),
		'singular_name'      => _x( 'Developer', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'magento' ),
		'add_new_item'       => __( 'Add New Magento Developer' ),
		'edit_item'          => __( 'Edit Developer' ),
		'new_item'           => __( 'New Developer' ),
		'all_items'          => __( 'All Developers' ),
		'view_item'          => __( 'View Developers' ),
		'search_items'       => __( 'Search Products' ),
		'not_found'          => __( 'No products found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Magento'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our developers specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'magento', $args );	
}

// Android Developers

function android_post_type() {
	$labels = array(
		'name'               => _x( 'Android', 'post type general name' ),
		'singular_name'      => _x( 'Developer', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'android' ),
		'add_new_item'       => __( 'Add New Android Developer' ),
		'edit_item'          => __( 'Edit Developer' ),
		'new_item'           => __( 'New Developer' ),
		'all_items'          => __( 'All Developers' ),
		'view_item'          => __( 'View Developers' ),
		'search_items'       => __( 'Search Products' ),
		'not_found'          => __( 'No products found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Android'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our developers specific data',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'android', $args );	
}

// Drupal Developers

function drupal_post_type() {
	$labels = array(
		'name'               => _x( 'Drupal', 'post type general name' ),
		'singular_name'      => _x( 'Developer', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'drupal' ),
		'add_new_item'       => __( 'Add New Drupal Developer' ),
		'edit_item'          => __( 'Edit Developer' ),
		'new_item'           => __( 'New Developer' ),
		'all_items'          => __( 'All Developers' ),
		'view_item'          => __( 'View Developers' ),
		'search_items'       => __( 'Search Products' ),
		'not_found'          => __( 'No products found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Drupal'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our developers specific data',
		'public'        => true,
		'menu_position' => 7,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'drupal', $args );	
}

// Joomla Developers

function joomla_post_type() {
	$labels = array(
		'name'               => _x( 'Joomla', 'post type general name' ),
		'singular_name'      => _x( 'Developer', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'joomla' ),
		'add_new_item'       => __( 'Add New Joomla Developer' ),
		'edit_item'          => __( 'Edit Developer' ),
		'new_item'           => __( 'New Developer' ),
		'all_items'          => __( 'All Developers' ),
		'view_item'          => __( 'View Developers' ),
		'search_items'       => __( 'Search Products' ),
		'not_found'          => __( 'No products found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Joomla'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our developers specific data',
		'public'        => true,
		'menu_position' => 7,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'joomla', $args );	
}

add_action( 'init', 'joomla_post_type' );
add_action( 'init', 'drupal_post_type' );
add_action( 'init', 'android_post_type' );
add_action( 'init', 'magento_post_type' );

?>
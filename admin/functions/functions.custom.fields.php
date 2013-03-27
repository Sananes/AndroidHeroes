<?php

/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
 */ 

function my_acf_settings( $options )
{
    // activate add-ons
    $options['activation_codes']['repeater'] = 'QJF7-L4IX-UCNP-RF2W';
    $options['activation_codes']['options_page'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['flexible_content'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['gallery'] = 'XXXX-XXXX-XXXX-XXXX';
    
    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)
    
    return $options;
    
}
add_filter('acf_settings', 'my_acf_settings');


/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '5152dc57c5e13',
		'title' => 'Developer Settings',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_48',
				'label' => 'Introduction Title',
				'name' => 'intro_title',
				'type' => 'text',
				'order_no' => 0,
				'instructions' => 'Type in the developer\'s main title.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'Super awesome android apps for everyone!',
				'formatting' => 'html',
			),
			1 => 
			array (
				'key' => 'field_49',
				'label' => 'Introduction Description',
				'name' => 'intro_description',
				'type' => 'textarea',
				'order_no' => 1,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad ',
				'formatting' => 'br',
			),
			2 => 
			array (
				'key' => 'field_47',
				'label' => 'Introduction Image',
				'name' => 'intro_image',
				'type' => 'image',
				'order_no' => 2,
				'instructions' => 'Homepage main Intro image.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			3 => 
			array (
				'key' => 'field_42',
				'label' => 'Developer Projects',
				'name' => 'projects',
				'type' => 'repeater',
				'order_no' => 3,
				'instructions' => 'Add as many projects as you like.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					0 => 
					array (
						'key' => 'field_10',
						'label' => 'Poject Title',
						'name' => 'project_title',
						'type' => 'text',
						'order_no' => 0,
						'instructions' => 'Project Title',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => 0,
						'default_value' => 'A Project Title',
						'formatting' => 'none',
					),
					1 => 
					array (
						'key' => 'field_18',
						'label' => 'Image Position',
						'name' => 'image_position',
						'type' => 'select',
						'order_no' => 1,
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'choices' => 
						array (
							'Left' => 'Left',
							'Right' => 'Right',
						),
						'column_width' => '',
						'default_value' => 'Right',
						'allow_null' => 0,
						'multiple' => 0,
					),
					2 => 
					array (
						'key' => 'field_19',
						'label' => 'Andoid Color?',
						'name' => 'android_color',
						'type' => 'select',
						'order_no' => 2,
						'instructions' => 'The android phone color. This is only applicable, if this is for an Android developer. If not, please ignore.',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'choices' => 
						array (
							'white' => 'White',
							'black' => 'Black',
						),
						'column_width' => '',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					3 => 
					array (
						'key' => 'field_11',
						'label' => 'Project Sub-leader',
						'name' => 'project_leader',
						'type' => 'text',
						'order_no' => 3,
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'Project title subleading text',
						'formatting' => 'none',
					),
					4 => 
					array (
						'key' => 'field_12',
						'label' => 'Project Details',
						'name' => 'project_details',
						'type' => 'wysiwyg',
						'order_no' => 4,
						'instructions' => 'Project Details',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
						'toolbar' => 'basic',
						'media_upload' => 'no',
						'the_content' => 'yes',
					),
					5 => 
					array (
						'key' => 'field_13',
						'label' => 'Project Features',
						'name' => 'project_features',
						'type' => 'repeater',
						'order_no' => 5,
						'instructions' => 'Project Features in unordered list.',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'sub_fields' => 
						array (
							0 => 
							array (
								'label' => 'Project Feature',
								'name' => 'project_feature',
								'type' => 'text',
								'instructions' => 'Your project feature.',
								'column_width' => '',
								'default_value' => 'Lorem ipsum doresit amet.',
								'formatting' => 'none',
								'order_no' => 0,
								'key' => 'field_25',
							),
						),
						'row_min' => 0,
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Features',
					),
					6 => 
					array (
						'key' => 'field_15',
						'label' => 'Project Images',
						'name' => 'project_images',
						'type' => 'repeater',
						'order_no' => 6,
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'sub_fields' => 
						array (
							0 => 
							array (
								'label' => 'Project Image',
								'name' => 'project_image',
								'type' => 'image',
								'instructions' => 'Add project Images',
								'column_width' => '',
								'save_format' => 'url',
								'preview_size' => 'thumbnail',
								'order_no' => 0,
								'key' => 'field_16',
							),
						),
						'row_min' => 1,
						'row_limit' => 6,
						'layout' => 'table',
						'button_label' => 'Add Project Image',
					),
					7 => 
					array (
						'key' => 'field_20',
						'label' => 'Button Text',
						'name' => 'project_button_text',
						'type' => 'text',
						'order_no' => 7,
						'instructions' => 'Add your project Buttons text',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'View Site',
						'formatting' => 'none',
					),
					8 => 
					array (
						'key' => 'field_21',
						'label' => 'Button Link',
						'name' => 'project_button_link',
						'type' => 'text',
						'order_no' => 8,
						'instructions' => 'Button Project Link, please include http://',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'http://www.cmsheroes.es',
						'formatting' => 'none',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add New Project',
			),
			4 => 
			array (
				'key' => 'field_45',
				'label' => 'Developer Portfolio',
				'name' => 'portfolio_images',
				'type' => 'repeater',
				'order_no' => 4,
				'instructions' => 'Add your developers portfolio images',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					0 => 
					array (
						'key' => 'field_22',
						'label' => 'Portfolio Image',
						'name' => 'portfolio_image',
						'type' => 'image',
						'order_no' => 0,
						'instructions' => 'Make sure images are (288x260) for correct fitness.',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
					),
					1 => 
					array (
						'key' => 'field_23',
						'label' => 'Larger Image',
						'name' => 'portfolio_larger_image',
						'type' => 'image',
						'order_no' => 1,
						'instructions' => 'Larger Portfolio Image',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'medium',
					),
				),
				'row_min' => 3,
				'row_limit' => 6,
				'layout' => 'table',
				'button_label' => 'Add Portfolio Image',
			),
			5 => 
			array (
				'key' => 'field_50',
				'label' => 'Developer Testimonials',
				'name' => 'testimonials',
				'type' => 'repeater',
				'order_no' => 5,
				'instructions' => 'Add your testimonials here',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					0 => 
					array (
						'key' => 'field_2',
						'label' => 'Testimonial Content',
						'name' => 'testimonial_content',
						'type' => 'textarea',
						'order_no' => 0,
						'instructions' => 'Fill in the Testimonial Content',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'br',
					),
					1 => 
					array (
						'key' => 'field_4',
						'label' => 'Testimonial Client',
						'name' => 'testimonial_client',
						'type' => 'text',
						'order_no' => 1,
						'instructions' => 'Testimonial Name',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'John Doe',
						'formatting' => 'html',
					),
					2 => 
					array (
						'key' => 'field_5',
						'label' => 'Testimonial Link',
						'name' => 'testimonial_link',
						'type' => 'text',
						'order_no' => 2,
						'instructions' => 'Testimonial Link, if they have one.',
						'required' => 0,
						'conditional_logic' => 
						array (
							'status' => 0,
							'allorany' => 'all',
							'rules' => 0,
						),
						'column_width' => '',
						'default_value' => 'http://www.cmsheroes.es',
						'formatting' => 'none',
					),
				),
				'row_min' => 2,
				'row_limit' => 8,
				'layout' => 'table',
				'button_label' => 'Add Testimonial',
			),
			6 => 
			array (
				'key' => 'field_46',
				'label' => 'About',
				'name' => 'about_description',
				'type' => 'wysiwyg',
				'order_no' => 6,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'yes',
			),
			7 => 
			array (
				'key' => 'field_44',
				'label' => 'Developer Profile Image',
				'name' => 'profile_image',
				'type' => 'image',
				'order_no' => 7,
				'instructions' => 'Upload developers profile image.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
			),
			8 => 
			array (
				'key' => 'field_43',
				'label' => 'Developer Social Media',
				'name' => 'social_media',
				'type' => 'wysiwyg',
				'order_no' => 8,
				'instructions' => 'Developers social links.',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '<a href="#dribble" class="dribbble">Dribbble</a>, <a href="#" class="twitter">Twitter</a>, <a href="#" class="github">GitHub</a>, <a class="linkedin" href="#">LinkedIn</a>',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'yes',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'android',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'drupal',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'joomla',
					'order_no' => 2,
				),
				3 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'magento',
					'order_no' => 3,
				),
				4 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'wordpress',
					'order_no' => 4,
				),
				5 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ux',
					'order_no' => 5,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => 
			array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'featured_image',
				10 => 'categories',
				11 => 'tags',
				12 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
?>
<?php
	/*
		Plugin Name: User ID Hack
		Plugin URI: https://github.com/wpwebguru/user-id-hack
		Description: This plugin for Only <a href="https://skipthisgames.com/">Skip This Games</a>, Otherwise not working
		Version: 1.0
		Author: Web Guru
		Author URI: http://wpwebguru.net/

	*/

	define( "PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
	define("PLUGINS_URL", plugins_url());
	
	function cptui_register_my_cpts_id_hack() {

	/**
	 * Post Type: ID Hack.
	 */

	$labels = [
		"name" => __( "ID Hack", "apress" ),
		"singular_name" => __( "Hack", "apress" ),
	];

	$args = [
		"label" => __( "ID Hack", "apress" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "id_hack", "with_front" => true ],
		"query_var" => true,
		"supports" => false,
	];

	register_post_type( "id_hack", $args );
}

add_action( 'init', 'cptui_register_my_cpts_id_hack' );


// Extra field code

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5edd65619e5ef',
	'title' => 'ID Hack',
	'fields' => array(
		array(
			'key' => 'field_5edd65771d421',
			'label' => 'Your Email',
			'name' => 'your_email',
			'type' => 'email',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Your email',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5edd65aa1d422',
			'label' => 'Password',
			'name' => 'password',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Password',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'id_hack',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
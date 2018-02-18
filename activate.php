<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

$terms = get_terms( 'institution_country', array(
	'hide_empty' => false,
	'exclude' => '3,4,5,6,10,21,22,23,24'
));


foreach ($terms as $term){

	$post_args = array(
		'post_title'    => $term->name,
		'post_name'     => $term->slug,
		'post_type'     => 'institution',
		'post_content'  => $term->description,
		'post_excerpt'  => $term->description,
		'post_status'   => 'publish'
	);

	// Creates the post type from the custom taxonomy
	$post_id = wp_insert_post($post_args);

	// Links the post a taxonomy
	wp_set_object_terms($post_id, $term->parent, 'institution_country');
}

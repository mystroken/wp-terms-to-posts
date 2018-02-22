<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

$post_type = 'institution';
$terms_taxonomy = 'institution_country';

// Selects the concerned terms
$terms = get_terms( $terms_taxonomy, array(
	'hide_empty' => false,
	'exclude' => '3,4,5,6,10,21,22,23,24'
));


foreach ($terms as $term){

	$post_args = array(
		'post_title'   => $term->name,
		'post_name'    => $term->slug,
		'post_type'    => $post_type,
		'post_content' => $term->description,
		'post_excerpt' => $term->description,
		'post_status'  => 'publish'
	);

	// Creates the post type from the custom taxonomy.
	$post_id = wp_insert_post($post_args);

	// Links the post to a taxonomy.
	wp_set_object_terms($post_id, $term->parent, $terms_taxonomy);

	// Deletes the term.
	wp_delete_term($term->term_id, $terms_taxonomy);
}

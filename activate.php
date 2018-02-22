<?php
if ( ! defined( 'WPINC' ) ) die; // If this file is called directly, abort.

global $wpdb;
$post_type = 'project';
$terms_taxonomy = 'category';


// Selects the concerned terms
$terms = get_terms( $terms_taxonomy, array(
	'hide_empty' => false,
	'term_taxonomy_id' => array(19, 38, 43, 55)
));


foreach ($terms as $term){

	// Creates the post type from the custom taxonomy.
	$post_args = array(
		'post_title'   => $term->name,
		'post_name'    => $term->slug,
		'post_type'    => $post_type,
		'post_content' => $term->description,
		'post_excerpt' => $term->description,
		'post_status'  => 'publish'
	);
	$post_id = wp_insert_post($post_args);

	// Links custom posts to post
	$term_posts = get_posts(array(
		'category' => $term->term_id,
		'post_type' =>  'post'
	));

	foreach($term_posts as $term_post){
		$wpdb->insert(
			$wpdb->prefix . 'mb_relationships',
			array(
				'from' => $term_post->ID,
				'to' => $post_id,
				'type' => 'posts_to_projects',
			),
			array('%d', '%d', '%s')
		);
	}

	// Deletes the term.
	wp_delete_term($term->term_id, $terms_taxonomy);
}

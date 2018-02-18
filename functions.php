<?php

/**
 * Add specifics post types to wordpress
 */
function riffeac_custom_post_types() {

	$args_institution = require_once __DIR__ . '/includes/custom-post-types/institution.php';
	$args_partner     = require_once __DIR__ . '/includes/custom-post-types/partner.php';
	$args_project     = require_once __DIR__ . '/includes/custom-post-types/project.php';
	$args_resource    = require_once __DIR__ . '/includes/custom-post-types/resource.php';

	register_post_type( 'institution', $args_institution );
	register_post_type( 'partner', $args_partner );
	register_post_type( 'project', $args_project );
	register_post_type( 'resource', $args_resource );

}
add_action( 'init', 'riffeac_custom_post_types', 0 );


/**
 * Add specifics taxonomies for post types
 */
function riffeac_custom_taxonomies(){

	$args_resource_type 	  = require_once __DIR__ . '/includes/custom-taxonomies/resource-type.php';
	$args_partner_type 	  = require_once __DIR__ . '/includes/custom-taxonomies/partner-tag.php';
	$args_institution_country = require_once __DIR__ . '/includes/custom-taxonomies/institution-country.php';

	register_taxonomy( 'resource_type', array('resource'), $args_resource_type );
	register_taxonomy( 'patner_tag', array('partner'), $args_partner_type );
	register_taxonomy( 'institution_country', array('institution'), $args_institution_country );
}
add_action( 'init', 'riffeac_custom_taxonomies', 0 );

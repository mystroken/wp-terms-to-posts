<?php

return array(
	'hierarchical'      => true,
	'labels'            => array(
		'name'              			=> _x( 'Pays de localisation', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Pays de localisation', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un pays de localisation'),
		'all_items'        				=> __( 'Tous les pays de localisation'),
		'edit_item'         			=> __( 'Editer le pays de localisation'),
		'update_item'       			=> __( 'Mettre à jour le pays de localisation'),
		'add_new_item'     				=> __( 'Ajouter un nouveau pays de localisation'),
		'new_item_name'     			=> __( 'Valeur du pays de localisation'),
		'separate_items_with_commas'	=> __( 'Séparer les pays de localisation avec une virgule'),
		'menu_name'         => __( 'Pays de localisation'),
	),
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'institution-countries' ),
);

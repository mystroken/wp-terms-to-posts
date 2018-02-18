<?php

return array(
	'hierarchical'      => false,
	'labels'            => array(
		'name'              			=> _x( 'Types de ressource', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Type de ressource', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un type de ressource'),
		'all_items'        				=> __( 'Tous les types de ressource'),
		'edit_item'         			=> __( 'Editer le type de ressource'),
		'update_item'       			=> __( 'Mettre à jour le type de ressource'),
		'add_new_item'     				=> __( 'Ajouter un nouveau type de ressource'),
		'new_item_name'     			=> __( 'Valeur du nouveau type de ressource'),
		'separate_items_with_commas'	=> __( 'Séparer les types de ressource avec une virgule'),
		'menu_name'         => __( 'Types de ressource'),
	),
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'resource-types' ),
);

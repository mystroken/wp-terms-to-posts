<?php

return array(
	'hierarchical'      => false,
	'labels'            => array(
		'name'              			=> _x( 'Types de partenaire', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Type de partenaire', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un type de partenaire'),
		'all_items'        				=> __( 'Tous les types de partenaire'),
		'edit_item'         			=> __( 'Editer le type de partenaire'),
		'update_item'       			=> __( 'Mettre à jour le type de partenaire'),
		'add_new_item'     				=> __( 'Ajouter un nouveau type de partenaire'),
		'new_item_name'     			=> __( 'Valeur du nouveau type de partenaire'),
		'separate_items_with_commas'	=> __( 'Séparer les types de partenaire avec une virgule'),
		'menu_name'         => __( 'Types de partenaire'),
	),
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'partner-tags' ),
);

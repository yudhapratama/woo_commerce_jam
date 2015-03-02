<?php
/**
 * Plugin Name: Custom Music Reviews
 * Plugin URI: http://elegantthemes.com/
 * Description: A custom music review plugin built for example.
 * Version: 1.0
 * Author: Andy Leverenz
 * Author URI: http://justalever.com/
 **/

function register_cpt_music_review() {

	$labels = array(
		'name' => _x( 'Music Reviews', 'music_review' ),
		'singular_name' => _x( 'Music Review', 'music_review' ),
		'add_new' => _x( 'Add New', 'music_review' ),
		'add_new_item' => _x( 'Add New Music Review', 'music_review' ),
		'edit_item' => _x( 'Edit Music Review', 'music_review' ),
		'new_item' => _x( 'New Music Review', 'music_review' ),
		'view_item' => _x( 'View Music Review', 'music_review' ),
		'search_items' => _x( 'Search Music Reviews', 'music_review' ),
		'not_found' => _x( 'No music reviews found', 'music_review' ),
		'not_found_in_trash' => _x( 'No music reviews found in Trash', 'music_review' ),
		'parent_item_colon' => _x( 'Parent Music Review:', 'music_review' ),
		'menu_name' => _x( 'Music Reviews', 'music_review' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Music reviews filterable by genre',
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'genres' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-audio',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'music_review', $args );
}

add_action( 'init', 'register_cpt_music_review' );

function genres_taxonomy() {
	register_taxonomy(
		'genres',
		'music_review',
		array(
			'hierarchical' => true,
			'label' => 'Genres',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'genre',
				'with_front' => false
			)
		)
	);
}
add_action( 'init', 'genres_taxonomy');
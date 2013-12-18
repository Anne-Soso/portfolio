<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function create_post_type() {
	register_post_type( 'travail',
		array(
			'labels' => array(
				'name' => __( 'Travaux' ),
				'singular_name' => __( 'Travail' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title' )
		)
	);
}
add_action( 'init', 'create_post_type' );


function outils_init() {
	// create a new taxonomy
	register_taxonomy(
		'outils',
		'travail',
		array(
			'label' => __( 'Outils' ),
			'rewrite' =>false
		)
	);
}
add_action( 'init', 'outils_init' );
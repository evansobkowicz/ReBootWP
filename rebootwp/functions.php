<?php 

	// Initialize/Setup
	
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );


	//MENUS
		
		//Set up for Bootstrap WordPress menus (from 3rd party)
	
		include 'inc/bootstrap-walker.php';

		//Register Nav Menus
		add_action( 'after_setup_theme', 'register_my_menus' );
 	
		function register_my_menus() {
		
			register_nav_menus( array(
				'main-menu' => __( 'Main Menu', 'rebootwp' ),
			) );
		
		}
		

	//MISC FUNCTIONS
	
		//Set up for Bootstrap WP Pagination (from 3rd party)
		include 'inc/bootstrap-pagination.php';
		
		// Admin Customizations
		include 'inc/custom-admin.php';
		
?>
<?php

function fb_theme_enqueue_styles() {
	// wp_enqueue_style( 'material-gaze-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700|Roboto+Condensed:400,300,700' );
	//wp_enqueue_script('jQuery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js');
	//wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
	//wp_enqueue_style( 'bootstrap_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css');
	//wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	//wp_enqueue_style( 'bootstrap_font_awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'w3schools', 'http://www.w3schools.com/lib/w3.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'autocomplete-script', get_template_directory_uri() . '/js/jquery.autocomplete.min.js');
	
	
}

add_action( 'wp_enqueue_scripts', 'fb_theme_enqueue_styles');

function fb_theme_register_theme_menu() {
    register_nav_menus( array('ByRole' => 'By Role Menu',
    					'ByFeature' => 'By Feature Menu'
     ));
}
add_action( 'init', 'fb_theme_register_theme_menu' );

?>

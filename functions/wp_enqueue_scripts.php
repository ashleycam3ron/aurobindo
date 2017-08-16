<?php add_action('wp_enqueue_scripts', 'enqueue');
function enqueue(){
	wp_deregister_script('jquery');

    wp_dequeue_script( array('underscore','backbone','datepicker','wp-embed','wp-mediaelement') );
    wp_deregister_script( array('underscore','backbone','datepicker','wp-embed','wp-mediaelement') );

    wp_dequeue_style( array('wp-mediaelement','wp-mediaelementplayer') );
    wp_deregister_style( array('wp-mediaelement','wp-mediaelementplayer') );

	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');

	//Bootstrap
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', NULL, '3.3.4');

	//Fancybox
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');

	//Cookie
	wp_register_script('cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js', NULL, '1.4.0');

	//Google Map
	wp_register_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAaO2yLwrl3V1kRnFsD75LRqL6bnognY30');
	wp_register_script('acf-map', get_stylesheet_directory_uri().'/js/acf-map.js');

	//jQuery UI
	wp_register_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js');

	//Theme Functions
	wp_register_script('functions', get_stylesheet_directory_uri() . '/js/functions.js', NULL, NULL);

//enqueue scripts
	wp_enqueue_script(array('jquery','bootstrap','functions','google-map','acf-map'));

	//styles
	//Bootstrap Core CSS
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', NULL, '3.3.4');

	//Custom Fonts
	wp_register_style('font-awesome', get_stylesheet_directory_uri().'/font-awesome/css/font-awesome.min.css');

	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');

	//Theme stylesheet
	wp_register_style('styles', get_stylesheet_directory_uri().'/style.css', NULL, NULL);


//enqueue styles
	wp_enqueue_style(array('bootstrap','font-awesome','fancybox2','styles'));


//product catalog
if (is_page(658)){
	wp_enqueue_script(array('fancybox2','cookie'));
}
if (is_single()){
	wp_enqueue_script(array('fancybox2'));
}

}
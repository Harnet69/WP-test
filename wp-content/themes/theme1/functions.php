<?
/*Loaded scripts and style*/
	function load_my_script(){
		wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');	
		wp_enqueue_script('jqFancyTransitions_my', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');	
		wp_enqueue_style('style_my', get_template_directory_uri().'/style.css');	
	}
/*Load script&style*/
	add_action('wp_enqueue_scripts','load_my_script');
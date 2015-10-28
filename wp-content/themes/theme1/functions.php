<?
/*Loaded scripts and style*/
	function load_my_script(){
		wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');	
		wp_enqueue_script('jqFancyTransitions_my', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');	
		wp_enqueue_style('style_my', get_template_directory_uri().'/style.css');	
	}
/*Load script&style*/
	add_action('wp_enqueue_scripts','load_my_script');
	
/*Возможность добавлять миниатюры к записям из админки */
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(180, 180); 	

/*Add widjets*/
	register_sidebar(array('name' => 'Меню', 'id' =>'header_menu', 'before_widget' => '', 'after_widget'  => ''));

/*Создаём боковой сайдбар*/
	register_sidebar(array('name' => 'Sidebar',
							'id' =>'sidebar',
							'before_widget' => '<div class="sidebar-categories">',
							'after_widget'  => '</div>',
							'before_title'  => '<h2>',
							'after_title'   => '</h2>'));
							

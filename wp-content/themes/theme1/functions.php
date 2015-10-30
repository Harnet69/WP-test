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
							
/*Создаём сайдбар футера*/
	register_sidebar(array('name' => 'Footer',
							'id' =>'footer',
							'before_widget' => '<div class="footer-info">',
							'after_widget'  => '</div>',
							'before_title'  => '<h3>',
							'after_title'   => '</h3>'));
/*Подключаем пагинатор*/							

function my_pagenavi() {
	global $wp_query;
	$big = 999999999; // уникальное число для замены

	$args = array(
		'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
		,'format' => ''
		,'current' => max( 1, get_query_var('paged') )
		,'total' => $wp_query->max_num_pages
		,'current' => 1
	);

	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = str_replace( '/page/1/', '', $result );

	echo $result;
}		
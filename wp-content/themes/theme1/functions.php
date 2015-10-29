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
	function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 3; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = 'Prev'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = 'Next'; //текст ссылки "Следующая страница"
 
  

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) 
	  $pages = '<span class="pages"> ' . $current . ' of ' . $max . '</span>'."\r\n";
  echo paginate_links($a). $pages .paginate_links($a) ;
  if ($max > 1) echo '</div>';
	}					
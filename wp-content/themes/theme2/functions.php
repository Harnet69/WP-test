<?
register_nav_menu('Menuu', 'Primary menu)');

register_sidebar(array('name' => 'slider_main',
							'id' =>'slider_index',
							'description' => 'Слайдер на главной',
							'before_widget' => '',
							'after_widget'  => '',
							'before_title'  => '',
							'after_title'   => ''));
/*Добавить поддержку миниатюр*/
add_theme_support( 'post-thumbnails', array( 'page','post'));   


function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*Поддержка футера*/
register_sidebar(array('name' => 'Футер соцсети',
							'id' =>'footer-soc',
							'description' => 'Внесите данные которые появятся в "подвале" сайта!',
							'before_widget' => '',
							'after_widget'  => '',
							'before_title'  => '',
							'after_title'   => ''));		
register_sidebar(array('name' => 'Футер лого и копирайты',
							'id' =>'footer-logo',
							'description' => 'Внесите логотип и копирайты!',
							'before_widget' => '',
							'after_widget'  => '',
							'before_title'  => '',
							'after_title'   => ''));	

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
/*вывод галереи в записи рубрики портфолио*/
register_sidebar(array('name' => 'Галерея',
							'id' =>'my_galery',
							'description' => 'Добавьте текстовое поле с html кодом',
							'before_widget' => '',
							'after_widget'  => '',
							'before_title'  => '',
							'after_title'   => ''));
/*галерея на основе штатной галереи WP*/
	function short_galery(){
		
		
	}
	

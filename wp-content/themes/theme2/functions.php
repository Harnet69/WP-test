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

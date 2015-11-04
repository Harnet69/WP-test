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

if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 *
 * @param object $comment The comment object.
 * @param array  $args    An array of arguments. @see get_comment_reply_link()
 * @param int    $depth   The depth of the comment.
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 40 ); ?>
				<?php printf( __( '%s <span class="says">ответил(ла):</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __( '%1$s в %2$s', 'twentyten' ), get_comment_date(),  get_comment_time('H:i',$gmt = false, $translate = false ) ); ?></a><?php edit_comment_link( __( '( Редактировать)', 'twentyten' ), ' ' );
				?>
			</div><!-- .comment-meta .commentmetadata -->

			<div class="comment-body"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;
/*Баннер
* реализация без использования админки
*/
/*register_sidebar(array('name' => 'Header',
							'id' =>'header',
							'before_widget' => "<div class='head-banner'>",// класс стилей для виджетов этого сайтбара
							'after_widget'  => '</div>'
							));
*/
function my_banner()
		{
		  $labels = array(
			'name' => 'Баннеры', // Основное название типа записи
			'singular_name' => 'Баннер', // отдельное название записи типа Book
			'add_new' => 'Добавить баннер',
			'add_new_item' => 'Добавить Баннер',
			'edit_item' => 'Редактировать баннер',
			'new_item' => 'Новый баннер',
			'view_item' => 'Посмотреть баннер',
			'search_items' => 'Найти баннре',
			'not_found' =>  'Баннеров не найдено',
			'not_found_in_trash' => 'В корзине баннеров не найдено',
			'parent_item_colon' => '',
			'menu_name' => 'Баннеры'

		  );
		  $args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','thumbnail')
		  );
		  register_post_type('banner',$args);
		}
add_action('init','my_banner');		

/*Слайдер*/
		function my_slider()
			{
			  $labels = array(
				'name' => 'Слайдеры', // Основное название типа записи
				'singular_name' => 'Слайдер', // отдельное название записи типа Book
				'add_new' => 'Добавить слайдер',
				'add_new_item' => 'Добавить новый слайдер',
				'edit_item' => 'Редактировать слайдер',
				'new_item' => 'Новый слайдер',
				'view_item' => 'Посмотреть слайдер',
				'search_items' => 'Найти слайдер',
				'not_found' =>  'Слайдеров не найдено',
				'not_found_in_trash' => 'В корзине слайдеров не найдено',
				'parent_item_colon' => '',
				'menu_name' => 'Слайдеры'
				);
			  $args = array( /*это массив параметров*/
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'supports' => array('title','editor','thumbnail')
				);
			  register_post_type('slider',$args);
			}
add_action('init','my_slider');	

/*Социальные сети*/
		function my_soc()
			{
			  $labels = array(
				'name' => 'Социальные сети', // Основное название типа записи
				'singular_name' => 'Социальная сеть', // отдельное название записи типа Book
				'add_new' => 'Добавить соцсеть',
				'add_new_item' => 'Добавить новуйю соцсеть',
				'edit_item' => 'Редактировать соцсеть',
				'new_item' => 'Новая соцсеть',
				'view_item' => 'Посмотреть соцсеть',
				'search_items' => 'Найти соцсеть',
				'not_found' =>  'Соцсетей не найдено',
				'not_found_in_trash' => 'В корзине соцсетей не найдено',
				'parent_item_colon' => '',
				'menu_name' => 'Соцсети'
				);
			  $args = array( /*это массив параметров*/
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'supports' => array('title','editor','thumbnail')
				);
			  register_post_type('social',$args);
			}
add_action('init','my_soc');	
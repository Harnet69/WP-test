<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="/"><title><? bloginfo('name');wp_title();?></title></a>
<? wp_head();?>
</head>
<body>
	<div class="head-wrapper">
		<div class="head">
			<div class="head-logo"><a href="/"><img src="<? bloginfo('template_url');?>/images/logo.jpg" alt="" /></a></div>
			<? $banner = new WP_Query(array('post_type'=>'banner', 'posts_per_page'=>'1'));?>
			<?php if ($banner->have_posts()) :  while ($banner->have_posts()) : $banner->the_post(); ?>
			   <!-- здесь формирование вывода постов, -->
			   <!-- где работают теги шаблона относящиеся к the loop -->
			   <?the_post_thumbnail('full');?> 
			<?php endwhile; ?>
				<? else: echo "<p>Место для баннера разм. 728х90px</p>";?>
				<?php endif; ?>
			<!--<div class="head-banner"><img src="<? bloginfo('template_url');?>/images/728x90.jpg" alt="" /></div>-->
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="menu-main">
			<? if(!dynamic_sidebar('header_menu')):?>
					<span>This is area for menu, added at widgets</span>
				<?endif;?>
			<ul class="ico-social">
			<? $social = new WP_Query(array('post_type'=>'social'));?>
			<?php if ($social->have_posts()) :  while ($social->have_posts()) : $social->the_post(); ?>
			   <li><a href="<? the_title()?>"><?the_post_thumbnail();?></a><li>
			<?php endwhile; ?>
				</ul>
				<? else: echo "<p>Место для баннера разм. 728х90px</p>";?>
				<?php endif; ?>

		</div>

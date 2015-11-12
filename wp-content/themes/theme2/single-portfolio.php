<? get_header('single-portfolio');?>
<div class="content-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><? the_title();?></h1> 
	<h2>Этот пост относится к категории <? $category = get_the_category();echo $category[0]->cat_name;?></h2>
	<? the_content();?>
<?php endwhile; else: ?>

<?php endif; ?>
<?get_footer('single-portfolio');?>


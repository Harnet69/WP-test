<? get_header('single-portfolio');?>
<div class="content-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<? the_content();?>
<?php endwhile; else: ?>

<?php endif; ?>
<?get_footer('single-portfolio');?>


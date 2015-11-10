<? get_header();?>
<div class="content-main">
				<div class="single-default">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2><? the_title();?></h2>
						<? the_post_thumbnail();?>
						<p><? the_content();?>
				</div>		
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?get_footer();?>
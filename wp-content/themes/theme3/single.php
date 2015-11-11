<? get_header();?>
<div class="content-main">
			
				<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>	
					<? the_content();?>
				<?php endwhile; else: ?>
					<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
				<?php endif; ?>
				
</div>	
</div>		

<? get_footer();?>
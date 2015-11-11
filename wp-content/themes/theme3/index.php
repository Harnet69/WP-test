	<?get_header();?>
		<div class="content-main">
			<div class="content-main-blocks">
				<?$args = array('posts_per_page' => 3,
								'category_name'=>'Portfolio',
								'order'=>'ASC');?>
				<? $main = new WP_Query($args);?>
				<?php if ( $main->have_posts() ) : while ( $main->have_posts() ) : $main->the_post(); ?>	
				<div>				
					<a href="<? the_permalink();?>"><? the_post_thumbnail();?></a>
					<h2><a href="<? the_permalink();?>"">Hi, I'm Banifacyj Photographer</a></h2>
					<p><? the_excerpt();?></p>
					<a class="read-more" href="<? the_permalink();?>">read more</a>
				</div>	
				<?php endwhile; else: ?>
					<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
				<?php endif; ?>
				
			</div>
		</div>
</div>
	<? get_footer();?>
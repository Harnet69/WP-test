		<div class="skill-set">
			<? $arr = array('post_type' => 'post',
							'orderby' => 'rand',
							'category_name'=>'Exhibitions');?>	
			<? $rand_page = new WP_Query($arr);?>
			<?php if ( $rand_page->have_posts() ) : while ( $rand_page->have_posts() ) : $rand_page->the_post(); ?>
			<?php endwhile;?>
			<? else: ?>
				<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
			<?php endif; ?>
				<a href="<? the_permalink();?>"><? the_post_thumbnail();?></a>
				<h2><<? the_title();?>></h2>
				<p><? the_excerpt();?></p>
				<a class="read-more" href="<? the_permalink();?>">read more</a>
		</div>		
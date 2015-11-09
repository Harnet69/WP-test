
<div class="carcas">
<? get_header();?>
		<div class="content-main">
		
		<div class="carousel-wrapper">
			<? if(!dynamic_sidebar('slider_index')) : ?>
					<ul id="carousel" class="elastislide-list">
						<li>Это место для карусели!</li>
					</ul>
			<?endif;?>
		</div>
				<div class="content-main-blocks" style="padding-bottom:75px">
					<div class="portfolio">
					<? $arr = array('post_type' => 'post',
									'order' => 'ASC',
									'category_name'=>'Portfolio'
									);?>	
					<? $rand_page = new WP_Query($arr);?>
					<?php if ( $rand_page->have_posts() ) : while ( $rand_page->have_posts() ) : $rand_page->the_post(); ?>
						<a href="<? the_permalink();?>"><? the_post_thumbnail('full');?></a>
					<?php endwhile;?>
					<? else: ?>
					<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
					<?php endif; ?>
					</div>
					<? get_sidebar();?>
				</div>
		</div>
</div>
<? get_footer();?>
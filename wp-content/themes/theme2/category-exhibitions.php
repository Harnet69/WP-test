
<div class="carcas">
<? get_header('page');?>
		<div class="content-main">
			<div class="content-main-blocks">
					<? $arr = array('post_type' => 'post',
									'order' => 'DESC',
									'category_name'=>'Exhibitions',
									'posts_per_page'=>3);?>	
					<? $rand_page = new WP_Query($arr);?>
					<?php if ( $rand_page->have_posts() ) : while ( $rand_page->have_posts() ) : $rand_page->the_post(); ?>
					<div class="exhib">
						<a href="<? THE_PERMALINK();?>"><? the_post_thumbnail();?></a>
						<a href="<? THE_PERMALINK();?>"><h2><? the_title();?></h2></a>
							<? $custom_fields = get_post_custom();?>
								<?if (!empty($custom_fields['place'][0])){
									echo "<p class='exhib-place'>".$custom_fields['place'][0]."<p>";}
								?>
								<?if (!empty($custom_fields['date'][0])){
									echo "<p class='exhib-date'>".$custom_fields['date'][0]."<p>";}
								?>
								<?if (!empty($custom_fields['ticket'][0])){
									echo "<p class='exhib-ticket'>".$custom_fields['ticket'][0]."<p>";}
								?>
						<p><? the_excerpt();?></p>
						<a class="read-more" href="<? the_permalink();?>">read more</a>
					</div>	
					<?php endwhile;?>
					<? else: ?>
					<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
					<?php endif; ?>
			</div>
			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
		</div>
</div>
<? get_footer('page');?>
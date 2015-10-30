<? get_header();?>
	<div class="content-wrapper">
		<div class="content-main">
			<div class="content">
				<div id='slideshowHolder'>    
						<img src="<? bloginfo('template_url');?>/images/img1.jpg" alt='' />            
						<img src="<? bloginfo('template_url');?>/images/img1.jpg" alt='' />            
						<img src="<? bloginfo('template_url');?>/images/img1.jpg" alt='' />            
				</div>
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						   <!-- здесь формирование вывода постов, -->
						   <!-- где работают теги шаблона относящиеся к the loop -->
							<div class="articles">
								<div class="articles-gen-images">
									<a href="<? the_permalink();?>">
										<? if(has_post_thumbnail()):?>
											<?the_post_thumbnail();?> 
											<? else :?>
												<img src="<? bloginfo('template_url');?>/images/no-image.jpg" alt='' />
											<? endif?>
									</a>
								</div>
								<div class="articles-head">
									<span class="articles-date"><img src="<? bloginfo('template_url');?>/images/articles-author.jpg" alt="" /><span class="user-color"><? the_author();?></span>&nbsp<? the_time('M jS, Y');?></span>
									<span class="articles-comments" ><img src="<? bloginfo('template_url');?>/images/articles-comment.jpg" alt=""><a href="#"><? comments_popup_link()?></a></span>
								</div>
								<div class="articles-body">
									<h2><a href="<? the_permalink();?>"><? the_title();?></a></h2>
									<p><? the_excerpt();?></p>
									<p><a href="<? the_permalink();?>">Read More</a></p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
				
				<div class="pager">
					<? my_pagenavi();?>
					<!--
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>of</span>
					<a href="#">75</a>
					<a href="#">Next</a>
					-->
				</div>
			</div>
<? get_sidebar();?>	
		</div>
	</div>
<? get_footer();?>
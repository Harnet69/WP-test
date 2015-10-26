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
									<a href="#"><img src="<? bloginfo('template_url');?>/images/post-img1.jpg" alt="" /></a>
								</div>
								<div class="articles-head">
									<span class="articles-date"><img src="<? bloginfo('template_url');?>/images/articles-author.jpg" alt="" /><span class="user-color"><? the_author();?></span>&nbsp<? the_time('M jS, Y');?></span>
									<span class="articles-comments" ><img src="<? bloginfo('template_url');?>/images/articles-comment.jpg" alt=""><a href="#"><? comments_popup_link()?></a></span>
								</div>
								<div class="articles-body">
									<h2><a href="#">Thanksgiving greeting card PSD</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
										Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. 
										Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus. . </p>
									<p><a href="#">Read More</a></p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
				
				<div class="pager">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>of</span>
					<a href="#">75</a>
					<a href="#">Next</a>
				
				</div>
			</div>
<? get_sidebar();?>	
		</div>
	</div>
<? get_footer();?>
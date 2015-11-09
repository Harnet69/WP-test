<? get_header();?>
	<div class="content-wrapper">
		<div class="content-main">
			<div class="content">
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						   <!-- здесь формирование вывода постов, -->
						   <!-- где работают теги шаблона относящиеся к the loop -->
							<div class="single_page_p">
								<div class="articles-head">
									<span class="articles-date"><img src="<? bloginfo('template_url');?>/images/articles-author.jpg" alt="" /><span class="user-color"><? the_author();?></span>&nbsp<? the_time('M jS, Y');?></span>
									<span class="articles-comments" ><img src="<? bloginfo('template_url');?>/images/articles-comment.jpg" alt=""><a href="#"><? comments_popup_link()?></a></span>
								</div>
								<div class="articles-body">
									<h2><? the_title();?></h2>
									<p><? the_content();?></p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
				<div class="single_pager">
					<p><? previous_post_link('<span>&laquo;</span> %link');next_post_link('%link <span>&raquo;</span>');?><p>
				</div>
				<?comments_template();?>
			</div>
			
<? get_sidebar();?>	
		</div>
	</div>
<? get_footer();?>
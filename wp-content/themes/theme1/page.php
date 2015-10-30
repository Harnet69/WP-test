<? get_header();?>
	<div class="content-wrapper">
		<div class="content-main">
			<div class="content">
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
						   <!-- здесь формирование вывода постов, -->
						   <!-- где работают теги шаблона относящиеся к the loop -->
							<div class="single_page_p">
								<div class="articles-body">
									<h2><? the_title();?></h2>
									<p><? the_content();?></p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
			</div>
<? get_sidebar();?>	
		</div>
	</div>
<? get_footer();?>
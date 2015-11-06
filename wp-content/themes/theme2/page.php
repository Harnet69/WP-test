<? get_header('page');?>
<div class="content-main">
	<div class="content-main-blocks" style="padding-bottom:75px">
		<div class="about-me">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
				<h2><a href="<? the_permalink();?>"><? the_title();?></a></h2>
				<p><?the_content();?></p>
			<!--<h2><a href="#"><? the_title();?></a></h2>
				<a href="#"><img src="<? bloginfo('template_url');?>/Images/about-me2.jpg" alt="" class="img-left" /></a>
				<p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem consectetur placerat. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
				<p>Proin nec purus nibh, eget suscipit libero. Duis tincidunt cursus egestas. Suspendisse commodo nisl at purus euismod sit amet pharetra dolor laoreet. In placerat sapien consectetur nulla posuere eget lobortis felis hendrerit. Mauris volutpat purus eget velit placerat tincidunt. Duis nulla eros, lacinia et malesuada quis, varius vitae nunc. Quisque a turpis sed leo sagittis iaculis. In eget risus et risus auctor hendrerit. Duis at est ligula, eu ultricies elit. Sed sapien quam, dignissim ut faucibus at, fringilla vitae leo. Praesent tristique aliquet nisl, eget sodales risus hendrerit iaculis.</p>
				<p>Mauris arcu eros, suscipit a sodales venenatis, rutrum sit amet justo. Cras neque neque, mollis in molestie ac, ultrices eget felis. Pellentesque neque mauris, scelerisque a tincidunt eu, ultrices at urna. </p>
				<a class="read-more" href="#">read more</a>-->
		</div>
<? get_sidebar();?>		
	</div>
</div>
<? get_footer('page');?>
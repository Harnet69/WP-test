
<div class="carcas">
<? get_header('page');?>
		<div class="content-main">
			<div class="content-main-blocks">
				<div class="exhib">
					<a href="#"><img src="Images/exhibition1.1.jpg" alt="" /></a>
					<h2><a href="#">The Art Of Photography Exhibition</a></h2>
					<p><img src="Images/exhibitions-ico1.png" alt=""/>King’s Museum, Kensington, London</p>
					<p><img src="Images/exhibitions-ico2.png" alt=""/>Tues 26th April 2011 - Sat 30th April 2011 8am to 9pm with free refreshments.</p>
					<p><img src="Images/exhibitions-ico3.png" alt=""/>Buy tickets from <a href="#">TicketMaster<br></a></p>
					<p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem can this is an inline link. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
					<a class="read-more" href="#">buy tickets</a>
				</div>
				<div class="exhib">
					<a href="#"><img src="Images/exhibition2.2.jpg" alt="" /></a>
						<h2><a href="#">Another Photography Exhibition</a></h2>
					<p><img src="Images/exhibitions-ico1.png" alt=""/>omeplace,  Somewhere, New York</p>
					<p><img src="Images/exhibitions-ico2.png" alt=""/>Weds 1st June 2011 - Weds 9th June2011 11:30am to 6pm with free guide.</p>
					<p><img src="Images/exhibitions-ico3.png" alt=""/>Buy tickets from <a href="#">TicketMaster</a></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id lacus quis eros ultrices suscipit at ut ligula. Praesent posuere ornare interdum. Pellentesque porttitor hendrerit lorem non tincidunt. Pellentesque eget consectetur nibh. Pellentesque nec venenatis lorem. Donec et erat dolor.</p>
					<a class="read-more" href="#">buy tickets</a>
				</div>
				<div>
					<? $arr = array('post_type' => 'post',
									'orderby' => 'rand',
									'category_name'=>'Exhibitions');?>	
					<? $rand_page = new WP_Query($arr);?>
					<?php if ( $rand_page->have_posts() ) : while ( $rand_page->have_posts() ) : $rand_page->the_post(); ?>
					<?php endwhile;?>
					<? else: ?>
					<p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>
					<?php endif; ?>
				<a href="#"><? the_post_thumbnail();?></a>
				<h2><<? the_title();?>></h2>
				<p><? the_excerpt();?></p>
				<a class="read-more" href="<? the_permalink();?>">read more</a>
				</div>			
			</div>
		</div>
</div>
<? get_footer('page');?>















<!--
<div class="content-main">
	<div class="carousel-wrapper">
			<? if(!dynamic_sidebar('slider_index')) : ?>
					<ul id="carousel" class="elastislide-list">
						<li>Это место для карусели!</li>
					</ul>
			<?endif;?>
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
</div>-->

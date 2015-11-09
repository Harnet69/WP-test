	<? get_header()?> 
		<div class="content-main">
			
			<div class="carousel-wrapper">
			<? if(!dynamic_sidebar('slider_index')) : ?>
					<ul id="carousel" class="elastislide-list">
						<li>Это место для карусели!</li>
					</ul>
			<?endif;?>
			</div>
				<!--<ul id="carousel" class="elastislide-list">
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/yves.png" alt="yves" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/pierre-cardin.png" alt="pierre-cardin" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/paco.png" alt="paco" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/diesel.png" alt="diesel" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/yves.png" alt="yves-st-laurent" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/pierre-cardin.png" alt="pierre-cardin" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/paco.png" alt="paco" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/diesel.png" alt="diesel" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/yves.png" alt="yves-st-laurent" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/pierre-cardin.png" alt="pierre-cardin" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/paco.png" alt="paco" /></a></li>
						<li><a href="#"><img src="http://test/wp-content/uploads/2015/11/diesel.png" alt="diesel" /></a></li>
				</ul>-->
			</div>
			<div class="content-main-blocks">
			<? $args = array('post_type' => array('post', 'page'),
							'meta_key'=>'order',
							'orderby' => 'meta_value_num',	
							'order' => 'ASC',		
							'posts_per_page' => 3);?>
			<? $order = new WP_Query($args);?>
			<?php if ($order->have_posts()) :  while ($order->have_posts()) : $order->the_post(); ?>
			     <div>
					<a href="#"><?the_post_thumbnail();?></a>
					<h2><a href="<?the_permalink();?>"><?= get_post_meta(get_the_ID(), "title", true);?></a></h2>
					<p><?the_excerpt()?></p>
					<a class="read-more" href="<?the_permalink();?>">read more</a>
				</div>
			<?php endwhile; ?>
				<? else: ?>
				<div>
					<p>Место для контента!</p>
				</div>
				<div>
					<p>Место для контента!</p>
				</div>
				<div>
					<p>Место для контента!</p>
				</div>
				<?php endif; ?>
				<!--
				<div>
					<a href="#"><img src="<? bloginfo('template_url');?>/Images/about-me2.jpg" alt="" /></a>
					<h2><a href="#">Hi, I'm Banifacyj Photographer</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisi odio, sollicitudin at condimentum at, mattis a ligula.<br><br>
					   Ut vitae urna quis massa consectetur cursus ultricies in tellus. Aliquam sed odio in neque mattis laoreet. Cras lacus purus,</p>
					<a class="read-more" href="#">read more</a>
				</div>
				<div>
					<a href="#"><img src="<? bloginfo('template_url');?>/Images/bloc-foto2.2.jpg" alt="" /></a>
						<h2><a href="#">Exhibition Now On</a></h2>
					<p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem can <a href="#">this is an inline link</a>. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
					<a class="read-more" href="#">read more</a>
				</div>
				<div>
					<a href="#"><img src="<? bloginfo('template_url');?>/Images/bloc-foto3.1.jpg" alt="" /></a>
					<h2><a href="#">Latest Photo Shoot</a></h2>
					<p>Donec mollis suscipit nisi, vitae sagittis arcu euismod at. In at turpis vel odio fringilla vulputate at ac tellus. Phasellus nulla leo, vehicula sit amet congue eget, viverra ut augue epharetra aliquet turpis vel scelerisque. 
					Nullam ut enim nisi. Vivamus ut neque nulla. est aliquam consectetur augue et est dapibus ;</p>
					<a class="read-more" href="#">read more</a>
				</div>-->			
			</div>
		</div>
	<?get_footer();?>